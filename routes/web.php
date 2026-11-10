<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    return response()->json(['message' => 'Daftar postingan berhasil diambil']);
});
