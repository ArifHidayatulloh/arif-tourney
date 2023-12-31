<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TournamentController;
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

Route::resource('/', IndexController::class);
Route::resource('/index', IndexController::class);
Route::resource('/admin', AdminController::class);
Route::resource('/game', GameController::class);
Route::resource('/tournament',TournamentController::class);

Route::get('/rehan', function(){
    return view ('rehan');
});
Route::get('/gita', function(){
    return view ('gita');
});