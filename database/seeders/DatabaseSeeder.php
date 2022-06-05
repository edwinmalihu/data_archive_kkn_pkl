<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
        User::create([
           'name' => 'rendy',
           'npm_nip' => '121212',
           'fakultas' => 'Teknologi Informasi',
           'jurusan' => 'teknik informatika',
           'status' => 2,
           'email' => 'randy@gmail.com',
           'password' => bcrypt('password')
        ]);
    }
}
