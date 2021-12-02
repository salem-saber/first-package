<?php

use Illuminate\Support\Facades\Route;

Route::get('package/test', function () {
    return view('salem-saber::index');
});
