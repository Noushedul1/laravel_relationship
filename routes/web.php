<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ViewController;
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
Route::get('/manage-students',[StudentController::class,'manage'])->name('manage-students');
Route::get('/add_customer',[CustomerController::class,'add_customer'])->name('add_customer');
Route::get('/show_mobile',[CustomerController::class,'showmobile'])->name('show_mobile');
Route::get('/show_customer',[MobileController::class,'showcustomer'])->name('show_customer');
Route::get('/index_View/{id}',[ViewController::class, 'indexView'])->name('index_View');
Route::get('/show_View/{id}',[ViewController::class, 'showView'])->name('show_View');
Route::get('/inline_render',[ViewController::class, 'inlinebladeRender'])->name('inlinebladeRender');