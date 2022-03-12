<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClothController;
use App\Http\Controllers\ContactController;
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


// Route::get('/contact-us', function () {
//     return view('ui.contactus');
// });

Auth::routes();


Route::resource('/cloth',ClothController::class);
Route::resource('/contact',ContactController::class);




Route::group(['middleware'=>['auth','admin']],function(){
    Route::resource('/admin',AdminController::class);
    Route::resource('/category',CategoryController::class);
    Route::resource('/user',UserController::class);
});


Route::group(['middleware'=>['auth']],function(){
    Route::get('/profile',[ClothController::class,'showprofile'])->name('profile.showprofile');
});



Route::get('/showClothes', [ClothController::class, 'uishowclothes'])->name('showClothes.uishowclothes');
Route::post('/storeDonate',[ClothController::class,'uistoreDonate'])->name('storeDonate.uistoreDonate');

Route::get('/Donate', [ClothController::class, 'uishowDonate'])->name('Donate.uishowDonate');
Route::put('/addClothe/{cloth}',[ClothController::class,'AddClotheToCart'])->name('addClothe.AddClotheToCart');




 

  





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
