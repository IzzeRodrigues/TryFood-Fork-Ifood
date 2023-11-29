<?php

use App\Http\Controllers\pagecontroller;
use Illuminate\Support\Facades\Route;


Route::get('/', [pagecontroller::class,'home']); 

Route::get('/criarconta', [pagecontroller::class,'criar']); 

Route::get('/restaurante', [pagecontroller::class,'restaurante']); 