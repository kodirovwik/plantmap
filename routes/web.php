<?php

use App\Http\Controllers;
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

//Реальные маршруты дальше:

Route::get('/',[Controllers\MainController::class, 'index'])->name('main.index');

Route::get('/map',[Controllers\MapController::class, 'index'])->name('map.index');

Route::get('/suggestions',[Controllers\SuggestController::class, 'index'])->name('suggestions.index');

Route::get('/suggestions/create',[Controllers\SuggestController::class, 'create'])->name('suggestions.create');

Route::post('/suggestions',[Controllers\SuggestController::class, 'store'])->name('suggestions.store');

Route::get('/about',[Controllers\AboutController::class, 'index'])->name('about.index');

Route::get('/fake_suggestion',[Controllers\FakeSuggestController::class, 'index'])->name('fake_suggest.index');

Route::get('/fake_suggestion/create',[Controllers\FakeSuggestController::class, 'create'])->name('fake_suggest.create');

Route::post('/fake_suggestion',[Controllers\FakeSuggestController::class, 'store'])->name('fake_suggest.store');
