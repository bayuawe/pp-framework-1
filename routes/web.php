<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KomentarController;

// admin controller
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\PostController;

// login controller
use App\Http\Controllers\Auth\LoginController;

// register controller
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', function () {
    return view('index');
});

// login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// register routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/get-data-pasien', [PasienController::class, 'getDataPasien']);

Route::get('/pasien/detail/{id}', [PasienController::class, 'getPasienDetail']);

Route::get('/post/informasi-kkn', [BeritaController::class, 'getBeritaByJudul']);

Route::get('/post/user/{userId}', [BeritaController::class, 'getBeritaByPembuat']);

Route::get('/post/tanggal/{tanggal}', [BeritaController::class, 'getBeritaByTanggal']);

Route::get('/post/{postId}/comment', [KomentarController::class, 'getKomentarByPost']);

Route::get('/post/kategori/{kategoriId}', [BeritaController::class, 'getBeritaByKategori']);

Route::middleware(['auth', 'admin'])->prefix('wbpanel')->group(function () {
    // Kategori routes
    Route::get('/kategori', [KategoriController::class, 'index']);
    Route::get('/kategori/form', [KategoriController::class, 'showForm']);
    Route::post('/kategori/save', [KategoriController::class, 'save']);
    Route::get('/kategori/update/{id}', [KategoriController::class, 'updateForm']);
    Route::post('/kategori/update/{id}', [KategoriController::class, 'update']);
    Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete']);

    // Post routes
    Route::get('/post', [PostController::class, 'index']);
    Route::get('/post/form', [PostController::class, 'showForm']);
    Route::post('/post/save', [PostController::class, 'save']);
    Route::get('/post/update/{id}', [PostController::class, 'updateForm']);
    Route::post('/post/update/{id}', [PostController::class, 'update']);
    Route::get('/post/delete/{id}', [PostController::class, 'delete']);
});

Route::resource('posts', PostController::class);
Route::auth();

Route::get('/home', [HomeController::class, 'index'])->name('home');
