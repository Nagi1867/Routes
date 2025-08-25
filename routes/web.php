<?php

use Illuminate\Support\Facades\Route;



Route::redirect('rota-a', 'rota-b', 301);
Route::permanentRedirect('rota-a', 'rota-b');

Route::get('rota-b', function() {
    return 'Rota B';
});
