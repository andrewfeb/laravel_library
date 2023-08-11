<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oop\Book;
use App\Oop\ComputerBook;

class HomeController extends Controller
{
    /**
     * Display home view
     */
    public function index()
    {
        $book = new ComputerBook('Airlangga');
        return $book->getPenerbit();
    }
}
