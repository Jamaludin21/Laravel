<?php

use Illuminate\Support\Facades\Route;



Route::get('/mahasiswa', function () {
    Route::get('/mahasiswa','MahasiswaController@index');
    return view('welcome');
});
