<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Karyawan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_karyawan';
    protected $fillable = [
        'nama_karyawan',
        'alamat',
        'no_telp',
        'id_user'
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
    

    public function pemasukan(): HasMany
    {
        return $this->hasMany(pemasukan::class,'id_karyawan','id_karyawan');
    }

    public function pengeluaran(): HasMany
    {
        return $this->hasMany(pengeluaran::class,'id_karyawan','id_karyawan');
    }
}
