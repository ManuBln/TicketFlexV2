<?php

use App\Http\Controllers\TiendaController;
use App\Http\Controllers\PagoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Mail\Notification;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Http\Controllers\TicketController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/articulo/{nombre}', [TiendaController::class, 'drops'])->name('articulo.drops');

/*------------------------------------------------------*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/portero', function () {
    return view('portero');
});

Route::get('/shop', function () {
    return view('shop');
});



Route::get('/tienda', [TiendaController::class, 'eventos'])->name('tienda');
Route::post('/tienda/entrada/{nombre}', [TiendaController::class, 'cestaEntrada'])->name('cestaEntrada');
Route::post('/tienda/articulo/{nombre}', [TiendaController::class, 'cestaArticulo'])->name('cestaArticulo');

Route::get('/pago', [PagoController::class, 'pago'])->name('pago');
Route::post('/procesar-pago', [PagoController::class, 'procesarPago'])->name('procesar-pago');
Route::get('/confirmado', [PagoController::class, 'confirmado'])->name('confirmado');



Route::get('/merch', function () {
    return view('merch');
});

Route::get('/drops', function () {
    return view('drops');
});

Auth::routes();

Route::get('/home', function () {
    if (Auth::check()) {
        return view('home');
    } else {
        return view('welcome');
    }
})->name('home');

Route::get('/email', function () {
    $user = Auth::user(); // Obtener el usuario autenticado

    if (!$user) {
        return view('welcome');
    } else {
        return (new Notification($user))->render();
    }
});

Route::get('/pdf', function () {
    $user = Auth::user(); // Obtener el usuario autenticado
    $data = [
        'name' => $user->name,
        'email' => $user->email,
    ];

    $pdf = PDF::loadView('pdfPlantilla', $data); // Generar PDF con la información del usuario

    return $pdf->download('archivo.pdf'); // Descargar el archivo PDF
});

Route::post('/procesar-pago', [PagoController::class, 'procesarPago'])->name('procesar-pago');
Route::get('/confirmado', [PagoController::class, 'confirmado'])->name('confirmado');


Route::post('/portero', [TicketController::class, 'fetchEntrada'])->name('portero');

Route::get('/portero', function () {
    $usuarioProtegido = 'portero@portero.com';

    if (Auth::check() && Auth::user()->email === $usuarioProtegido) {
        // Tu lógica para la ruta protegida
        return view('portero');
    }

    // Redirigir a la ruta welcome si el email no es permitido
    return redirect()->route('home');
})->name('portero');


