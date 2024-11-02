<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   public function run()
   {
    $this->call(RoleSeeder::class);
    $this->call(UserSeeder::class);
    $this->call(PelangganSeeder::class);
    $this->call(MenuSeeder::class);
    $this->call(PengeluaranSeeder::class);
    $this->call(TransaksiPenjualanSeeder::class);
    $this->call(DetailTransaksiPenjualanSeeder::class);
   }
}