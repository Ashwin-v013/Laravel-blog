<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PlansController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PostController;

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


Route::get('/admin', 'AdminController@index');
Route::get('/superadmin', 'SuperAdminController@index');
Auth::routes();
Route::get('send-mail' , 'mailsend@mailsend');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/verify' ,'Auth\RegisterController@verifyUser')->name('verify.user');

Route::get('/plans' , [PlansController::class , 'index']);
Route::get('/payment-initiate' , function()
{
    return view('payment-initiate');
});

Route::post('/payment-initiate-request' , [PaymentController::class , 'initiate']);
Route::post('/payment-complete' , [PaymentController::class , 'complete']);
Route::get('/blogs' , function()
{
    return view('blogs');
});

Route::get('/post', [PostController::class , 'post']);
Route::Post('/addpost', [PostController::class , 'addPost']);

Route::get('/view/{id}',[PostController::class , 'view']);
Route::get('/edit/{id}', [PostController::class, 'edit']);
Route::get('/delete/{id}', [PostController::class, 'delete']);

Route::post('/editpost/{id}' , [PostController::class , 'editpost']);
Route::get('/delete/{id}' , [PostController::class , 'deletePost']);

Route::get('/like/{id}' , [PostController::class , 'like']);
Route::get('/dislike/{id}' , [PostController::class , 'Dislike']);
Route::post('/comment/{id}' , [PostController::class , 'comment']);