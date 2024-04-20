<?php

use App\Http\Controllers\RouteController;
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
    return view('welcome');
});

Route::get("/", [RouteController::class, "index"]);

Route::get("/programme", [RouteController::class, "programme"]);
Route::get("/live", [RouteController::class, "live"]);
Route::get("/rediffusion", [RouteController::class, "rediffusion"]);
Route::get("/photos", [RouteController::class, "photos"]);
