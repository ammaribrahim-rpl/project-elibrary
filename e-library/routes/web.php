<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Protected Routes yang memerlukan autentikasi
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Daftarkan rute untuk books
    Route::get('/books', [BooksController::class, 'index'])->name('books.index');
    
    // Penting: rute /books/create harus didefinisikan SEBELUM /books/{book}
    Route::middleware('admin')->group(function() {
        Route::get('/books/create', [BooksController::class, 'create'])->name('books.create');
        Route::post('/books', [BooksController::class, 'store'])->name('books.store');
        Route::get('/books/{book}/edit', [BooksController::class, 'edit'])->name('books.edit');
        Route::put('/books/{book}', [BooksController::class, 'update'])->name('books.update');
        Route::delete('/books/{book}', [BooksController::class, 'destroy'])->name('books.destroy');
    });
    
    // Letakkan rute show SETELAH rute spesifik seperti create dan edit
    Route::get('/books/{book}', [BooksController::class, 'show'])->name('books.show');
});

Route::redirect('/', '/books');

// Fallback route
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});