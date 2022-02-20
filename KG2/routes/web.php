<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/mahasiswa', function () {
    Route::get('/mahasiswa','MahasiswaController@index');
    Route::get('/mahasiswa/create','MahasiswaController@create');
    Route::post('/mahasiswa/store','MahasiswaController@store');
    Route::get('/mahasiswa/edit/{id}','MahasiswaController@edit');
    Route::post('/mahasiswa/update','MahasiswaController@update');
    Route::get('/mahasiswa/destroy/{id}','MahasiswaController@destroy');
    return view('welcome');
});
