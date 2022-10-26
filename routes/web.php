<?php

use App\Http\Controllers\DebugController;
use App\Http\Controllers\TagController;
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
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/dashboard', static function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('tags', TagController::class);
});



Route::get('/debug', DebugController::class);


require __DIR__.'/auth.php';
