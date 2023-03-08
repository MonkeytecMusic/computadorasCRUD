<?php

use App\Http\Controllers\Computadoras;
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

Route::get('/', [Computadoras::class, 'index']);
Route::get('/anadir', [Computadoras::class, 'create']);
Route::post('/store', [Computadoras::class, 'store']);
Route::get('/show/{id}',[Computadoras::class, 'show'])->name('show');
Route::delete('/destroy/{id}',[Computadoras::class, 'destroy'])->name('destroy');
Route::get('/actualizar/{id}',[Computadoras::class, 'edit'])->name('edit');
Route::put('/update/{id}',[Computadoras::class, 'update'])->name('update');
