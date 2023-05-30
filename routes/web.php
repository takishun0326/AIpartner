<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chat', 'App\Http\Controllers\ChatController@index')->name('chat.index');
Route::get('/chat/{partner_id}', 'App\Http\Controllers\ChatController@chat_with')->name('chat.chat_with');
