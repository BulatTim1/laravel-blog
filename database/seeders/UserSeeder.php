<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::query()->create([
            'username' => 'avavion.',
            'email' => 'avavionmvm@gmail.com',
            'password' => Hash::make('avavionmvm'),
            'role' => 'admin'
        ]);

        User::query()->create([
            'username' => 'manager',
            'email' => 'manager@gmail.com',
            'password' => Hash::make('manager'),
            'role' => 'admin'
        ]);

        User::query()->create([
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('useruser')
        ]);
    }
}
