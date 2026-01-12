<?php

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


Route::get('/biodata', function () {
    return 'Nama: Fairuz, Umur saya: 16, kelas: XI RPL';
});
Route::get('/detail/{nama}/{kelas?}',[App\Http\Controllers\StudentController::class,'detail'] );


Route::get('/student',[App\Http\Controllers\StudentController::class,'student'] );
Route::get('/student/{nama}',[App\Http\Controllers\StudentController::class,'Name'] );