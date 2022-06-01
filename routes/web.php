<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminConteroller;

Route::get("/", [HomeController::class, "index"]);
Route::get("/redirects",[HomeController::class,"redirect"]);

// handling Sidebar for Admin Pannel
Route::get("/user",[AdminConteroller::class,"user"]);
Route::get("/food",[AdminConteroller::class,"food"]);
Route::get("/chef",[AdminConteroller::class,"chef"]);
Route::get("/reservation",[AdminConteroller::class,"reservation"]);

// Delete users by Admin
Route::get("/del/{id}",[AdminConteroller::class,"deleteUser"]);
//Adding food menu by admin
Route::get("/food",[AdminConteroller::class,"food"]);
// Add Food
Route::post("/addFood",[AdminConteroller::class,"addFood"]);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
