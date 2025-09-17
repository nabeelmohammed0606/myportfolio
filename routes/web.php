<?php

use Illuminate\Support\Facades\Route;

//testing purposes:
use App\Models\Task;
use App\Models\User;

// Route::get('/title', function () {
//     return view('test', ['titles' => User::all()]);
// });
//////////////////////////////////////////////////////

// TEST
Route::get('/test', function () {
    return view('test');
});
// HOME
Route::get('/', function () {
    return view('index');   
})->name('home');
// ABOUT
Route::get('/about', function () {
    return view('about');  
})->name('about');
// RESUME
Route::get('/resume', function () {
    return view('resume'); 
})->name('resume');
// SERVICES
Route::get('/services', function () {
    return view('services');
})->name('services');
// PORTFOLIO
Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');
// CONTACT
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
