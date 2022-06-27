<?php

use App\Http\Controllers\ContactController;
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

Route::get('/', fn () => auth::check() ? redirect('/contacts/index') : view('welcome'));

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contacts/index', [ContactController::class, 'index'])->name('contacts.index');

Route::get('contacts/create', [ContactController::class, 'create'])->name('contacts.create');

Route::post('contacts/', [ContactController::class, 'store'])->name('contacts.store');

Route::get('contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');
