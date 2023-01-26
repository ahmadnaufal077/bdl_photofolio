<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\LoginMiddleware;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/',[FotoController::class,'show']);
Route::get('/gallery',[FotoController::class,'show']);
Route::get('/gallery-single/{foto}',[FotoController::class,'showSingle']);
Route::get('/about', function () {
    return view('about');
});

// Route::get('/master', function () {
//     return view('dashboard.index');
// })->middleware([LoginMiddleware::class]);

Route::get('/master/foto/{foto}/detail',[FotoController::class,'detail'])->middleware([LoginMiddleware::class]);

Route::resource('/master/admin',AdminController::class)->middleware([LoginMiddleware::class]);
Route::resource('/master/foto',FotoController::class)->middleware([LoginMiddleware::class]);
Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/registrasi',[LoginController::class,'registrasi']);
Route::post('/registrasi',[LoginController::class,'store']);