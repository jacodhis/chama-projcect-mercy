<?php

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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth','isAdmin'])->group(function (){
    Route::get('/admindashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

     Route::get('/members', [App\Http\Controllers\MebersController::class, 'index']);
     Route::get('/members/moreinformation/{memberId}', [App\Http\Controllers\MebersController::class, 'moreinformation']);
     Route::get('/members/{memeberId}', [App\Http\Controllers\MebersController::class, 'destroy']);
     Route::get('/chama/deposits/{userId}', [App\Http\Controllers\AccountsController::class, 'userdeposits']);


     Route::get('/loans', [App\Http\Controllers\LoansController::class, 'index']);
});

Route::get('/chama/borrow-loan/{userId}', [App\Http\Controllers\AccountsController::class, 'borrow']);
Route::get('/chama/make-deposit', [App\Http\Controllers\AccountsController::class, 'deposit']);

Route::get('/members', [App\Http\Controllers\MebersController::class, 'index']);
