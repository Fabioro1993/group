<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tasks;
use Carbon\Carbon;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tasks::create([
            'description' => "Mantenimiento del servidor",
            'author_id'   => 1,
            'user_id'     => 2,
            'date_max'    => Carbon::now()->addDays(2),
        ]);
        Tasks::create([
            'description' => "Aumento de nomina",
            'author_id'   => 2,
            'user_id'     => 1,
            'date_max'    => Carbon::now()->subDays(2),
        ]);
        Tasks::create([
            'description' => "Instalacion de camaras",
            'author_id'   => 3,
            'user_id'     => 4,
            'date_max'    => Carbon::now()->addDays(7),
        ]);
        Tasks::create([
            'description' => "Cambio de equipo en recepcion",
            'author_id'   => 1,
            'user_id'     => 2,
            'date_max'    => Carbon::now()->addDays(1),
        ]);
    }
}