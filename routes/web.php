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

//Тренировочные маршруты":

Route::get('/suggestions',[Controllers\SuggestController::class, 'name_change']);

//Предложить растение
Route::get('/suggestions/create', [Controllers\SuggestController::class, 'suggestPlant']);

//Изменить свою запись
Route::get('/suggestions/update', [Controllers\SuggestController::class, 'updatePlant']);

//Удалить свою запись
Route::get('/suggestions/delete', [Controllers\SuggestController::class, 'deletePlant']);


Route::get('/suggestions/foc', [Controllers\SuggestController::class, 'firstOrCreate']);

Route::get('/suggestions/uoc', [Controllers\SuggestController::class, 'updateOrCreate']);

//Реальные маршруты дальше:

Route::get('/',[Controllers\MainController::class, 'index'])->name('main.index');

Route::get('/map',[Controllers\MapController::class, 'index'])->name('map.index');

Route::get('/suggestions',[Controllers\SuggestController::class, 'index'])->name('suggestions.index');

Route::get('/suggestions/create',[Controllers\SuggestController::class, 'create'])->name('suggestions.create');

Route::get('/about',[Controllers\AboutController::class, 'index'])->name('about.index');

Route::get('/fake_suggestion',[Controllers\FakeSuggestController::class, 'index'])->name('fake_suggest.index');
