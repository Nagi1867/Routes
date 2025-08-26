<?php

use Illuminate\Support\Facades\Route;

Route::domain('{user}.cursolaravelpro.test')->group(function () {
    Route::get('', function ($user) {
        return $user;
    });
});
