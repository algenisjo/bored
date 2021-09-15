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

Route::get('/home', function () {
    return view('home');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/recreational', function () {
    return view('recreational');
});

Route::get('/social', function () {
    return view('social');
});

Route::get('/diy', function () {
    return view('diy');
});

Route::get('/charity', function () {
    return view('charity');
});

Route::get('/cooking', function () {
    return view('cooking');
});

Route::get('/relaxation', function () {
    return view('relaxation');
});

Route::get('/music', function () {
    return view('music');
});

Route::get('/busywork', function () {
    return view('busywork');
});