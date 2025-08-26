<?php

use Illuminate\Support\Facades\Route;

Route::middleware('policia-federal')->group(function () {
    Route::get('', function () {
        return 'Hello world';
    })->name('users');

    Route::get('{id}', function ($id) {
        return 'Hello world' . $id;
    })->name('user');
});
