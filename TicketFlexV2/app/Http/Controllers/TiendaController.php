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
        $mensaje = "Entrada añadida a la cesta";
        $request->session()->push('cestaEvento', $nombre); // Añadir el evento a la cesta en la sesión
        $request->session()->flash('mensaje', $mensaje); // Guardar un mensaje en la sesión
        return redirect()->back(); // Redirigir a la página anterior con un mensaje
    }

    public function cestaArticulo(Request $request, String $nombre)
    {
        $mensaje = "Artículo añadido a la cesta";
        $request->session()->push('cestaArticulo', $nombre); // Añadir el artículo a la cesta en la sesión
        $request->session()->flash('mensaje', $mensaje); // Guardar un mensaje en la sesión
        return redirect()->back(); // Redirigir a la página anterior con un mensaje
    }




    public function cestaDrop()
    {
    }
}
