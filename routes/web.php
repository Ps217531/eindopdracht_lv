<?php

use App\Http\Controllers\DierController;
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
Route::get('/', [DierController::class,'index'])->name('dieren.index');
//show

Route::post('/dieren', [DierController::class,'store'])->name('dieren.store');
Route::get('/dieren/create', [DierController::class,'create'])->name('dieren.create');
//edit
//update
Route::put('/dieren/{id}/edit', [DierController::class, 'update'])->Name('dieren.update');

Route::delete('/dieren/{id}',[DierController::class, 'destroy'])->Name('dieren.destroy');
//Route::get('/update', function () {
//    return view('update');
//});
Route::get('/dieren/{id}', [DierController::class, 'show']);

