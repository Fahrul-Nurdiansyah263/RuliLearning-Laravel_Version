<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaksi extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $table = 'transaksis';

    protected $fillable = [
        'user_id',
        'kategori_id',
        'status',
        'order_id',
        'harga',
    ];

    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriMateri::class, 'kategori_id');
    }
}