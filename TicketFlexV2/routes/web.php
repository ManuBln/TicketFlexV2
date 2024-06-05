<?php

use App\Http\Controllers\TiendaController;
use App\Http\Controllers\PagoController;
use Illuminate\Support\Facades\Route;
use App\Mail\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use  Barryvdh\DomPDF\Facade\Pdf as PDF;

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


Route::post('/procesar-pago', [PagoController::class, 'procesarPago'])->name('procesar-pago');
Route::get('/confirmado', [PagoController::class, 'confirmado'])->name('confirmado');

/*
 * Route::post('/procesar-pago', function () {
    // Aquí procesas el pago
    return 'Pago procesado';
})->name('procesar-pago');*/
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


Route::get('/pago', function () {
    return view('pago');
})->name('pago');


Route::get('/merch', function () {
    return view('merch');
});

Route::get('/drops', function () {
    return view('drops');
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
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







