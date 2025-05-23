<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;
use App\Http\Middleware\ValidUser;
use App\Jobs\EmailJob;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('register', function () { return view('register'); })->name('register');
Route::post('regiserSave', [UserController::class,'register'])->name('registerSave');
Route::get('login', function () { return view('login'); })->name('login');
Route::post('logincheck',[UserController::class,'login'])->name('loginCheck');

Route::get('dashboard',[UserController::class,'dashboard'])->name('dashboard')->middleware(ValidUser::class);

Route::get('logout',[UserController::class,'logout'])->name('logout');

Route::get('sendemail',[MailController::class,'sendemail']);
Route::get('posts',[UserController::class,'userposts'])->name('posts');
Route::get('send-email', function(){
    $data['email'] = 'anand.pandey@ktekresourcing.com';
    dispatch(new EmailJob($data));
    dd('Email Sent Successfully');
});
