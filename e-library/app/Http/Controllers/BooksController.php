<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // Aktifkan middleware admin untuk akses CRUD buku
        $this->middleware('admin')->only(['create', 'store', 'edit', 'update', 'destroy']);
    }

    /**
     * Display a listing of the books.
     */
    public function index()
    {
        $books = Books::latest()->paginate(10);
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new book.
     */
    public function create()
    {
        // Middleware admin sudah diaktifkan di constructor, tidak perlu cek lagi
        return view('books.create');
    }

    /**
     * Store a newly created book in storage.
     */
    public function store(Request $request)
    {
        // Middleware admin sudah diaktifkan di constructor, tidak perlu cek lagi
        $request->validate([
            'name' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'description' => 'required|string',
            'publication_year' => 'required|integer|min:1800|max:' . date('Y'),
            'page_count' => 'required|integer|min:1',
        ]);

        Books::create($request->all());

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil ditambahkan.');
    }

    /**
     * Display the specified book.
     */
    public function show(Books $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified book.
     */
    public function edit(Books $book)
    {
        // Middleware admin sudah diaktifkan di constructor, tidak perlu cek lagi
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified book in storage.
     */
    public function update(Request $request, Books $book)
    {
        // Middleware admin sudah diaktifkan di constructor, tidak perlu cek lagi
        $request->validate([
            'name' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'description' => 'required|string',
            'publication_year' => 'required|integer|min:1800|max:' . date('Y'),
            'page_count' => 'required|integer|min:1',
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil diperbarui.');
    }

    /**
     * Remove the specified book from storage.
     */
    public function destroy(Books $book)
    {
        // Middleware admin sudah diaktifkan di constructor, tidak perlu cek lagi
        $book->delete();

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil dihapus.');
    }
}