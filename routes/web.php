<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('pages')->group(function(){
    Route::get('/insert',function(){
        return view('insert');
    })->name('insert');
    Route::get('/update',function(){
        return view('update');
    })->name('update');
    Route::get('/user',function(){
        return view('view');
    })->name('user');
});
Route::get('/pages/read',[StudentController::class,'getStudents'])->name('read');
Route::post('/pages/add',[StudentController::class,'insertStudent'])->name('add');
