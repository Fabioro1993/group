<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => "Adriana Perez",
            'email'    => "ap@example.com",
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name'     => "Juan Marin",
            'email'    => "jm@example.com",
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name'     => "Maria Gonzalez",
            'email'    => "mg@example.com",
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name'     => "Renata Gutierrez",
            'email'    => "rg@example.com",
            'password' => bcrypt('12345678'),
        ]);
    }
}