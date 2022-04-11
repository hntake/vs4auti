<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
//ホーム画面表示
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//新規作成画面へ遷移
Route::get('/create', [App\Http\Controllers\ScheduleController::class,'create'])->name('create');
//新規スケジュールの保存
Route::post('/create', [App\Http\Controllers\ScheduleController::class,'schedule'])->name('create');

 //画像表示ページ
Route::get('/selectpicture/{id}', [App\Http\Controllers\ScheduleController::class,'select_picture'])->name('select_picture');
 //画像削除
Route::get('/picture/{id}', [App\Http\Controllers\ScheduleController::class,'delete_picture'])->name('delete_picture');

//画像投稿フォーム
Route::get('/store', [App\Http\Controllers\ScheduleController::class,'picture'])->name('store');
//画像保存
Route::post('/store', [App\Http\Controllers\ScheduleController::class,'store'])->name('store');

//リストページへ遷移
Route::get('/list', [App\Http\Controllers\ScheduleController::class,'list'])->name('list');
//リスト削除
Route::get('/list/{id}', [App\Http\Controllers\ScheduleController::class,'delete_list'])->name('delete_list');

//並び替え
Route::get('/sort', [App\Http\Controllers\ExtraController::class,'sort'])->name('sort');
//スケジュール表示画面
Route::get('/schedule', [App\Http\Controllers\ScheduleController::class,'index'])->name('schedule');
//スケジュール検索画面表示
Route::get('/search', [App\Http\Controllers\ScheduleController::class,'search'])->name('search');
//スケジュール検索結果表示
Route::get('/search', [App\Http\Controllers\ExtraController::class,'search'])->name('search');



