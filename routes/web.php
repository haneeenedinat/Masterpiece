<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClothController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;







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
    return view('ui.index');
});


Route::get('/contact-us', function () {
    return view('ui.contactus');
});

Route::get('/Donate',function (){
return view('ui.Donate');
});



Auth::routes();

Route::resource('/admin',AdminController::class);
Route::resource('/cloth',ClothController::class);
Route::resource('/category',CategoryController::class);
Route::resource('/user',UserController::class);

Route::resource('/Clothes',ClothController::class);

Route::get('/Clothes', [ClothController::class, 'uishowclothes'])->name('Clothes.uishowclothes');

 

  





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
