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
    return view('welcome');
});
Route::get('/test/{id}', function ($id) {
        echo $id;
        return view('first');
 });
 Route::get('user_home',[App\Http\Controllers\user::class,'index']);

 Route:: view('page','page');
 Route:: view('page2','page2');
 Route::view('my_form','form');

 Route::get('/getform', [App\Http\Controllers\form::class,'index'])->name('formsubmit');
 Route::post('/formabc', [App\Http\Controllers\form::class,'formStore'])->name('mukesh');

 Route:: view('web','web');