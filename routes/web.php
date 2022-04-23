<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrajetController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;




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
    return view('home');
});
Route::resource('/trajet', TrajetController::class)->middleware("auth:conducteur");

Auth::routes();         

  
   Route::get('/login/conducteur',[LoginController::class,"showConducteurLoginForm"] )->name('login.conducteur');


    Route::get('/login/client',[LoginController::class,"showClientLoginForm"] );
    
    Route::get('/registre/conducteur',[RegisterController::class,"showConducteurRegisterForm"] );
    Route::get('/registre/client',[RegisterController::class,"showClientRegisterForm"] );

    //Route::post('/login/conducteur', 'LoginController@conducteurLogin');
    Route::post('/login/conducteur',[LoginController::class,"conducteurLogin"] );
    Route::post('/login/client',[LoginController::class,"clientLogin"] );
   
   // Route::post('/register/conducteur', 'RegisterController@createConducteur');
   // Route::post('/register/client', 'RegisterController@createClient');
   Route::post('/registre/conducteur',[RegisterController::class,"createConducteur"] );
   Route::post('/registre/client',[RegisterController::class,"createClient"] );

    Route::view('/home', 'home')->middleware('auth');
    Route::view('/conducteur', 'conducteur');
    Route::view('/client', 'client');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::resource('/trajet', [TrajetController::class, 'trajets']);