<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});
Route::get('/data-siswa', function () {
    return view('pages/data-siswa');
});

Route::get('/info', function () {
    return view('pages/info');
});
    
=======
Route::get('/', [MenuController::class, 'home']);
Route::get('/info-kegiatan', [MenuController::class, 'info_kegiatan']);
Route::get('/data-siswa', [MenuController::class, 'data_siswa']);
Route::get('/blog', [MenuController::class, 'data_blog']);
Route::get('/gallery', [MenuController::class, 'data_gallery']);
Route::get('/about', [MenuController::class, 'data_about']);
Route::get('/login', [MenuController::class, 'data_login']);
Route::get('/register', [MenuController::class, 'data_register']);
>>>>>>> data-siswa
