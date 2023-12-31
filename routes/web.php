<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::get('/test_qr', 'qrController@index')->name('test_qr.naim');
//Route::get('/test_qr', 'qrController@index')->name('qr_wan.rizzuan');
//Route::get('/test_qr', 'qrController@index')->name('test_qr.clement');
//Route::get('/scanner', [App\Http\Controllers\codeController::class, 'index'])->name('scanner');
Auth::routes();

//Route::resource('/new_qr', 'App\Http\Controllers\codeController');
Route::get('/new_qr/index', [App\Http\Controllers\codeController::class, 'index']);
Route::post('new_qr-store', [App\Http\Controllers\codeController::class, 'store']);
Route::get('new_qr-reroute', [App\Http\Controllers\codeController::class, 'reroute']);

Route::resource('/player', 'App\Http\Controllers\registerController');
Route::post('player-store', [App\Http\Controllers\registerController::class, 'store']);

Route::resource('/one', 'App\Http\Controllers\oneController');
//Route::get('one-index', [App\Http\Controllers\oneController::class, 'index']);
Route::post('one-store', [App\Http\Controllers\oneController::class, 'store']);

Route::resource('/two', 'App\Http\Controllers\twoController');
Route::post('two-store', [App\Http\Controllers\twoController::class, 'store']);

Route::resource('/three', 'App\Http\Controllers\threeController');
Route::post('three-store', [App\Http\Controllers\threeController::class, 'store']);

//Route::resource('/score', 'App\Http\Controllers\scoreController');
Route::get('/score/index', [App\Http\Controllers\scoreController::class, 'index']);
Route::get('/score/lead', [App\Http\Controllers\leadController::class, 'lead']);
