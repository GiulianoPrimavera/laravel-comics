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

Route::get('/comics', function () {
    $comicsData = config('comics');
    
    $data = ["comics" => $comicsData];
    return view('comics.index', $data);
})->name("comics");

Route::get('/comics/dettagli', function () {
    
    return view('comics.details');

})->name("comics.details");


Route::get('/characters', function () {
    /* $comicsData = config('comics'); */
    
    /* $data = ["comics" => $comicsData]; */
    return view('characters.index');
})->name("characters");
