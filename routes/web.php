<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\EventsController;


Route::get('/', [MainController::class, 'home']) -> name('home');

Route::get('/archiv', [MainController::class, 'archiv']) -> name('archiv');

Route::get('/myhome', [MainController::class, 'myhome']) -> name('myhome');

Route::post('/myhome', [MainController::class, 'myhome_check'])->name('myhome.check');
