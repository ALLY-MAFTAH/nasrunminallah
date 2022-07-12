<?php

use App\Models\Broadcast;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {

    return view('index');
});

Route::post('/add_question', [App\Http\Controllers\QuestionController::class, 'create'])->name('add_question');
Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/radio', [App\Http\Controllers\BroadcastController::class, 'radio'])->name('radio');
Route::post('/add_broadcast', [App\Http\Controllers\BroadcastController::class, 'create'])->name('add_broadcast');
Route::put('/update_broadcast/{broadcast}', [App\Http\Controllers\BroadcastController::class, 'update'])->name('update_broadcast');
Route::put('broadcasts/{broadcast}/status', [App\Http\Controllers\BroadcastController::class, 'toggleStatus'])->name('toggle_status');
Route::get('/delete_question/{question}', [App\Http\Controllers\QuestionController::class, 'deleteQuestion'])->name('delete_question');
Route::get('/questions', [App\Http\Controllers\QuestionController::class, 'index'])->name('questions');
Route::put('toggle-questions/status', [App\Http\Controllers\QuestionController::class, 'toggleQuestions'])->name('toggle-questions');

Route::get('/refresh-status', [App\Http\Controllers\BroadcastController::class, 'refreshStatus'])->name('refresh-status');
Route::get('/refresh-title', [App\Http\Controllers\BroadcastController::class, 'refreshTitle'])->name('refresh-title');
Route::get('/refresh-book', [App\Http\Controllers\BroadcastController::class, 'refreshBook'])->name('refresh-book');
Route::get('/refresh-teacher', [App\Http\Controllers\BroadcastController::class, 'refreshTeacher'])->name('refresh-teacher');
Route::get('/refresh-extra', [App\Http\Controllers\BroadcastController::class, 'refreshExtra'])->name('refresh-extra');
