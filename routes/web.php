<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::get('/', [MainController::class, 'home']) -> name('home');
ROute::get('/myhome', [MainController::class, 'myhome']) -> name('myhome');
