<?php

use Illuminate\Support\Facades\Route;

Route::get('/user/{id?}/{name?}', function($id = null, $name = null) {
    return 'User ' . $id . ' - ' . $name;
});

Route::get('/', function() {
    return view('welcome');
});


