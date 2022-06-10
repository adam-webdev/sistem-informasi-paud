<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123')
        ]);
        $user->assignRole('Admin');

        $siswa = User::create([
            'name' => 'siswa',
            'email' => 'siswa@gmail.com',
            'password' => Hash::make('siswa123')
        ]);
        $siswa->assignRole('Siswa');

        $guru = User::create([
            'name' => 'guru',
            'email' => 'guru@gmail.com',
            'password' => Hash::make('guru123')
        ]);
        $guru->assignRole('Guru');
    }
}