<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MerchController;

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

Route::get('/galeri/{id}', [ArtController::class, 'show']);
Route::get('/acara/{id}', [EventController::class, 'show']);
Route::get('/seniman/{id}', [ArtistController::class, 'show']);
Route::get('/merch/{id}', [MerchController::class, 'show']);