<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookControllere;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/books', [BookControllere::class, 'index']);
Route::get('/books/create', [BookControllere::class, 'create']);
Route::get('/books/{id}', [BookControllere::class, 'show']);
Route::post('/books',[BookControllere::class, 'store']);
