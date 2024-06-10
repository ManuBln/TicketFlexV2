<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TicketController extends Controller
{
    public function fetchEntrada(Request $request)
    {
        $code = $request->input('code');

        try {

            $entrada = DB::table('entradas')->where('codigo', $code)->get();

            if ($entrada->isNotEmpty()) {
                return response()->json(['respuesta' => 'si']);
            } else {
                return response()->json(['respuesta' => 'no']);
            }
        } catch (\Exception $e) {
            Log::error('Error: ' . $e->getMessage());
            return response()->json(['error' => ['text' => 'error en la base de datos']], 500);
        }
    }
}
