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

Route::view('signup','Signup');
Route::view('login','Login');
Route::view('invoice','User.invoice');
Route::view('dashboard','User.Home');

Route::view('Mailbox','User.Mailbox');
Route::view('Pre-alert','User.Package');
Route::view('Profile','User.Profile');
Route::view('','');
