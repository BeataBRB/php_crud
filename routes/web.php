<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\AbstractClassController;
use App\Http\Controllers\ProfileController;

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
})->name('welcome');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
        })->name('dashboard');

        Route::view('profile', 'profile')->name('profile');
        Route::put('profile', [ProfileController::class, 'update'])
            ->name('profile.update');

    Route::resource('products', ProductController::class);
    Route::resource('cars', CarsController::class);
    Route::resource('houses', HouseController::class);

});

require __DIR__.'/auth.php';
