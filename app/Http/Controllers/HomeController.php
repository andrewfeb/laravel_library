<?php
// File app\Http\Controllers\HomeController.php
namespace App\Http\Controllers;

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
        $book->kategori = 'Computer Book';
        return $book->kategori;
    }
}
