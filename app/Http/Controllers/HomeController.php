<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oop\Book;

class HomeController extends Controller
{
    /**
     * Display home view
     */
    public function index()
    {
        $book = new Book('Airlangga');
        return $book->getPenerbit();
    }
}
