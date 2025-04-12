<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;

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

Route::middleware('auth')->group(function () {});
Route::get('/', [ItemController::class, 'index']);
Route::post('/', [ItemController::class, 'index']);
Route::get('/item/create', [ItemController::class, 'create']);
Route::post('/item/upload', [ItemController::class, 'store']);
Route::get('/mypage', [UserController::class, 'mypage']);
Route::post('/item/upload', [ItemController::class, 'update'])->name('profile.update');