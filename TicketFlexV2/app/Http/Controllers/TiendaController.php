<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Evento;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    //

    public $cestaEvento = [];
    public $cestaArticulo = [];
    public $cestaDrop = [];

    public function eventos(Request $request)
    {
        // $request->session()->forget(['cestaEvento', 'cestaArticulo']);

        $eventos = Evento::all(); // Obtener todos los eventos
        $articulos = Articulo::all();

        $cestaEvento = $request->session()->get('cestaEvento', []);
        $cestaArticulo = $request->session()->get('cestaArticulo', []);

        return view('tienda')->with([
            'eventos' => $eventos,
            'articulos' => $articulos,
            'cestaEvento' => $cestaEvento,
            'cestaArticulo' => $cestaArticulo
        ]); // Pasar las variables a la vista
    }


    public function cestaEntrada(Request $request, String $nombre)
    {
        $evento = Evento::where('nombre_evento', $nombre)->first();

        $item = [
            'nombre' => $evento->nombre_evento,
            'imagen' => $evento->imagen,
            'precio' => $evento->precio
        ];

        $request->session()->push('cestaEvento', $item);
        $request->session()->flash('mensaje', 'Entrada añadida a la cesta');
        return redirect()->back();
    }

    public function cestaArticulo(Request $request, String $nombre)
    {
        $articulo = Articulo::where('nombre', $nombre)->first();

        $item = [
            'nombre' => $articulo->nombre,
            'imagen' => $articulo->imagen, // Asegúrate de tener el campo 'imagen' en tu tabla de artículos
            'precio' => $articulo->precio
        ];

        $request->session()->push('cestaArticulo', $item);
        $request->session()->flash('mensaje', 'Artículo añadido a la cesta');
        return redirect()->back();
    }




}
