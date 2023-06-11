<?php

use App\Http\Controllers\narapidanaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::apiResource('narapidana', narapidanaController::class);

Route::get("narapidana/search/{name}", [narapidanaController::class, 'searchName']);
// Route::get("narapidana/search", [narapidanaController::class, 'searchAddress']);