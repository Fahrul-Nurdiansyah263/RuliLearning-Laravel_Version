<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IsiMateri extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'isi_materis';

    protected $fillable = [
        'kategori_id',
        'judul',
        'isi',
        'gambar',
        'urutan',
    ];

    
    public function kategoriMateri(): BelongsTo
    {
        return $this->belongsTo(KategoriMateri::class, 'kategori_id');
    }
}