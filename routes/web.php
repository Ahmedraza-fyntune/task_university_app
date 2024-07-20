<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('samplepage', function () {
    return view('sample');
});
Route::get('/', [Authcontroller::class,'index']);
Route::post('/login', [Authcontroller::class,'AuthUser']);


Route::middleware(['auth'])->group(function () {
    
});
Route::get('StudentRegistration',[StudentController::class,'index']);
