<?php

use App\Http\Controllers\NoteController;
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

Route::get('/',"NoteController@index")
->name('create');


Route::get('/note', "NoteController@index");
Route::get('/create', 'NoteController@create')->name('create');
Route::get('/show/{note}', 'NoteController@show')->name('show');
Route::Post('/store', 'NoteController@store')->name('store');
Route::put('/update/{note}', 'NoteController@update')->name('update');