<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('Welcome');
});

Route::get('/hello', function(){
    return "Hello Nama Saya FARHAN";
});

Route::get('/artikel/{judul}', function($nama){
    return "Menampilkan judul artikel $nama";
});

Route::get('/katagori/{katagori}/{judul}', function($katagori,$judul){
    return "katagori : $katagori, Title : $judul";
});