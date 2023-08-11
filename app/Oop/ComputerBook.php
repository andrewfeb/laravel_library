<?php
// File app\Oop\ComputerBook.php
namespace App\Oop;

use App\Oop\Book;

/**
 * Child class
 */
class ComputerBook extends Book
{
    public function __construct($penerbit)
    {
        Parent::__construct($penerbit);
    }
}
?>
