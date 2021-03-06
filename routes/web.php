<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRCodeController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('simple-qr-code', [QRCodeController::class, 'simpleQr']);
Route::get('color-qr-code', [QRCodeController::class, 'colorQr']);
Route::get('email-qr-code', [QRCodeController::class, 'emailQrCode']);
Route::get('simple-view-qr-code', [QRCodeController::class, 'simpleViewQr']);
