<?php


use App\Http\Controllers\ProductosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticulosLimpiezaController;

use App\Http\Controllers\ArticulosEscritorioController;
use App\Http\Controllers\MobiliarioOficinaController;

use App\Http\Controllers\SillaGamerController;
use App\Http\Controllers\EscritorioOdinController;

use App\Http\Controllers\EstantesLibrosController;
use App\Http\Controllers\ImpresorasController;
use App\Http\Controllers\PCsController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ContactanosController;

use App\Http\Controllers\LaptopController;

use App\Http\Controllers\SistemaEController;
use App\Http\Controllers\MueblesMController;
use App\Http\Controllers\ConstruccioPController;
use App\Http\Controllers\GamerFalkorPCController;

use App\Http\Controllers\HPOmenController;
use App\Http\Controllers\DellG15Controller;
use App\Http\Controllers\AsusBookController;
use App\Http\Controllers\AcerNitroController;
use App\Http\Controllers\MacBookP16Controller;
use App\Http\Controllers\MSIGF63Controller;

use App\Http\Controllers\DellAlienController;
use App\Http\Controllers\DellInspironController;

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
// Route::get('productos', [ProductosController::class,'productos'])->name('admin.productos');
Route::get('productos', [ProductosController::class,'productos'])->name('admin.productos');
Route::get('productos/create', [ProductosController::class, 'createproductos'])->name("productos.create");
Route::post('productos', [ProductosController::class, 'storeproductos'])->name('productos.store');
Route::get('productos/{idProducto}/edit', [ProductosController::class, 'editproductos'])->name("productos.edit");
Route::put('productos/{idProducto}', [ProductosController::class, 'updateproductos'])->name('productos.update');
Route::delete('productos/{idProducto}', [ProductosController::class, 'destroyproductos'])->name('productos.destroy');
Route::get('productos1', [ProductosController::class, 'show'])->name('productos.show');

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/loginadmin', [AdminLoginController::class,'index'])->name('login.index');
Route::post('/loginadmin', [AdminLoginController::class,'login'])->name('login.login');
Route::get('/loginadmin/logoutadmin', [AdminLoginController::class,'logout'])->name('login.logout');
Route::get('adminprincipal', [AdminController::class,'index'])->name('admin.principal');





// Rutas para el controlador de inicio de sesión
Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//Rutas para el registro de usuarios
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);




Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::post('contacto', [ContactanosController::class, 'storecontacto'])->name('contacto.store');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/articulos-limpieza', [ArticulosLimpiezaController::class, 'mostrarArticulos'])->name('articulos-limpieza');
Route::get('/articulos-escritorio', [ArticulosEscritorioController::class, 'mostrarArticulos'])->name('articulos-escritorio');
Route::get('/mobiliario-oficina', [MobiliarioOficinaController::class, 'mostrarMobiliario'])->name('mobiliario-oficina');
Route::get('/silla-gamer', [SillaGamerController::class, 'mostrarSillaGamer'])->name('silla-gamer');
Route::get('/escritorio-odin', [EscritorioOdinController::class, 'mostrarEscritorioOdin'])->name('escritorio-odin');

Route::get('/impresoras', [ImpresorasController::class, 'mostrarImpresoras'])->name('impresoras');

Route::get('/estantes-libros', [EstantesLibrosController::class, 'mostrarEstantesLibros'])->name('estantes-libros');
Route::get('/pcs', [PCsController::class, 'mostrarPCs'])->name('pcs');

Route::get('categoriaProductos', [CategoriaController::class,'categoria'])->name('admin.categoria');
Route::get('categoria/create', [CategoriaController::class, 'createcategoria'])->name('categoria.create');
Route::post('categoria', [CategoriaController::class, 'storecategoria'])->name('categoria.store');
Route::get('categoria/{idCategoria}/edit', [CategoriaController::class, 'editcategoria'])->name("categoria.edit");
Route::put('categoria/{idCategoria}', [CategoriaController::class, 'updatecategoria'])->name('categoria.update');
Route::delete('categoria/{idCategoria}', [CategoriaController::class, 'destroycategoria'])->name('categoria.destroy');



Route::get('usuarios', [UsuariosController::class,'usuarios'])->name('admin.usuarios');
Route::get('usuarios/create', [UsuariosController::class, 'createusuarios'])->name('usuarios.create');
Route::post('usuarios', [UsuariosController::class, 'storeusuarios'])->name('usuarios.store');
Route::get('usuarios/{idUsuario}/edit', [UsuariosController::class, 'editusuarios'])->name("usuarios.edit");
Route::put('usuarios/{idUsuario}', [UsuariosController::class, 'updateusuarios'])->name('usuarios.update');
Route::delete('usuarios/{idUsuario}', [UsuariosController::class, 'destroyusuarios'])->name('usuarios.destroy');

Route::get('/laptop', [LaptopController::class, 'show'])->name('laptop');
Route::get('/sistemaE', [SistemaEController::class, 'index'])->name('sistemaE');
Route::get('/mueblesM', [MueblesMController::class, 'index'])->name('mueblesM');
Route::get('/construccioP', [ConstruccioPController::class, 'index'])->name('construccioP');
Route::get('/gamerFalkorPC', [GamerFalkorPCController::class, 'index'])->name('gamerFalkorPC');
Route::get('/hP-Omen', [HPOmenController::class, 'index'])->name('hP-Omen');
Route::get('/dellG15', [DellG15Controller::class, 'index'])->name('dellG15');
Route::get('/asusBook', [AsusBookController::class, 'index'])->name('asusBook');
Route::get('/acerNitro', [AcerNitroController::class, 'index'])->name('acerNitro');
Route::get('/macBookP16', [MacBookP16Controller::class, 'index'])->name('macBookP16');
Route::get('/mSIGF63', [MSIGF63Controller::class, 'index'])->name('mSIGF63');
Route::get('/dellAlien', [DellAlienController::class, 'index'])->name('dellAlien');
Route::get('/dellInspiron', [DellInspironController::class, 'index'])->name('dellInspiron');
