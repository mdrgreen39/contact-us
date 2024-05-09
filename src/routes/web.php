<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;

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

// Route::get('/admin', function()
// {
//     return view('admin');
// });

Route::get('/', [ContactController::class, 'index'])->name('index');
Route::get('/confirm', [ContactController::class,'confirm']);
Route::post('/confirm', [ContactController::class,'confirm'])->name('confirm');
Route::post('/thanks', [ContactController::class, 'store']);
Route::get('/thanks', [ContactController::class, 'show']);

Route::get('/auth/login', [AuthController::class, 'show'])->name('login');

Route::group(['middleware' => ['auth']], function ()
{
    Route::get('/admin', [AuthController::class, 'index'])->name('admin');
});
