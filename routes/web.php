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

Route::get('/', function () {
    return view('welcome');
});
