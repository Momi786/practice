<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//web Routes
Route::get('/',[HomeController::class,'index']);

// Admin Panel Routes

Route::get('/admin',[AdminController::class,'admin']);

Route::group(['prefix'=>'admin'], function(){
    // experience Routes
    Route::get('/experience-list',[ExperienceController::class,'experienceList']);
    Route::get('/add-experience',[ExperienceController::class,'addExperience']);
    Route::post('/add-experience',[ExperienceController::class,'addProcess']);
    Route::get('/edit-experience/{id}',[ExperienceController::class,'edit']);
    Route::post('/edit-experience/{id}',[ExperienceController::class,'editProcess']);
    Route::get('/delete-experience/{id}',[ExperienceController::class,'delete']);

    // Blog Routes
    Route::get('/blog-list',[BlogController::class,'blogList']);
    Route::get('/add-blog',[BlogController::class,'addBlog']);
    // About Page Content & Home Page Content
    Route::get('/content',[AdminController::class,'contant']);
    Route::post('/content',[AdminController::class,'addprocess']);
});
