<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seller;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seller::create([
            'name'  => "Sara Guara",
            'email' => "sg@example.com",
            'phone' => "+51789456156",
        ]);
        Seller::create([
            'name'  => "Nora Rodriguez",
            'email' => "nr@example.com",
            'phone' => "+51789484556",
        ]);
        Seller::create([
            'name'  => "Eva Martinez",
            'email' => "em@example.com",
            'phone' => "+51784794556",
        ]);
        Seller::create([
            'name'  => "Neymar Gomez",
            'email' => "ng@example.com",
            'phone' => "+51789484577",
        ]);
    }
}
