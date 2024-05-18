<?php

namespace Database\Seeders;

use App\Models\Articulo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Articulo::create([
            "nombre" => "Articulo 1",
            "imagen_ruta" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/07/Metallica_at_The_O2_Arena_London_2008.jpg/1200px-Metallica_at_The_O2_Arena_London_2008.jpg",
            "descripcion" => "Descripcion del articulo 1",
            "precio" => 100,
            "unidades" => 100,
            "hora_entrada" => "2024-05-06 15:56:40",
            "hora_salida" => "2024-05-06 15:56:40",
        ]);
        Articulo::create([
            "nombre" => "Articulo 2",
            "imagen_ruta" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/07/Metallica_at_The_O2_Arena_London_2008.jpg/1200px-Metallica_at_The_O2_Arena_London_2008.jpg",
            "descripcion" => "Descripcion del articulo 1",
            "precio" => 100,
            "unidades" => 100,
            "hora_entrada" => "2024-05-06 15:56:40",
            "hora_salida" => "2024-05-06 15:56:40",
        ]);
        Articulo::create([
            "nombre" => "Articulo 3",
            "imagen_ruta" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/07/Metallica_at_The_O2_Arena_London_2008.jpg/1200px-Metallica_at_The_O2_Arena_London_2008.jpg",
            "descripcion" => "Descripcion del articulo 1",
            "precio" => 100,
            "unidades" => 100,
            "hora_entrada" => "2024-05-06 15:56:40",
            "hora_salida" => "2024-05-06 15:56:40",
        ]);
        Articulo::create([
            "nombre" => "Articulo 4",
            "imagen_ruta" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/07/Metallica_at_The_O2_Arena_London_2008.jpg/1200px-Metallica_at_The_O2_Arena_London_2008.jpg",
            "descripcion" => "Descripcion del articulo 1",
            "precio" => 100,
            "unidades" => 100,
            "hora_entrada" => "2024-05-06 15:56:40",
            "hora_salida" => "2024-05-06 15:56:40",
        ]);
    }
}
