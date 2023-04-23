<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\OrderController;

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

Route::get('/index',[SiteController::class,'index']);
Route::get('/about',[SiteController::class,'about'])->name('about');
Route::get('/service',[SiteController::class,'service'])->name('service');
Route::get('/menu',[SiteController::class,'menu'])->name('menu')->name('menu');
Route::get('/testimonial',[SiteController::class,'testimonial'])->name('testimpnial');
Route::get('/team',[SiteController::class,'team'])->name('team');
Route::get('/contact',[siteController::class,'contact'])->name('contact');



 Route::post('/store',[OrderController::class,'store'])->name('store');


