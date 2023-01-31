<?php

use Illuminate\Support\Facades\Route;



Route::post('/save',[\App\Http\Controllers\HomeController::class,'save']);
