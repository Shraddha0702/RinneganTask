<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\school_controller;

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

route::view('/dummy','dummy');
route::view('/add_post','add_post');
route::post('/add',[school_controller::class,'add']);
route::get('/display',[school_controller::class,'display'])->name('display');
route::get('/detail/{id}',[school_controller::class,'detail']);
