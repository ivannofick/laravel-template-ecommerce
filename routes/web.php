<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('dashboard.homepage');
// });

Route::controller(App\Http\Controllers\ProductsController::class)->group(function () {
    Route::get('/', 'index')->name('homepage');
    
});
Route::controller(App\Http\Controllers\SettingController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/post-login', 'postLogin')->name('post-login');    
});