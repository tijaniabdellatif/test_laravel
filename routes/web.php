<?php

use App\Http\Controllers\ExamController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
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



/* Creation des routes groupé */
/*
www.test.ma/account
 */
Route::group(['prefix' => 'account'], function () {

    Route::get('/register', [ExamController::class, 'register']);
    Route::get('/login', [ExamController::class, 'login']);

});


Route::get('/product', [ProductController::class, 'index'])->name('product.show');
Route::get('/productlist',[ProductController::class,'list'])->name('product.list');


Route::group(['prefix' => 'quiz'],function(){


     Route::get('/create',[TestController::class,'create'])->name('quiz.create');
     Route::post('/store',[TestController::class,'store'])->name('quiz.store');
});