<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

Route::get('samplepage', function () {
    return view('sample');
});
Route::get('/', [Authcontroller::class,'index'])->name('login');
Route::post('/login', [Authcontroller::class,'AuthUser']);
Route::get('/logout', [Authcontroller::class,'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {


    Route::group(['prefix'=> 'Student'],function(){

        Route::get('/',[StudentController::class,'index'])->name('studentMaster');
        Route::post('create',[StudentController::class,'createStudent'])->name('createStudent');
        Route::put('update/{id}',[StudentController::class,'UpdateStudent'])->name('updateStudent');
        Route::delete('delete',[StudentController::class,'deleteStudent'])->name('deleteStudent');
        Route::get('list',[StudentController::class,'AllRecords'])->name('allRecords');
        Route::get('getStudentdetails/{id}',[StudentController::class,'getStudentRecord']);
    });
    Route::group(['prefix' => 'Teacher'] , function(){

        Route::get('/',[TeacherController::class,'index'])->name('teacherMaster');
        Route::post('create',[TeacherController::class,'store'])->name('addTeachers');
        Route::put('update/{id}',[TeacherController::class,'update'])->name('updateTeachers');
        Route::delete('delete/{id}',[TeacherController::class,'destroy'])->name('removeTeachers');
        Route::get('list',[TeacherController::class,'show'])->name('allTeachersRecords');
    });
});
