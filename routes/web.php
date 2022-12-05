<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\StartController;

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

Route::get('/user/{name}', function($name){
    return view('user',['name'=>$name]);
})-> name('user');
Route::get('/', function () {
    return view('start');
});
Route::get('/reg', function () {
    return view('registration');
});
Route::get('/log', function () {
    return view('login');
    
});
Route::get('/top', function () {
    return view('toplist');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/genres', function () {
    return view('genres');
});
Route::get('/newprod', function () {
    return view('newprod');
});
Route::post('/reg',  [RegController::class,'Reg'])->name('reg');
Route::post('/login', [LoginController::class,'authenticate'])->name('login');
