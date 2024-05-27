<?php

use App\Http\Controllers\TruckController;
use App\Http\Controllers\TruckerController;
use App\Models\Trucker;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('truckers/listar',[TruckerController::class,'index'])->name('trucker.index');
Route::get('truckers/create',[TruckerController::class,'create']);
Route::post('truckers/store',[TruckerController::class,'store'])->name('truckers.store');
Route::get('truckers/{trucker}',[TruckerController::class,'show'])->name('trucker.show');
Route::put('trucker/{trucker}',[TruckerController::class,'update'])->name('trucker.update');
Route::delete('trucker/{trucker}',[TruckerController::class,'destroy'])->name('trucker.destroy');
Route::get('truckers/{trucker}/editar',[TruckerController::class,'edit'])->name('trucker.edit');