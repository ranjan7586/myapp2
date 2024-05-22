<?php

use App\Http\Controllers\TestController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',function(){
    return view('hello');
})->name('ranjan');


Route::get('/about',function(){
    return view('about');
})->name('about-me');


Route::get('/test',[TestController::class,'testMethod1']);