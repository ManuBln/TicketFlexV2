<?php

namespace Database\Seeders;

use App\Models\Evento;
use App\Models\Sala;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Sala::create([
            "nombre" => "Sala 1",
            "aforo" => 1000,
            "imagen" => "Calle de la Piruleta, 69",
            "lugar" => "Madrid",
        ]);
    }
}
