<?php
// File app\Oop\CookingBook.php
namespace App\Oop;

use App\Oop\Book;

class CookingBook extends Book
{
    public function title()
    {
        return 'Ini buku memasak dengan judul 10 resep masakan Nusantara';
    }
}
?>
