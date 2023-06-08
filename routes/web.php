<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;

Route::get('/', function () {
    return redirect('/blogs');
});

Route::resource("/blogs", BlogsController::class);
