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
    $comics_list = config("comics");
    
    return view('index', [
        "comicsList"=> $comics_list
    ]);
});

Route::get('/comic_details', function() {
    return view('comic_details');
});
