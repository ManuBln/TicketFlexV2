<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagoController extends Controller
{
    //
    public function pago(Request $request)
    {
        // Obtener la cesta de la sesión
        $cestaEvento = $request->session()->get('cestaEvento', []);
        $cestaArticulo = $request->session()->get('cestaArticulo', []);

        return view('pago')->with([
            'cestaEvento' => $cestaEvento,
            'cestaArticulo' => $cestaArticulo
        ]);
    }

    public function procesarPago(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'shipping_address' => 'required|string',
            'cardholder_name' => 'required|string',
            'card_number' => 'required|string',
            'expiry_date' => 'required|string',
            'cvv' => 'required|string',
            'billing_address' => 'required|string',
        ]);

        // Obtener los datos del formulario
        $data = $request->all();

        // Obtener los nombres de los artículos y entradas seleccionadas de la sesión
        $data['entrada_seleccionada'] = $request->session()->get('cestaEvento', []);
        $data['articulo_seleccionado'] = $request->session()->get('cestaArticulo', []);

        // Redirigir a la vista 'confirmado' con los datos
        return redirect()->route('confirmado')->with('data', $data);
    }

    public function confirmado()
    {
        // Obtener los datos de la sesión
        $data = session('data', []);

        // Mostrar la vista 'confirmado' con los datos
        return view('confirmado', compact('data'));
    }
}
