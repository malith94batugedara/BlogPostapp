<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/addblogs', [BlogController::class, 'store'])->name('admin.addblogs');

Route::get('/viewblogs', [BlogController::class, 'index'])->name('viewblogs');

});