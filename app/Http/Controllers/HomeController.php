<?php
// File app\Http\Controllers\HomeController.php
namespace App\Http\Controllers;

use App\Oop\Book;
use App\Oop\ComputerBook;
use App\Oop\CookingBook;

class HomeController extends Controller
{
    /**
     * Display home view
     */
    public function index()
    {
        $book = new ComputerBook();
        $cook = new CookingBook();

        return $book->title().'<br/>'.$cook->title();
    }
}
