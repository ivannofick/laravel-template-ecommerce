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

// Route::get('/date', function () {
//     return date('d-m-Y', strtotime(date('Y-m-d H:i:s')));
// });

Route::controller(App\Http\Controllers\ProductsController::class)->group(function () {
    Route::get('/', 'index')->name('homepage');
    
});
Route::controller(App\Http\Controllers\SettingController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('/post-register', 'postRegister')->name('post-register');  
    Route::post('/post-login', 'postLogin')->name('post-login');  
});


Route::controller(App\Http\Controllers\Admin\DashboardController::class)->group(function () {
    Route::get('/account/{name}', 'index')->name('dashboard-admin')->middleware('checkauth');
});

Route::controller(App\Http\Controllers\Admin\UsersController::class)->group(function () {
    Route::get('/users', 'index')->name('users-admin')->middleware('checkauthAdmin');
});

Route::controller(App\Http\Controllers\Admin\ProductsController::class)->group(function () {
    Route::get('/products', 'index')->name('products-admin')->middleware('checkauthAdmin');
});
