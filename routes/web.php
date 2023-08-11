<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return 'Hello World';
});

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('books', [BookController::class, 'index'])
    ->name('book.index');
Route::get('books/{book}', [BookController::class, 'edit'])
    ->name('book.edit');
Route::post('books', [BookController::class, 'store'])->name('book.store');
Route::put('books/{id}', [BookController::class, 'update'])->name('book.update');
Route::delete('books/{id}', [BookController::class, 'destroy'])->name('book.destroy');

Route::resources([
    'books' => BookController::class,
    'categories' => CategoryController::class
]);
