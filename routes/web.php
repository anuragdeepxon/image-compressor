<?php

use App\Http\Controllers\API\CompressorAPIController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::controller(HomeController::class)->group(function () {
    Route::get('/check', 'index');
});


Route::post('/compressor/image', [CompressorAPIController::class, 'image_compressor']);

Route::get('/about-site', function () {
    return view('about');
});

Route::get('/privacy-policy', function () {
    return view('privacy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
