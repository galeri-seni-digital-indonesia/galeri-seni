<?php

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
    return view('pages/home', [
        "title" => "Home",
    ]);
});

Route::get('/galeri', function () {
    return view('pages/artDetail', [
        "title" => "Galeri",
    ]);
});

Route::get('/acara', function () {
    return view('pages/eventDetail', [
        "title" => "Event",
    ]);
});

Route::get('/seniman', function () {
    return view('pages/artistDetail', [
        "title" => "Artist",
    ]);
});

Route::get('/merch', function () {
    return view('pages/merchDetail', [
        "title" => "Merchandise",
    ]);
});
