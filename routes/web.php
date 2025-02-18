<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::view('/', 'home'); // shorthand of about route (used for static pages where only view is returned)
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);
