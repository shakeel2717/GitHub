<?php

use Illuminate\Support\Facades\Route;

// This is routing file for web.php

Route::get('/', function () {
    return view('welcome');
});
