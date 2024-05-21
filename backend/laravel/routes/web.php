<?php

use App\Http\Controllers\forgotPassword;
use Illuminate\Support\Facades\Route;
use App\Models\User;
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

   // retreve password  && forgot password Routes
   Route::post('/forgot-password', [forgotPassword::class, 'forgotPassword'])->name('forgotPassword');
   // return view for forgot password page
   Route::get('/forgot-password', [forgotPassword::class, 'index'])->name('ForgotPassword');
   // retrve  new passeword
   Route::post('/reset-Password', [forgotPassword::class, 'resetPassword'])->name('resetPassword');
   // return  a view for page  that can  return view for page   change password
   Route::get('/reset-password/{token}', [forgotPassword::class, 'resetPasswordView'])->name('resetPasswordView');
   //login and  create an account

