<?php

use Illuminate\Support\Facades\Route;

Route::get('token/{token}', function($token) {
    return $token;
})->whereNumber('token');

Route::get('/user/{id?}/{name?}', function($id = null, $name = null) {
    return 'User ' . $id . ' - ' . $name;
})->where([
    'id' => '[0-9]+',
    'name' => '[A-Za-z]+'
]);

Route::get('/', function() {
    return view('welcome');
});


