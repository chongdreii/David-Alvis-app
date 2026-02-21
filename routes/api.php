<?php

use App\Http\Middleware\userMiddleware;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
  echo "Welcome to the API route";
})->middleware(UserMiddleware::class);