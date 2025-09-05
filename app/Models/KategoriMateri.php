<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriMateri extends Model
{
    use HasFactory, SoftDeletes;

    
    protected $table = 'kategori_materis'; 

    protected $fillable = [
        'judul',
        'deskripsi',
        'is_premium',
        'harga',
        'gambar',
    ];

    
    public function isiMateris(): HasMany
    {
        return $this->hasMany(IsiMateri::class, 'kategori_id');
    }

   
    public function transaksis(): HasMany
    {
        return $this->hasMany(Transaksi::class, 'kategori_id');
    }
}