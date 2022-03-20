<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StampController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

use App\Http\Controllers\AuthorController;

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

//topページ表示
Route::get('/', function () {
  //return view('welcome');//
  return view('auth.login');
});

//打刻ページ
Route::get('/stamp', [StampController::class, 'button']);
Route::post('/stamp/start', [StampController::class, 'start']);
Route::post('/stamp/end', [StampController::class, 'end']);
Route::post('/stamp/rest', [StampController::class, 'rest']);
Route::post('/stamp/resume', [StampController::class, 'resume']);

//日付一覧ページ
Route::get('/data', [DataController::class, 'index']);





Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
