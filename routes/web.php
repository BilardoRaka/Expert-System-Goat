<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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
    return view('index',[
        'active' => 'home'
    ]);
})->name('index');

Route::post('/prediagnosa', [MainController::class, 'prediagnosa'])->middleware('guest');
Route::post('/prediagnosa/{id}', [MainController::class, 'prediagnosa'])->middleware('guest');
Route::post('/postdiagnosa/{id}', [MainController::class, 'postdiagnosa'])->middleware('guest');
Route::post('/nulldiagnosa', [MainController::class, 'postdiagnosanull'])->middleware('guest');

Route::get('/feedback', [MainController::class, 'feedbacklist'])->middleware('auth');
Route::delete('/feedback/{id}/delete', [MainController::class, 'deletefeedback'])->middleware('auth');
Route::post('/feedback', [MainController::class, 'feedback'])->middleware('guest');

Route::get('/history', [MainController::class, 'riwayat'])->middleware('auth');
Route::get('/printHistory', [MainController::class, 'printhistory'])->middleware('auth');
Route::delete('/history/{id}/delete',[MainController::class,'deletehistory'])->middleware('auth');

Route::get('/passchange', [MainController::class, 'passchangeget'])->middleware('auth');
Route::post('/passchange', [MainController::class, 'passchangepost'])->middleware('auth');

Route::get('/disease', [MainController::class, 'penyakit'])->middleware('auth');
Route::get('/disease/{id}/edit',[MainController::class,'editdisease'])->middleware('auth');
Route::post('/disease/{id}/update',[MainController::class,'updatedisease'])->middleware('auth');

Route::post('/login', [MainController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [MainController::class, 'logout'])->middleware('auth');

Route::get('/prediagnosa', function () {
    return back();
});

Route::get('/prediagnosa/{id}', function () {
    return back();
});

Route::get('/postdiagnosa/{id}', function () {
    return back();
});

Route::get('/postdiagnosa/null', function () {
    return back();
});