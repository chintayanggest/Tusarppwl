<?php

use Illuminate\Support\Facades\Route;

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/', function () {
    return view('layouts.layout',[
    ]);
});    

Route::get('/team', function () {
    return view('layouts.team',[
    ]);
});