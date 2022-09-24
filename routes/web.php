<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('kelas', function () {
    return view('kelas');
});

Route::get('/kelas', [KelasController::class, 'create'])->middleware('guest');
Route::post('/kelas', [KelasController::class, 'store']);