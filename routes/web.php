<?php

use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], 'users', function() {
    return 'Hello world';
});

