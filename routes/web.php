<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/properties/create', [PrpertyController::class. 'create']);

Route::post('/properties', [PrpertyController::class. 'store']);

Route::get('/properties', [PrpertyController::class. 'list']);

Route::get('/properties/{property_id}', [PrpertyController::class. 'show']);