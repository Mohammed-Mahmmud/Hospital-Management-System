<?php

use App\Http\Controllers\Dashboard\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
    logging name => Auth::user()->name;
    logging email => Auth::user()->email;

*/
Route::prefix('admin')->middleware('auth')->group(function(){
    Route::resource('/',HomeController::class)->names("dashboard");
});