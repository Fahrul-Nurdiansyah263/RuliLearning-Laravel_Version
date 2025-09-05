<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\IsiMateri;
use App\Models\KategoriMateri;
use App\Models\Transaksi;

class MateriController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $idKategoriViaTransaksi = Transaksi::where('user_id', $userId)
          ->where('status', 'success')
          ->pluck('kategori_id');
        
        $idKategoriNonPremium = KategoriMateri::where('is_premium', false)->pluck('id');
        
        $idKategoriSudahBeli = $idKategoriViaTransaksi->merge($idKategoriNonPremium)->unique();

        $kategoriSudahBeli = KategoriMateri::whereIn('id', $idKategoriSudahBeli)
          ->orderBy('harga', 'asc')
          ->get();
        
        $kategoriBelumBeli = KategoriMateri::where('is_premium', true)
          ->whereNotIn('id', $idKategoriViaTransaksi)
          ->orderBy('harga', 'asc')
          ->get();

        return view('materi.index', [
          'kategoriBelumBeli' => $kategoriBelumBeli,
          'kategoriSudahBeli' => $kategoriSudahBeli,
        ]);
    }

    public function show(KategoriMateri $kategoriMateri)
    {
      $isiMateri = $kategoriMateri->isiMateris()->orderBy('urutan', 'asc')->get();

      return view('materi.show', [
        'kategoriMateri' => $kategoriMateri,
        'isiMateris' => $isiMateri,
      ]);
    }

    public function showContent(IsiMateri $isiMateri)
    {
      return view('materi.content', compact('isiMateri'));
    }
}