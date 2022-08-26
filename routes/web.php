<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return View('/home');
});

Route::get('/create', function() {
    return View('/create');
});

Route::get('/register', function() {
    return View('/register');
});

Route::get('/login', function() {
    return view('/login');
});

Route::get('skills', function () {
    return ['Laravel', 'Vue', 'PHP', 'Javascript'];
});


