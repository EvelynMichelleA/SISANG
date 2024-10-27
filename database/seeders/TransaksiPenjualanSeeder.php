<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiPenjualanSeeder extends Seeder
{
    public function run()
    {
        DB::table('transaksi_penjualan')->insert([
            [
                'id_transaksi_penjualan' => 1,
                'id_pelanggan' => 1,
                'id_pengguna' => 1,
                'total_biaya' => rand(10000, 500000) / 100,
                'tanggal_transaksi' => now(),
                'metode_pembayaran' => 'Cash', 
                'created_at' => now(),
                'updated_at' => null, 
            ],
            [
                'id_transaksi_penjualan' => 2,
                'id_pelanggan' => 2,
                'id_pengguna' => 2,
                'total_biaya' => rand(10000, 500000) / 100,
                'tanggal_transaksi' => now(),
                'metode_pembayaran' => 'Cash', 
                'created_at' => now(),
                'updated_at' => null, 
            ],
            [
                'id_transaksi_penjualan' => 3,
                'id_pelanggan' => 3,
                'id_pengguna' => 3,
                'total_biaya' => rand(10000, 500000) / 100,
                'tanggal_transaksi' => now(),
                'metode_pembayaran' => 'Cash', 
                'created_at' => now(),
                'updated_at' => null, 
            ],
            [
                'id_transaksi_penjualan' => 4,
                'id_pelanggan' => 4,
                'id_pengguna' => 4,
                'total_biaya' => rand(10000, 500000) / 100,
                'tanggal_transaksi' => now(),
                'metode_pembayaran' => 'Cash', 
                'created_at' => now(),
                'updated_at' => null, 
            ],
            [
                'id_transaksi_penjualan' => 5,
                'id_pelanggan' => 5,
                'id_pengguna' => 5,
                'total_biaya' => rand(10000, 500000) / 100,
                'tanggal_transaksi' => now(),
                'metode_pembayaran' => 'Cash', 
                'created_at' => now(),
                'updated_at' => null, 
            ],
            [
                'id_transaksi_penjualan' => 6,
                'id_pelanggan' => 6,
                'id_pengguna' => 6,
                'total_biaya' => rand(10000, 500000) / 100,
                'tanggal_transaksi' => now(),
                'metode_pembayaran' => 'Cash', 
                'created_at' => now(),
                'updated_at' => null, 
            ],
            [
                'id_transaksi_penjualan' => 7,
                'id_pelanggan' => 7,
                'id_pengguna' => 7,
                'total_biaya' => rand(10000, 500000) / 100,
                'tanggal_transaksi' => now(),
                'metode_pembayaran' => 'Cash', 
                'created_at' => now(),
                'updated_at' => null, 
            ],
            [
                'id_transaksi_penjualan' => 8,
                'id_pelanggan' => 8,
                'id_pengguna' => 8,
                'total_biaya' => rand(10000, 500000) / 100,
                'tanggal_transaksi' => now(),
                'metode_pembayaran' => 'Cash', 
                'created_at' => now(),
                'updated_at' => null, 
            ],
            [
                'id_transaksi_penjualan' => 9,
                'id_pelanggan' => 9,
                'id_pengguna' => 9,
                'total_biaya' => rand(10000, 500000) / 100,
                'tanggal_transaksi' => now(),
                'metode_pembayaran' => 'Cash', 
                'created_at' => now(),
                'updated_at' => null, 
            ],
            [
                'id_transaksi_penjualan' => 10,
                'id_pelanggan' => 10,
                'id_pengguna' => 10,
                'total_biaya' => rand(10000, 500000) / 100,
                'tanggal_transaksi' => now(),
                'metode_pembayaran' => 'Cash', 
                'created_at' => now(),
                'updated_at' => null, 
            ],
        ]);
    }
}
