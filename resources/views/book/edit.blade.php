<!-- File resources/views/book/create.blade.php -->
<x-app>
    <x-slot:title>Buku</x-slot>

    <h5 class="mb-3">Edit Buku</h5>

    <form method="post" action="{{ route('books.update', $book->id) }}">
      @csrf
      @method('put')
      <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ $book->judul ?? old('judul') }}">
        @error('judul')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label for="penulis" class="form-label">Penulis</label>
        <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis" value="{{ $book->penulis ?? old('penulis') }}">
        @error('penulis')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label for="penerbit" class="form-label">Penerbit</label>
        <input type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" value="{{ $book->penerbit ?? old('penerbit') }}">
        @error('penerbit')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah</label>
        <input type="number" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" value="{{ $book->jumlah ?? old('jumlah') }}">
        @error('jumlah')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
      </div>
      <div>
        <a href={{route('books.index')}} class="btn btn-secondary me-2">Batal</a>
        <button type="submit" class="btn btn-primary" name="save">Simpan</button>
      </div>
    </form>
</x-app>
