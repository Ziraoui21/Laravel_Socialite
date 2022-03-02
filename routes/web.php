<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::group(["middleware" => "guest","prefix"=>"google"],function(){
    Route::get("login",[LoginController::class,"Google"])->name("login");
    Route::get("redirect",[LoginController::class,"GoogleRedirect"]);
});

Route::group(["middleware" => "auth","prefix"=>"user"],function(){
    Route::get("profile",[LoginController::class,"profile"]);
    Route::get("logout",[LoginController::class,"logout"])->name("logout");
});
