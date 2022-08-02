<?php

use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\RentListController;
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

//Rent List Books
Route::get('/avaible-books', [RentListController::class, 'avaibleBooks']);
Route::get('/returned-books', [RentListController::class, 'returnedBooks']);

Route::resource('/books', BookController::class);

Route::resource('/categories', CategoryController::class);

Route::resource('/authors', AuthorsController::class);

Route::resource('/publishers', PublisherController::class);
