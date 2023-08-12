<!-- File resources/views/book/index.blade.php -->
<x-app>
    <x-slot:title>Daftar Buku</x-slot>

    @foreach ($books as $book)
        Judul: {{ $book->judul }}<br/>
        Penerbit: {{ $book->penerbit }} <br/>
        Penulis: {{ $book->penulis }} <br/><br/>
    @endforeach
</x-app>
