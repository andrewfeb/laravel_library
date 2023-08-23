<!-- File resources/views/book/index.blade.php -->
<x-app>
    <x-slot:title>Buku</x-slot>

    <h5 class="mb-3">Daftar Buku</h5>

    <div class="mb-3">
      <a class="btn btn-primary" href="{{ route('books.create') }}">Tambah Buku</a>
    </div>
    <table class="table table-hover">
      <thead class="table-light">
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Kategori</th>
          <th>Penulis</th>
          <th>Penerbit</th>
          <th>Aksi</th>
        <tr>
      </thead>
      <tbody>
        @foreach ($books as $book)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $book->judul }}</td>
            <td>{{ $book->category->kategori ?? '' }}</td>
            <td>{{ $book->penulis }}</td>
            <td>{{ $book->penerbit }}</td>
            <td>
              <a class="btn btn-warning" href="{{ route('books.edit', $book->id )}}">Edit</a> |
              <form method="post" action="{{ route('books.destroy', $book->id)}}">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus item ini?');">Hapus</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $books->links() }}
</x-app>
