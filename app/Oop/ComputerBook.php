<?php
// File app\Oop\ComputerBook.php
namespace App\Oop;

use App\Oop\Book;

class ComputerBook extends Book
{
    public function title()
    {
        return 'Ini buku komputer dengan judul Laravel 10';
    }
}
?>
