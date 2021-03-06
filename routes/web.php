<?php

use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CheckinBookController;
use App\Http\Controllers\CheckoutBookController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::post('books', [BooksController::class, 'store']);
Route::patch('books/{book}-{slug}', [BooksController::class, 'update']);
Route::delete('books/{book}-{slug}', [BooksController::class, 'destroy']);

Route::get('authors', [AuthorsController::class, 'create'])->name('authors.create');
Route::post('authors', [AuthorsController::class, 'store']);

Route::post('checkout/{book}', [CheckoutBookController::class, 'store']);
Route::post('checkin/{book}', [CheckinBookController::class, 'store']);

Route::middleware(['auth:sanctum', 'verified'])->get('dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
