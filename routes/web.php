<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        "name" => "Nanda Arya"
    ]);
});

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Nanda Arya",
    ]);
});


Route::get('/posts', function () {
    return view('posts', [
        "title" => "Posts",
    ]);
});

Route::get('/data', function () {
    return view('data', [
        "title" => "Data",
        "name" => "Nanda Arya",
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "Login",
        "name" => "Nanda Arya",
    ]);
});


Route::get('/register', function () {
    return view('register', [
        "title" => "Register",
    ]);
});

