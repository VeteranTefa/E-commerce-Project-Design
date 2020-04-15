<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', "cont@login");
Route::get('/Register', "cont@Regester");
Route::get('/home', "cont@main");
Route::get('/admin', "cont@admin");
Route::get('/cat/{n}', "cont@cat");
Route::get('/history', "cont@history");
Route::get('/editcat', "cont@editcat");
Route::get('/editpro', "cont@editpro");
