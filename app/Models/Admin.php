<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $guard = 'admin'; // Nama tabel di database
    
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
}
