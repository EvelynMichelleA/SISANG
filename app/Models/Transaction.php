<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transaksi_penjualan'; // Define table name

    protected $primaryKey = 'id_transaksi_penjualan'; // Define primary key

    // Define fillable columns to allow mass assignment
    protected $fillable = [
        'id_pelanggan',
        'id_pengguna',
        'total_biaya',
        'tanggal_transaksi',
        'metode_pembayaran',
        'created_at',
        'updated_at',
    ];

    // If you want to handle soft deletes, uncomment the line below and include the SoftDeletes trait
    // use Illuminate\Database\Eloquent\SoftDeletes;
    // protected $dates = ['deleted_at'];

    // Disable timestamps if not using them in the table
    public $timestamps = false;
}
