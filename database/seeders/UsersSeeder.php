<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'nama' => 'Dzikry',
                'email' => 'dzikry@gmail.com',
                'password' => 'dzikry123',
                'role' => 'pegawai',
            ],
            [
                'nama' => 'admin',
                'email' => 'admin@admin.com',
                'password' => 'admin123',
                'role' => 'admin'
            ]
        ];

        foreach ($users as $user) {
            User::insert([
                'nama' => $user['nama'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
                'role' => $user['role']
            ]);
        }
    }
}
