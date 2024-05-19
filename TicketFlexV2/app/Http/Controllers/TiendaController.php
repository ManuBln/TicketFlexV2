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
        // Aquí podrías guardar la información de la compra en la base de datos o en la sesión   POR SI HACEMOS HISTORIAL DE COMPRA
        // Por ejemplo:
        // $compra = new Compra;
        // $compra->evento_id = $evento->id;
        // $compra->user_id = auth()->user()->id;
        // $compra->save();


        //dd($nombre); // Mostrar el nombre del evento (para comprobar que funciona)
        $mensaje = "Entrada añadida a la cesta";
        $this->cestaEvento[] = $nombre; // Añadir el evento a la cesta


        $request->session()->flash('mensaje', $mensaje); // Guardar un mensaje en la sesión

        return redirect()->back(); // Redirigir a la página anterior con un mensaje
    }


    public function cestaArticulo(Request $request, String $nombre_articulo)
    {
           // Aquí podrías guardar la información de la compra en la base de datos o en la sesión   POR SI HACEMOS HISTORIAL DE COMPRA
        // Por ejemplo:
        // $compra = new Compra;
        // $compra->evento_id = $evento->id;
        // $compra->user_id = auth()->user()->id;
        // $compra->save();


        dd($nombre_articulo); // Mostrar el nombre del evento (para comprobar que funciona)
        $mensajeArticulo = "Artículo añadido a la cesta";
        $this->cestaArticulo[] = $nombre_articulo; // Añadir el evento a la cesta


        $request->session()->flash('mensajeArticulo', $mensajeArticulo); // Guardar un mensaje en la sesión

        return redirect()->back(); // Redirigir a la página anterior con un mensaje
    }



    public function cestaDrop()
    {
    }
}
