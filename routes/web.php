<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\AdminController;

//register & login
Route::get('/', function () {
    return redirect()->route('sell#login');
});
Route::get('loginPage',[AuthController::class,'login'])->name('sell#login');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    //dashboard
    Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');

    //admin route middle ware
    Route::middleware(['admin_auth'])->group(function(){
        Route::group(['prefix'=>'admin'],function(){
            // admin home page
            Route::get('home',[AdminController::class,'adminHome'])->name('admin#home');

            // user create page
            Route::get('createPage',[AdminController::class,'createPage'])->name('admin#createPage');

            //user create
            Route::post('create',[AdminController::class,'create'])->name('admin#create');

            //delete user
            Route::get('delete/{id}',[AdminController::class,'delete'])->name('admin#delete');
        });
    });

    //user route middleware
    Route::group(['prefix'=>'user','middleware' => 'user_auth'],function(){
        //home
        Route::get('home',[SellController::class,'home'])->name('sell#home');
        //create
        Route::post('create',[SellController::class,'create'])->name('sell#create');
        //delete
        Route::get('delete/{id}',[SellController::class,'delete'])->name('sell#delete');
        //edit
        Route::get('edit/{id}',[SellController::class,'editPage'])->name('sell#editPage');
        //update
        Route::post('update',[SellController::class,'update'])->name('sell#update');
    });



});
