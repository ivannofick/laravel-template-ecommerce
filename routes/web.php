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
    Route::get('/logout', 'logout')->name('logout');
    Route::post('/post-login', 'postLogin')->name('post-login');    
});


Route::controller(App\Http\Controllers\Admin\DashboardController::class)->group(function () {
    Route::get('/account/{name}', 'index')->name('dashboard-admin');
});

Route::controller(App\Http\Controllers\Admin\UsersController::class)->group(function () {
    Route::get('/users/{name}', 'index')->name('users-admin');
});
