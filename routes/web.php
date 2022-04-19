<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::post('/token',['uses' => 'TokenController@newToken', 'as' => 'new-token']);
Route::view('/dashboard', 'supportDashboard')->name('dashboard');
Route::post('/support/call',['uses' => 'CallController@newCall', 'as' => 'new-call']);
