<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invoice;
use Carbon\Carbon;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Invoice::create([
            'date'      => Carbon::now(),
            'user_id'   => 1,
            'seller_id' => 4,
            'type'      => "ordinaria",
        ]);
        Invoice::create([
            'date'      => Carbon::now(),
            'user_id'   => 2,
            'seller_id' => 1,
            'type'      => "ordinaria",
        ]);
        Invoice::create([
            'date'      => Carbon::now(),
            'user_id'   => 2,
            'seller_id' => 3,
            'type'      => "proforma",
        ]);
        Invoice::create([
            'date'      => Carbon::now(),
            'user_id'   => 3,
            'seller_id' => 2,
            'type'      => "proforma",
        ]);
        Invoice::create([
            'date'      => Carbon::now(),
            'user_id'   => 3,
            'seller_id' => 1,
            'type'      => "proforma",
        ]);
    }
}