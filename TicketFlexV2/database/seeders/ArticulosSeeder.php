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
            "imagen_ruta" => "Calle de la Piruleta, 69",
            "descripcion" => "Descripcion del articulo 1",
            "precio" => 100,
            "unidades" => 100,
            "hora_entrada" => 10,
            "hora_salida" => 20,
        ]);
        Articulo::create([
            "nombre" => "Articulo 2",
            "imagen_ruta" => "Calle de la Piruleta, 69",
            "descripcion" => "Descripcion del articulo 1",
            "precio" => 100,
            "unidades" => 100,
            "hora_entrada" => 10,
            "hora_salida" => 20,
        ]);
        Articulo::create([
            "nombre" => "Articulo 3",
            "imagen_ruta" => "Calle de la Piruleta, 69",
            "descripcion" => "Descripcion del articulo 1",
            "precio" => 100,
            "unidades" => 100,
            "hora_entrada" => 10,
            "hora_salida" => 20,
        ]);
        Articulo::create([
            "nombre" => "Articulo 4",
            "imagen_ruta" => "Calle de la Piruleta, 69",
            "descripcion" => "Descripcion del articulo 1",
            "precio" => 100,
            "unidades" => 100,
            "hora_entrada" => 10,
            "hora_salida" => 20,
        ]);
    }
}
