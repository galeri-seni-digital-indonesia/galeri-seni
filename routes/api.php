<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Psr\Http\Message\ServerRequestInterface;
use Tqdev\PhpCrudApi\Api;
use Tqdev\PhpCrudApi\Config\Config;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/records', function () {
    return redirect('https://documenter.getpostman.com/view/23618843/2s9YeA9Dpq');
});

Route::any('/{any}', function (ServerRequestInterface $request) {
    $config = new Config([
        'username' => env('DB_USERNAME','root'),
        'password' => env('DB_PASSWORD', ''),
        'database' => env('DB_DATABASE','galeri_seni'),
        'basePath' => '/api/v1',
        'debug' => true,
        'tables' => 'arts,artists,events,merchs',
        'middlewares' => 'cors,textSearch',
    ]);
    $api = new Api($config);
    $response = $api->handle($request);
    return $response;
})->where('any', '.*');