<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\ContactController;
use App\Models\Community;
use App\Models\Contact;
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

Route::view('/', 'welcome');
Route::view('/crash/evolution', 'evolution')->name('crash.evolution');
Route::view('/crash/games', 'games')->name('crash.games');

// Community Comments Page
Route::get('/crash/community', [CommunityController::class, 'index'])->name('all.posts');
Route::get('/crash/community/create', [CommunityController::class, 'create'])->name('create.post');
Route::post('/crash/community', [CommunityController::class, 'store'])->name('submit.post');
Route::get('/crash/community/edit/{id}', [CommunityController::class, 'edit'])->name('edit.post');
Route::post('/crash/community/update/{id}', [CommunityController::class, 'update'])->name('update.post');
Route::get('/crash/community/delete/{id}', [CommunityController::class, 'destroy'])->name('delete.post');

// About Us Contact Page
Route::get('/crash/about', [ContactController::class, 'index'])->name('contact.page');
Route::post('/crash/about', [ContactController::class, 'store'])->name('contact.submit');