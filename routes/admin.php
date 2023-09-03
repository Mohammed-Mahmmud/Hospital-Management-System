<?php

use App\Http\Controllers\Dashboard\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;


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
Route::prefix('admin')->middleware('auth:admin')->group(function(){
    Route::resource('/',HomeController::class)->names("admin_panel");
});

Route::get('/admin/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::get('/admin/auth/dashboard', function () {
    return "welcome";
})->middleware(['auth:admin', 'verified'])->name('auth.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';