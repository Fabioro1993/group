<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Logs;
use Carbon\Carbon;

class LogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Logs::create([
            'tasks_id'   => 1,
            'commentary' => "Disco duro, espejo instalado",
            'date'       => Carbon::now(),
        ]);
        Logs::create([
            'tasks_id'   => 2,
            'commentary' => "Esperando aprobacion",
            'date'       => Carbon::now(),
        ]);
    }
}