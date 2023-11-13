<?php


use App\Http\Controllers\ProductosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticulosLimpiezaController;

use App\Http\Controllers\ArticulosEscritorioController;
use App\Http\Controllers\MobiliarioOficinaController;

use App\Http\Controllers\SillaGamerController;
use App\Http\Controllers\EscritorioOdinController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/productos', [ProductosController::class, 'show'])->name('productos');


// Rutas para el controlador de inicio de sesión
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/articulos-limpieza', [ArticulosLimpiezaController::class, 'mostrarArticulos'])->name('articulos-limpieza');
Route::get('/articulos-escritorio', [ArticulosEscritorioController::class, 'mostrarArticulos'])->name('articulos-escritorio');
Route::get('/mobiliario-oficina', [MobiliarioOficinaController::class, 'mostrarMobiliario'])->name('mobiliario-oficina');
Route::get('/silla-gamer', [SillaGamerController::class, 'mostrarSillaGamer'])->name('silla-gamer');
Route::get('/escritorio-odin', [EscritorioOdinController::class, 'mostrarEscritorioOdin'])->name('escritorio-odin');


