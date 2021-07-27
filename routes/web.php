<?php

use App\Http\Controllers\ApartmentController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('apartments')->group(function (){
    Route::get('/create',[ApartmentController::class,'create'])->name('createAP');
    Route::post('/create',[ApartmentController::class,'store'])->name('storeAP');
    Route::get('',[ApartmentController::class,'index'])->name('listAP');
    Route::get('/edit/{id}',[ApartmentController::class,'edit'])->name('editAP');
    Route::post('/edit/{id}',[ApartmentController::class,'update'])->name('updateAP');
    Route::get('/delete/{id}',[ApartmentController::class,'destroy'])->name('deleteAP');
});
