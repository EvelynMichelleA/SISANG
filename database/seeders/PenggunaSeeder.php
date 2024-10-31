<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'id_pengguna' => 1,
                'id_role' => 1,
                'username' => 'budi_santoso',
                'password' => bcrypt('password1'),
                'email_pengguna' => 'budi@example.com',
                'nama_pengguna' => 'Budi Santoso',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => now(),
            ],
            [
                'id_pengguna' => 2,
                'id_role' => 2,
                'username' => 'siti_rahmawati',
                'password' => bcrypt('password2'),
                'email_pengguna' => 'siti@example.com',
                'nama_pengguna' => 'Siti Rahmawati',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => now(),
            ],
            [
                'id_pengguna' => 3,
                'id_role' => 3,
                'username' => 'andi_setiawan',
                'password' => bcrypt('password3'),
                'email_pengguna' => 'andi@example.com',
                'nama_pengguna' => 'Andi Setiawan',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => now(),
            ],
            [
                'id_pengguna' => 4,
                'id_role' => 1,
                'username' => 'rina_julianti',
                'password' => bcrypt('password4'),
                'email_pengguna' => 'rina@example.com',
                'nama_pengguna' => 'Rina Julianti',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => now(),
            ],
            [
                'id_pengguna' => 5,
                'id_role' => 2,
                'username' => 'john_doe',
                'password' => bcrypt('password5'),
                'email_pengguna' => 'john@example.com',
                'nama_pengguna' => 'John Doe',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => now(),
            ],
            [
                'id_pengguna' => 6,
                'id_role' => 3,
                'username' => 'ani_susanti',
                'password' => bcrypt('password6'),
                'email_pengguna' => 'ani@example.com',
                'nama_pengguna' => 'Ani Susanti',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => now(),
            ],
            [
                'id_pengguna' => 7,
                'id_role' => 1,
                'username' => 'doni_prasetyo',
                'password' => bcrypt('password7'),
                'email_pengguna' => 'doni@example.com',
                'nama_pengguna' => 'Doni Prasetyo',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => now(),
            ],
            [
                'id_pengguna' => 8,
                'id_role' => 2,
                'username' => 'tina_setyowati',
                'password' => bcrypt('password8'),
                'email_pengguna' => 'tina@example.com',
                'nama_pengguna' => 'Tina Setyowati',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id_pengguna' => 9,
                'id_role' => 3,
                'username' => 'fandi_rahman',
                'password' => bcrypt('password9'),
                'email_pengguna' => 'fandi@example.com',
                'nama_pengguna' => 'Fandi Rahman',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id_pengguna' => 10,
                'id_role' => 1,
                'username' => 'lina_marlina',
                'password' => bcrypt('password10'),
                'email_pengguna' => 'lina@example.com',
                'nama_pengguna' => 'Lina Marlina',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
        ]);
    }
}
