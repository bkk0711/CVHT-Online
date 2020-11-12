<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\CvhtController;
use App\Http\Controllers\AdminController;
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
Route::get('login', function () {
    return view('login');
});

Route::get('ajaxRequest', [AjaxController::class, 'ajaxRequest']);
Route::post('ajaxRequest', [AjaxController::class, 'ajaxRequestPost'])->name('ajaxRequest.post');
Route::get('test/{test}', [CvhtController::class, 'test']);
Route::get('chat', [CvhtController::class, 'ajaxRequest']);
Route::get('dashboard', [AdminController::class, 'dashboard']);
Route::get('them_tu_khoa', [AdminController::class, 'them_tu_khoa']);
Route::get('sua_tu_khoa/{id}', [AdminController::class, 'sua_tu_khoa']);
Route::get('xoa_tu_khoa/{tukhoa}', [AdminController::class, 'xoa_tu_khoa']);

Route::get('them_tra_loi', [AdminController::class, 'them_tra_loi']);
Route::get('sua_tra_loi/{id}', [AdminController::class, 'sua_tra_loi']);
Route::get('xoa_tra_loi/{id}', [AdminController::class, 'xoa_tra_loi']);

Route::get('them_chu_de', [AdminController::class, 'them_chu_de']);


Route::post('chat', [CvhtController::class, 'ajaxRequestPost'])->name('chat.post');
Route::post('checklogin', [AdminController::class, 'checklogin']);
Route::post('them_tu_khoa', [AdminController::class, 'them_tu_khoa_post']);
Route::post('sua_tu_khoa', [AdminController::class, 'sua_tu_khoa_post']);
Route::post('them_chu_de', [AdminController::class, 'them_chu_de_post']);
Route::post('them_tra_loi', [AdminController::class, 'them_tra_loi_post']);
Route::post('sua_tra_loi', [AdminController::class, 'sua_tra_loi_post']);