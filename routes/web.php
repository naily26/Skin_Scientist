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
    return redirect('homepage');
});

Auth::routes();

Route::get('/homepage', [App\Http\Controllers\WelcomeController::class, 'index']);
Route::get('/service', [App\Http\Controllers\WelcomeController::class, 'service']);
Route::get('/service_summary', [App\Http\Controllers\WelcomeController::class, 'summaryAnswer']);
Route::get('/service_result', [App\Http\Controllers\WelcomeController::class, 'prosestKonsultasi']);
Route::get('/service_get_bobot/{bobot}/{id_gejala}', [App\Http\Controllers\WelcomeController::class, 'getTempAnswer']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
