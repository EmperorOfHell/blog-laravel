<?php
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'web'], function (){
    Route::resource('blogs', \Kostyd\Blogs\Http\Controllers\BlogController::class);
});
