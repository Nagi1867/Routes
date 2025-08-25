<?php

use Illuminate\Support\Facades\Route;

Route::prefix('user')->name('user.')->group(function () {
    Route::get('', function () {
        return 'Hello world';
    })->name('users');

    Route::get('{id}', function ($id) {
        return 'Hello world' . $id;
    })->name('user');
});
