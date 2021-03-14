<?php

use Illuminate\Support\Facades\Route;


Route::get('/hello', function(){
    return 'aws';
});
Route::group(['middleware' => ['auth']], function(){
    Route::get('dashboard', Dashboard::class)->name('dashboard');
});
