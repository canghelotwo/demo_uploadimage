<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
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
//Route::get('/', 'HomeController@index')->name('index');

Route::get('home', [ UploadController::class, 'index' ]);
Route::get('upload', [ UploadController::class, 'upload' ]);
Route::post('save', [ UploadController::class, 'save' ])->name('save');

// Route::get('home', 'UploadController@index');

// Route::get('upload', 'UploadController@upload')->name('upload');

// Route::post('save', 'UploadController@save')->name('save');
