<?php
// File app\Oop\Book.php
namespace App\Oop;

/**
 * Parent class
 */
class Book
{
    /**
     * Property untuk penerbit
     *
     * @var string
     */
    private $penerbit = 'Elex Media';

    /**
     * Property untuk kategori
     *
     * @var string
     */
    protected $kategori;

    public function __construct($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    /**
     * Method untuk mendapatkan nama penerbit
     *
     * @return string
     */
    public function getPenerbit()
    {
        return $this->penerbit;
    }
}
?>
