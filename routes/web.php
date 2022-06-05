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

// Delete users by Admin
Route::get("/del/{id}",[AdminConteroller::class,"deleteUser"]);
//Adding food menu by admin
Route::get("/food",[AdminConteroller::class,"food"]);
// Add Food
Route::post("/addFood",[AdminConteroller::class,"addFood"]);
//view foods
Route::get("/viewFood",[AdminConteroller::class,"viewFood"]);
//delete food
Route::get("/delFood/{id}",[AdminConteroller::class,"deleteFood"]);
//Update(Edit) food menu
Route::get("/updateFood/{updateId}",[AdminConteroller::class,"updateFood"]);
//Update food menu
Route::post("/update/{id}",[AdminConteroller::class,"update"]);

//make a reservation
Route::post("/reservation",[AdminConteroller::class,"reserveTable"]);
//reservation
Route::get("/reservation",[AdminConteroller::class,"reservation"]);
//Deleting reservation data
Route::get("/delReserve/{delReserve}",[AdminConteroller::class,"deleteReservation"]);


//Add chef
Route::get("/addChef",[AdminConteroller::class,"addChef"]);
//Upload Chef
Route::post("/uploadChef",[AdminConteroller::class,"uploadchef"]);
//chef in home page
Route::get("/chefDisplay",[HomeController::class,"chefDisplay"]);
//chef data delete 
Route::get("/deleteChef/{delChef}",[AdminConteroller::class,"chefDelete"]);
//chef data edit
Route::get("/updateChef/{upChef}",[AdminConteroller::class,"updateChef"]);
//chef data update
Route::post("/upChef/{id}",[AdminConteroller::class,"chefUpdate"]);

//add cart
Route::post("/addCart/{id}",[HomeController::class,"addCart"]);
//show Card
Route::get("/showCart/{id}",[HomeController::class,"showCart"]);
//remove cart
Route::get("/removeCart/{id}",[HomeController::class,"removeCart"]);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
