<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// 
Route::get('/admin/inputbuku', function () {
    return view('admin.inputbuku');
});
// 
Route::get('/admin/kategori', function () {
    return view('admin.kategori');
});
