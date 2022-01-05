<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LoginController;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Hash;
use \App\Http\Controllers\PostController;


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
//Route::get('/', [\App\Http\Controllers\SeviceController::class, 'welcome']);


/*
|--------------------------------------------------------------------------
| Public
|--------------------------------------------------------------------------
|
|
*/

Route::view('/','pages.welcome');



/*
|--------------------------------------------------------------------------
| Dev
|--------------------------------------------------------------------------
|
|
*/
Route::view('/test','admin.test');
Route::view('/test/blog','pages.blog');
Route::view('/test/contact','pages.contact');
Route::view('/test/about','pages.about');
Route::view('/test/portfolio2','pages.portfolio2');
Route::view('/test/portfolio','pages.portfolio');
Route::get('/test/password/{pass}',function ($pass){
    return Hash::make($pass);
});


/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
|
|
*/
Route::get('/admin/login', [LoginController::class,'login']);
Route::post('/admin/login', [LoginController::class,'checkLogin']);
Route::get('/admin/register', [LoginController::class,'create']);
Route::post('/admin/register', [LoginController::class,'register']);

/*
|--------------------------------------------------------------------------
| Admin Panel
|--------------------------------------------------------------------------
|
|
*/
Route::get('/admin', [adminController::class,'dashboard']);
Route::resource('/admin/posts',PostController::class);
