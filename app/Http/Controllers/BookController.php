<?php
// File app/Http/Controllers/BookController.php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::orderBy('judul', 'asc')->take(5)->get();

        return view('book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*$book = new Book;

        $book->judul = $request->input('judul');
        $book->penerbit = $request->input('penerbit');
        $book->penulis = $request->input('penulis');
        $book->jumlah = $request->input('jumlah');
        $book->save();*/
        $book = Book::create([
            'judul' => $request->input('judul'),
            'penerbit' => $request->input('penerbit'),
            'penulis' => $request->input('penulis'),
            'jumlah' => $request->input('jumlah')
        ]);

        return redirect()->route('books.index');

    }

    // Sebelum menggunakan opsi --model
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        /*$book->judul = 'Laravel 10';
        $book->save();*/
        $book->update([
            'judul' => $request->input('judul')
        ]);

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index');
    }
}
