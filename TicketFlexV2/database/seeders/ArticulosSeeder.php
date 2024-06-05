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
            "nombre" => "Camiseta Red Hot Chili Pepe",
            "imagen_ruta" => "https://rockntipo.com/230392-large_default_2x/red-hot-chili-peppers-logo-camiseta-manga-corta.jpg",
            "descripcion" => "Los icónicos Red Hot Chili Peppers, una de las bandas de rock más influyentes de las últimas décadas.",
            "precio" => 30,
            "unidades" => 130,
            "hora_entrada" => "2024-05-06 15:56:40",
            "hora_salida" => "2024-05-06 15:56:40",
        ]);
        Articulo::create([
            "nombre" => "Jersey Los Chunguitos",
            "imagen_ruta" => "https://m.media-amazon.com/images/I/61K3amllzeL._AC_UF1000,1000_QL80_.jpg",
            "descripcion" => "Los Chunguitos, el emblemático grupo español de rumba y flamenco que promete emociones fuertes y una conexión única con el público.",
            "precio" => 40,
            "unidades" => 250,
            "hora_entrada" => "2024-05-06 15:56:40",
            "hora_salida" => "2024-05-06 15:56:40",
        ]);
        Articulo::create([
            "nombre" => "Sudadera Jarfaiter",
            "imagen_ruta" => "https://www.randaoffensive.com/cdn/shop/files/MANTENLOCRIMINALA.jpg?v=1708003812",
            "descripcion" => "El rapero español Jarfaiter con su música underground con letras potentes y ritmos contundentes, perfecta para los amantes del género.",
            "precio" => 45,
            "unidades" => 400,
            "hora_entrada" => "2024-05-06 15:56:40",
            "hora_salida" => "2024-05-06 15:56:40",
        ]);
        Articulo::create([
            "nombre" => "Camiseta Twenty One Pilots",
            "imagen_ruta" => "https://www.merchandisingplaza.es/410429/2/Camisetas-Twenty-One-Pilots-Camiseta-Twenty-One-Pilots-unisex---Design--Vessel-Vintage-l.jpg",
            "descripcion" => "Dúo musical estadounidense cuyo estilo combina el hiphop, el metal y el rock independiente.",
            "precio" => 60,
            "unidades" => 1500,
            "hora_entrada" => "2024-05-06 15:56:40",
            "hora_salida" => "2024-05-06 15:56:40",
        ]);
        Articulo::create([
            "nombre" => "Sudadera TicketFlex",
            "imagen_ruta" => "https://www.thekooples.com/dw/image/v2/BGQL_PRD/on/demandware.static/-/Sites-skp-master-catalog/default/dw5dcd6eb1/images/hi-res/FTSC24038KBLA55_A.jpg?sw=1300&sh=1475",
            "descripcion" => "Muestra tu pasión por los eventos y el entretenimiento con la camiseta oficial de TicketFlex",
            "precio" => 20,
            "unidades" => 420,
            "hora_entrada" => "2024-05-06 15:56:40",
            "hora_salida" => "2024-05-06 15:56:40",
        ]);
        Articulo::create([
            "nombre" => "Drop 1",
            "imagen_ruta" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/07/Metallica_at_The_O2_Arena_London_2008.jpg/1200px-Metallica_at_The_O2_Arena_London_2008.jpg",
            "descripcion" => "Descripcion del articulo 1",
            "precio" => 100,
            "unidades" => 100,
            "hora_entrada" => "2024-05-06 15:56:40",
            "hora_salida" => "2024-05-06 15:56:40",
        ]);

        Articulo::create([
            "nombre" => "Drop 2",
            "imagen_ruta" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/07/Metallica_at_The_O2_Arena_London_2008.jpg/1200px-Metallica_at_The_O2_Arena_London_2008.jpg",
            "descripcion" => "Descripcion del articulo 1",
            "precio" => 100,
            "unidades" => 100,
            "hora_entrada" => "2024-05-06 15:56:40",
            "hora_salida" => "2024-05-06 15:56:40",
        ]);
    }
}
