<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Dev
|--------------------------------------------------------------------------
|
|
*/


Route::view('/test/welcome','pages.welcome');
Route::view('/test/blog','pages.blog');
Route::view('/test/contact','pages.contact');
Route::view('/test/about','pages.about');
Route::view('/test/portfolio2','pages.portfolio2');
Route::view('/test/portfolio','pages.portfolio');


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
| login
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login', [LoginController::class,'login']);
Route::post('/admin/checkLogin', [LoginController::class,'checkLogin']);
