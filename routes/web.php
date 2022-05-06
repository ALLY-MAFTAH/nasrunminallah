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
    $broadcasts = Broadcast::all();

    return view('welcome', compact('broadcasts'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/add_broadcast', [App\Http\Controllers\BroadcastController::class, 'create'])->name('add_broadcast');
Route::put('/update_broadcast/{broadcast}', [App\Http\Controllers\BroadcastController::class, 'update'])->name('update_broadcast');
