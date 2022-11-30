<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
〇基本的な構文
Route::[httpメソッド]([第一引数：URL],[第二引数：処理])
〇SampleControllerのgetJsonメソッドを呼び出しています。
use App\Http\Controllers\SampleController;
Route::post('sample', [SampleController::class, 'getJson']);


*/

Route::resource('products', ProductController::class);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello');
});