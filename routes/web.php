<?php

use \Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::view('/', 'home');

Route::resource('jobs', JobController::class);

Route::view('/contact', 'contact');