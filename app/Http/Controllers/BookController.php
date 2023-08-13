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
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|max:50',
            'penerbit' => 'required|max:50',
            'penulis' => 'required|max:50',
            'jumlah' => 'required|numeric|between:0,10'
        ],[
            'judul.required' => 'Judul harus diisi',
            'judul.max' => 'Panjang karakter judul <= 50 karakter',
            'penerbit.required' => 'Penerbit harus diisi',
            'penerbit.max' => 'Panjang karakter penerbit <= 50 karakter',
            'penulis.required' => 'Penulis harus diisi',
            'penulis.max' => 'Panjang karakter penulis <= 50 karakter',
            'jumlah.required' => 'Jumlah harus diisi',
            'jumlah.numeric' => 'Jumlah harus angka',
            'jumlah.between' => 'Jumlah harus diantara 0 sampai 10'
        ]);

        $book = Book::create([
            'judul' => $request->input('judul'),
            'penerbit' => $request->input('penerbit'),
            'penulis' => $request->input('penulis'),
            'jumlah' => $request->input('jumlah')
        ]);

        return redirect()->route('books.index')->with([
            'status' => 'success',
            'message' => 'Buku berhasil ditambah'
        ]);
    }

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
