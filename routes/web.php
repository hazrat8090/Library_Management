<?php

use App\Http\Controllers\AddStudentController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/register', function () {
    return view('authentication.registration');
})->name('register');

Route::post('/register', [RegisterController::class, 'register']);


Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', function () {
    return view('authentication.login');
})->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');


Route::get('/dashboard', function () {
    return view('welcome');
})->name("dashboard");


// student route
Route::get('/showStudentForm', [AddStudentController::class, 'showStudentForm'])->name('showStudentForm');
Route::post('/add-student', [AddStudentController::class, 'store'])->name('addStudent');
Route::get('/search-student', [AddStudentController::class, 'search'])->name('searchStudent');

// book routes
Route::get('/showBookForm', [BookController::class, 'showBookForm'])->name('showBookForm');
Route::post('/add-book', [BookController::class, 'store'])->name('addBook');
Route::get('/search-book', [BookController::class, 'search'])->name("searchBook");
Route::get('/book-list', [BookController::class, 'bookList'])->name("bookList");

// Borrower routes
Route::get('/showBorrower', [BorrowerController::class, 'showBorrower'])->name("showBorrower");
Route::post('/addBorrower', [BorrowerController::class, 'addBorrower'])->name("addBorrower");
Route::get('/borrower-list', [BorrowerController::class, 'borrowerList'])->name("borrowerList");

// Update Return
Route::get('/update-return', [BorrowerController::class, 'updateReturn'])->name('updateReturn');
Route::post('/update-borrower', [BorrowerController::class, 'updateBorrwer'])->name('updateBorrwer');
