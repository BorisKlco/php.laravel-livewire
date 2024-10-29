<?php

use App\Livewire\Hello;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/t', Hello::class);
