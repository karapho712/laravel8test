<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;

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

Route::get('/list', [ListController::class, 'index']);
Route::get('/list-create', [ListController::class, 'create']);
Route::post('/list-store', [ListController::class, 'store']);
Route::get('/list-edit/{id}', [ListController::class, 'edit']);
Route::put('/list-update/{id}', [ListController::class, 'update']);
Route::delete('/list-delete/{id}', [ListController::class, 'destroy']);
