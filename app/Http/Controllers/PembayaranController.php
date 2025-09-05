<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\KategoriMateri;
use App\Models\Transaksi;
use Midtrans\Config;
use Midtrans\Snap;
use Midtrans\Notification;
use App\Mail\PembayaranBerhasil;

class PembayaranController extends Controller
{
    public function showPaymentPage($id)
    {
        $kategori = KategoriMateri::findOrFail($id);

        return view('pembayaran_konfirmasi', compact('kategori'));
    }

    public function processPayment(Request $request, $id)
    {
        $kategori = KategoriMateri::findOrFail($id);

        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $transaksi = Transaksi::create([
            'user_id' => Auth::id(),
            'kategori_id' => $kategori->id,
            'order_id' => 'ORDER-' . Str::uuid(),
            'harga' => $kategori->harga,
            'status' => 'pending'
        ]);

        $params = [
            'transaction_details' => [
                'order_id' => $transaksi->order_id,
                'gross_amount' => $transaksi->harga,
            ],
            'customer_details' => [
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        return view('bayar', compact('snapToken', 'kategori'));
    }

    public function webhook(Request $request)
    {
        Config::$serverKey = config('midtrans.server_key');

        try{
            $notification = new Notification();

            $status = $notification->transaction_status;
            $orderId = $notification->order_id;
            $fraudStatus = $notification->fraud_status;

            $transaksi = Transaksi::with(['user', 'kategori'])->where('order_id', $orderId)->first();

            if ($transaksi && $transaksi->status == 'pending') {
                if ($status == 'settlement' && $fraudStatus == 'accept'){
                    $transaksi->status = 'success';
                    $transaksi->save();

                    Mail::to($transaksi->user->email)->send(new PembayaranBerhasil($transaksi));

                }elseif ($status == 'deny' || $status == 'expire' || $status == 'cancel'){
                    $transaksi->status = 'failed';
                    $transaksi->save();
                }
            return response()->json(['message' => 'Midtrans notification handled.']);
        }
        

        }catch (\Exception $e){
            \Log::error('Midtrans Webhook Error: ' . $e->getMessage());
            return response()->json(['error' => 'Webhook Error: '. $e->getMessage()], 400);
        }

        
    }
}