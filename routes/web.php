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

//ランダムなメッセージを表示する
Route::get(
    '/comments/random/',
    [App\http\Controllers\GreetingController::class, 'random']
);

//単純なあいさつ
Route::get(
    '/comments/{id}/',
    [App\http\Controllers\GreetingController::class, 'greeting']
);

//URLによってメッセージが変わる
Route::get(
    '/comments/freeword/{id}/',
    [App\http\Controllers\GreetingController::class, 'message']
);
