<?php

use App\Http\Controllers\forgotPassword;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ajouterRegions;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\intervenants;

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
//    Route::post('/forgot-password', [forgotPassword::class, 'forgotPassword'])->name('forgotPassword');
   // return view for forgot password page
//    Route::get('/forgot-password', [forgotPassword::class, 'index'])->name('ForgotPassword');
   // retrve  new passeword
//    Route::post('/reset-Password', [forgotPassword::class, 'resetPassword'])->name('resetPassword');
   // return  a view for page  that can  return view for page   change password
//    Route::get('/reset-password/{token}', [forgotPassword::class, 'resetPasswordView'])->name('resetPasswordView');

   Route::get('/login', [AuthController::class, 'index']);
   Route::post('/login', [AuthController::class, 'login'])->name('login_into_account');
   //login and  create an accoun




// CRUD intervenats
Route::get('/ajouter-intervenants' , [intervenants::class , 'index']);

// CRUD Region
Route::get('/ajouter-region' , [ajouterRegions::class , 'index'])->name('ajouter-region');
Route::post('/insertRegion' , [ajouterRegions::class , 'insert'])->name('insertRegion');
