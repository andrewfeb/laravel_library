<?php
// File app\Http\Controllers\HomeController.php
namespace App\Http\Controllers;

use App\Oop\ComputerBook;
use App\Oop\CookingBook;

class HomeController extends Controller
{
    /**
     * Display home view
     */
    public function index()
    {
        return view('home');
    }
}
