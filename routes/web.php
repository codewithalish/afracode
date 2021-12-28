<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dev
|--------------------------------------------------------------------------
|
|
*/





Route::view('/test/blade','pages.test');
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

Route::get('/', [\App\Http\Controllers\PageController::class, 'welcome']);
