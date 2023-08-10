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
