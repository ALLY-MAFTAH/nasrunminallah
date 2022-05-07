<?php

use App\Models\Broadcast;
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
    $broadcast = Broadcast::first();
    return view('welcome', compact('broadcast'));
});

Route::post('/add_question', [App\Http\Controllers\QuestionController::class, 'create'])->name('add_question');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/add_broadcast', [App\Http\Controllers\BroadcastController::class, 'create'])->name('add_broadcast');
Route::put('/update_broadcast/{broadcast}', [App\Http\Controllers\BroadcastController::class, 'update'])->name('update_broadcast');
Route::put('broadcasts/{broadcast}/status', [App\Http\Controllers\BroadcastController::class, 'toggleStatus'])->name('toggle_status');

