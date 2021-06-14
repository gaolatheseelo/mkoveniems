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

Route::view('/{path?}', 'app');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::post('sendrequest', 'App\Http\Controllers\AxiosReceiverController@ReceiveIt');
Route::get('/','App\Http\Controllers\Api\EmployeesController@results');

Route::get('file-import-export', [EmployeesController::class, 'fileImportExport']);
Route::post('file-import', [EmployeesController::class, 'fileImport'])->name('file-import');
Route::get('file-export', [EmployeesController::class, 'fileExport'])->name('file-export');
