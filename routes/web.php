<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ChatController;


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
    Route::get('/materi/{kategoriMateri}', [MateriController::class, 'show'])->name('materi.show');
    Route::get('/materi', [MateriController::class, 'index'])->name('materi.index');
    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
    Route::get('/materi/isi/{isiMateri}', [App\Http\Controllers\MateriController::class, 'showContent'])->name('materi.content.show');
    Route::get('/pembayaran/{id}', [App\Http\Controllers\PembayaranController::class, 'showPaymentPage'])->name('pembayaran.show');
    Route::post('/pembayaran/{id}', [App\Http\Controllers\PembayaranController::class, 'processPayment'])->name('pembayaran.process');
    Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
    Route::post('/chat/send', [ChatController::class, 'sendMessage'])->name('chat.send');
});

Route::post('/midtrans/webhook', [PembayaranController::class, 'webhook']);
Route::get('/', [FrontEndController::class, 'index']);