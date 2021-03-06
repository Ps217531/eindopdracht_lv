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
Route::get('/', [DierController::class,'index'])->name('dieren');
Route::post('/dieren', [DierController::class,'store'])->name('dieren');

//Route::get('/', function () {
//    return view('index');
//});
Route::get('/create', function () {
    return view('create');
});
Route::get('/update', function () {
    return view('update');
});
