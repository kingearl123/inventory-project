<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'id_user';
    protected $fillable = [
       'username',
       'password',
       'role'
    ];
    public $timestamps = false; // Nonaktifkan kolom timestamps

    public function karakter(): HasOne
    {
        return $this->hasOne(Karyawan::class, 'id_user', 'id_user');
    }

}
