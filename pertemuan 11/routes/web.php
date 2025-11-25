<?php

use Illuminate\Support\Facades\Route;

Route::get('/halo', function () {
 return 'Halo Laravel!';
});

Route::resource('/', App\Http\controllers\IndexController::class);