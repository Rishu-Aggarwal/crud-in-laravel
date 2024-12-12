<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('pages')->group(function(){
    Route::get('/read',function(){
        return view('read');
    })->name('read');
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
