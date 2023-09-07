<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AdminController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;




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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
  
Route::get('/dashboard/admin',[AdminController::class,"index"])
            ->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

Route::get('/dashboard/patient', function () {
    return view('dashboard.user.home');
})->middleware(['auth', 'verified'])->name('user.dashboard');

    Route::get("/admin",function(){
    //     (auth('admin')->check()
        
         if(auth('admin')->check()){
        return  redirect(RouteServiceProvider::ADMIN);
         }
         else{
            return  redirect(RouteServiceProvider::HOME);
     }
     

        
    })->name("panel");
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

});