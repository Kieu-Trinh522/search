<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\LoginController;
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


Route::middleware('auth')->prefix('cities')->group(function (){
    Route::get('/',[CityController::class,'index'])->name('cities.index');
    Route::get('/edit/{id}',[CityController::class,'edit'])->name('cities.edit');
    Route::post('/edit/{id}',[CityController::class,'update'])->name('cities.update');
    Route::get('/add',[CityController::class,'create'])->name('cities.create');
    Route::post('/add',[CityController::class,'store'])->name('cities.store');
    Route::get('/delete/{id}',[CityController::class,'destroy'])->name('cities.destroy');
    Route::get('/search',[CityController::class,'search'])->name('cities.search');
    Route::post('/search',[CityController::class,'getCitySearch'])->name('cities.getCitySearch');

});
Route::prefix('login')->group(function (){
    Route::get('/',[LoginController::class,'index'])->name('login');
    Route::post('/login',[LoginController::class,'login'])->name('login.login');
});
Route::get('logout',[\App\Http\Controllers\LogoutController::class,'logout'])->name('logout.logout');

Route::get('test',function (){
    return view('back-end.dashboard');
});

Route::get('register',[\App\Http\Controllers\RegisterController::class,'index'])->name('register.index');
Route::post('register',[\App\Http\Controllers\RegisterController::class,'store'])->name('register.store');
