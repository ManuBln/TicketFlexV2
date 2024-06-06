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
            "nombre_evento" => "Red Hot Chili Peppers",
            "imagen" => "https://cdn.wegow.com/media/artists/red-hot-chili-peppers/red-hot-chili-peppers-1634893172.0399256.1780x720.jpg",
            "precio" => 80.00,
            "fecha_hora" => "2024-06-24 20:00:00",
            "descripcion" => "Los icónicos Red Hot Chili Peppers llegan al Mad Cool Festival de Madrid para ofrecer un concierto lleno de energía y sus mayores éxitos. Una oportunidad imperdible para disfrutar de una de las bandas de rock más influyentes de las últimas décadas.",
            "aforo" => 50000,
            "aforo_disponible" => 50000,
            "sala_id" => 1,
        ]);
        Evento::create([
            "nombre_evento" => "Los Chunguitos",
            "imagen" => "https://s1.elespanol.com/2015/01/16/bluper/bluper_3760093_169982858_1706x960.jpg",
            "precio" => 15.00,
            "fecha_hora" => "2024-06-21 21:00:00",
            "descripcion" => "Los Chunguitos, el emblemático grupo español de rumba y flamenco, se presentan en la Sala X de Sevilla. Un concierto íntimo que promete emociones fuertes y una conexión única con el público.",
            "aforo" => 500,
            "aforo_disponible" => 500,
            "sala_id" => 1,
        ]);
        Evento::create([
            "nombre_evento" => "Jarfaiter en concierto",
            "imagen" => "https://imagenes.20minutos.es/files/image_1920_1080/uploads/imagenes/2024/02/02/jarfaiter.jpeg",
            "precio" => 21.00,
            "fecha_hora" => "2024-05-06 15:56:40",
            "descripcion" => "El rapero español Jarfaiter llega a Granada para presentar su último trabajo en la Sala La Tren. Una noche de rap underground con letras potentes y ritmos contundentes, perfecta para los amantes del género.",
            "aforo" => 800,
            "aforo_disponible" => 800,
            "sala_id" => 1,
        ]);
        Evento::create([
            "nombre_evento" => "21 pilotos en Primavera Sound",
            "imagen" => "https://estaticos-cdn.prensaiberica.es/clip/791613b8-cc52-44d2-980f-93c4777ac50a_alta-libre-aspect-ratio_default_0.jpg",
            "precio" => 40.00,
            "fecha_hora" => "2024-05-31 23:00:00",
            "descripcion" => "Twenty One Pilots regresa a España como parte del prestigioso Primavera Sound en Barcelona. El dúo estadounidense promete un espectáculo lleno de sorpresas, con su mezcla única de estilos musicales y una puesta en escena inigualable",
            "aforo" => 40000,
            "aforo_disponible" => 40000,
            "sala_id" => 1,
        ]);
        Evento::create([
            "nombre_evento" => "Taylor Swift Eras Tour",
            "imagen" => "https://www.mondosonoro.com/wp-content/uploads/2023/06/TaylorSwift.jpg",
            "precio" => 90.00,
            "fecha_hora" => "2024-05-06 15:56:40",
            "descripcion" => "El mejor evento de la historia de la música, Taylor Swift en concierto. No te lo pierdas, será una noche inolvidable.",
            "aforo" => 80000,
            "aforo_disponible" => 1500,
            "sala_id" => 1,
        ]);
    }
}
