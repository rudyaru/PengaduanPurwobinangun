<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // akun admin
        DB::table('users')->insert([
            'nik' => '250404',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '082137169851',
            'password' => Hash::make('admin'),
            'roles' => 'ADMIN',
        ]);

        // akun warga
        DB::table('users')->insert([
            'nik' => '331816',
            'name' => 'Warga A',
            'email' => 'wargaa@gmail.com',
            'phone' => '082234567890',
            'password' => Hash::make('wargaa'),
            'roles' => 'USER',
        ]);

        // // akun petugas
        // DB::table('petugas')->insert([
        //     'nama_petugas' => 'petugas1',
        //     'username' => 'petugas1',
        //     'email' => 'petugas1@gmail.com',
        //     'telp' => '087545678832',
        //     'password' => Hash::make('petugas1'),
        //     'level' => 'admin',
        // ]);
    }
}
