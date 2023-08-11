<?php
namespace App\Oop;

class Book
{
    /**
     * Property untuk penerbit
     *
     * @var string
     */
    private $penerbit = 'Elex Media';

    public function __construct($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function __destruct()
    {
        echo 'Penerbit buku ini adalah ' . $this->penerbit . '<br/>';
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
