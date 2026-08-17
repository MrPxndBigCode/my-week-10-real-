<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ClaimController;

Route::get('/', function () {
    return view("index");
});

Route::get('abouts',[AdminController::class , 'abouts'])->name("abouts");

Route::get('blogs',[AdminController::class , 'blogs'])->name("blogs");

Route::get('form',[AdminController::class , 'form'])->name("form");

Route::get('/books', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store']);

Route::post('/create',[AdminController::Class, 'create'])->name('create');
Route::post('/form/insert',[AdminController::class, 'insert']);

Route::get('/claim', [ClaimController::class, 'showForm'])->name('claim.form');
Route::post('/claim', [ClaimController::class, 'submitForm'])->name('claim.submit');

Route::get('/delete/{id}',[AdminController::class, 'delete']);