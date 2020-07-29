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
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', function () {
    return view('home1');
})->name('home1');

Route::get('index', function () {
    return view('index');
})->name('index');

Route::get('introduction', function () {
    return view('introduction');
})->name('introduction');

Route::get('generic', function () {
    return view('generic');
})->name('generic');

Route::get('member_login_php', function () {
    return view('member_login_php');
})->name('member_login_php');

Route::get('backstage', function () {
    return view('backstage');
})->name('backstage');

Route::get('backstage_login_php', function () {
    return view('backstage_login_php');
})->name('backstage_login_php');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
