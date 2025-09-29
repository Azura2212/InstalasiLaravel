<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
    return 'Hello, Andre';
});

Route::get('/user/{name}', function($name){
    return "nama saya $name";
});

Route::get('/greet/{name?}', function ($name = 'Guest'){
    return "Halo, $name";
});

Route::get('/profile', function(){
    return view('profile');
});

Route::get('/about', function(){
    return view('about', ['name' => 'ANDRE']);
});

Route::get('/home', function(){
    return 'halo ini adalah halaman utama';
})-> name('home.page');





Route::get('/form', [DataController::class, 'form']);
route::POST('/proses', [DataController::class, 'proses']);


