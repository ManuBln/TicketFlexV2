<?php

namespace Database\Seeders;

use App\Models\Evento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evento::create([
            "nombre_evento" => "Evento 1",
            "imagen" => "imagen1.jpg",
            "precio" => 10.00,
            "fecha_hora" => "2024-05-06 15:56:40",
            "descripcion" => "Descripción del evento 1",
            "aforo" => 1000,
            "aforo_disponible" => 1000,
            "sala_id" => 1,
        ]);
        Evento::create([
            "nombre_evento" => "Evento 2",
            "imagen" => "imagen1.jpg",
            "precio" => 10.00,
            "fecha_hora" => "2024-05-06 15:56:40",
            "descripcion" => "Descripción del evento 1",
            "aforo" => 1000,
            "aforo_disponible" => 1000,
            "sala_id" => 1,
        ]);
        Evento::create([
            "nombre_evento" => "Evento 3",
            "imagen" => "imagen1.jpg",
            "precio" => 10.00,
            "fecha_hora" => "2024-05-06 15:56:40",
            "descripcion" => "Descripción del evento 1",
            "aforo" => 1000,
            "aforo_disponible" => 1000,
            "sala_id" => 1,
        ]);
        Evento::create([
            "nombre_evento" => "Evento 4",
            "imagen" => "imagen1.jpg",
            "precio" => 10.00,
            "fecha_hora" => "2024-05-06 15:56:40",
            "descripcion" => "Descripción del evento 1",
            "aforo" => 1000,
            "aforo_disponible" => 1000,
            "sala_id" => 1,
        ]);
        Evento::create([
            "nombre_evento" => "Evento 5",
            "imagen" => "imagen1.jpg",
            "precio" => 10.00,
            "fecha_hora" => "2024-05-06 15:56:40",
            "descripcion" => "Descripción del evento 1",
            "aforo" => 1000,
            "aforo_disponible" => 1000,
            "sala_id" => 1,
        ]);
    }
}
