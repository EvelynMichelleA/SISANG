<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'users';
    protected $primaryKey = 'id_pengguna';

    protected $fillable = [
        'id_role',
        'username',
        'password',
        'email_pengguna',
        'nama_pengguna',
    ];

    protected $dates = ['deleted_at'];
}
