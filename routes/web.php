<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;

Route::get("/", [HomeController::class, "index"]);
Route::get("/redirects",[HomeController::class,"redirect"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
