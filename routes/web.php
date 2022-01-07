<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LoginController;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\ProductControllerl;
//use App\Http\Controllers\PostController;


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
//Route::get('/', [\App\Http\Controllers\ServiceController::class, 'welcome']);


/*
|--------------------------------------------------------------------------
| Public
|--------------------------------------------------------------------------
*/
//Route::view('/', 'pages.welcome');
Route::view('/about', 'pages.about');
Route::view('/portfolio', 'pages.portfolio');
Route::view('/contact', 'pages.contact');
Route::view('/blog', 'pages.blog'); //todo
Route::get('/', [\App\Http\Controllers\ServiceController::class,'welcome']);
Route::post('/contacts' , [\App\Http\Controllers\MessageController::class, 'store']);

Route::resource('/afracode/products', ProductControllerl::class);
Route::resource('/afracode/posts', \App\Http\Controllers\PostController::class);




/*
|--------------------------------------------------------------------------
| Dev & Test
|--------------------------------------------------------------------------
|
|
*/
Route::post('/test/store' , [\App\Http\Controllers\Dev\TestController::class, 'store']);
Route::view('/test', 'admin.test');
Route::view('/test/blog', 'pages.blog');
Route::view('/test/contact', 'pages.contact');
Route::view('/test/about', 'pages.about');
Route::view('/test/portfolio2', 'pages.portfolio2');
Route::view('/test/portfolio', 'pages.portfolio');
Route::get('/test/password/{pass}', function ($pass) {
    return Hash::make($pass);
});


/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
|
|
*/
Route::get('login', [LoginController::class, 'login']);
Route::post('login', [LoginController::class, 'checkLogin']);
Route::get('register', [LoginController::class, 'create']);
Route::post('register', [LoginController::class, 'register']);

/*
|--------------------------------------------------------------------------
| Admin Panel
|--------------------------------------------------------------------------
|
|
*/
Route::get('/admin', [adminController::class, 'dashboard']);
Route::resource('/admin/posts', PostController::class);
Route::resource('/admin/products', ProductController::class);
Route::resource('/admin/portfolio', PortfolioController::class);
Route::resource('/admin/contacts', ContactController::class);
