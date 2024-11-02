<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users'; // Nama tabel di database
    protected $primaryKey = 'id_pengguna';
    
    public function role()
    {
        return $this->belongsTo(Role::class,  'id_role');
    }

    protected $fillable = [
        'nama_pengguna',
        'username', // Pastikan ini sesuai dengan kolom di tabel users
        'email_pengguna',
        'password',
        'id_role', // Kolom role_id untuk relasi dengan Role
    ];

    // Relasi ke model Role
   
}
