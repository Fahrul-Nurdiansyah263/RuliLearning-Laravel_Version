<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $idKategoriViaTransaksi = Transaksi::where('user_id', $userId)
        ->where('status', 'success')
        ->pluck('kategori_id');

        $transaksiSukses = Transaksi::whereIn('id', $idKategoriViaTransaksi)->get();

        return view('transaksi.index', [
            'transaksiSukses' => $transaksiSukses,
        ]);
    }
    
}
