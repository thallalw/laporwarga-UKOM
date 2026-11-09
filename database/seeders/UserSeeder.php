<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Ketua RT
       User::create([
    'name' => 'Ketua RT',
    'role' => 'rt',
    'area_id' => null,
    'password' => Hash::make('RukunTetangga2'),
]);

        // Akun Ketua RW
        User::create([
            'name' => 'Ketua RW',
            'role' => 'rw',
            'area_id' => null,
            'password' => Hash::make('RukunWarga12'),
        ]);
    }
}
