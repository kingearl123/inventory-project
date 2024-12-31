<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Barang extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_barang';
    protected $fillable = [
        'nama_barang',
        'stok',
        'harga'
    ];

    public function pemasukan(): HasMany
    {
        return $this->hasMany(pemasukan::class,'id_barang','id_barang');
    }

    public function pengeluaran(): HasMany
    {
        return $this->hasMany(pengeluaran::class,'id_barang','id_barang');
    }
}
