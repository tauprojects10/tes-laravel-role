<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'tb_kategori';
    protected $fillable = [
        'nama_kategori',
    ];

    public function produk() : HasMany
    {
        return $this->hasMany(Produk::class);
    }
}
