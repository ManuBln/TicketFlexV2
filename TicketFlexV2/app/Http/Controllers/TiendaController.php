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

    public function eventos()
    {
        // dd(Evento::all());
        $eventos = Evento::all(); // Obtener todos los eventos
        $articulos = Articulo::all();
        return view('tienda')->with(['eventos' => $eventos, 'articulos'=> $articulos]); // Pasar la variable $eventos a la vista
        
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
