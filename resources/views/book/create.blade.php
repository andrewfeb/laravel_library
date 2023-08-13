<!-- File resources/views/book/create.blade.php -->
<x-app>
    <x-slot:title>Buku</x-slot>
    <h5 class="mb-3">Tambah Buku</h5>

    {{-- @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
        </ul>
      </div>
    @endif --}}

    <form method="post" action="{{ route('books.store') }}">
      @csrf
      <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}">
        @error('judul')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label for="penulis" class="form-label">Penulis</label>
        <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis" value="{{ old('penulis') }}">
        @error('penulis')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label for="penerbit" class="form-label">Penerbit</label>
        <input type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" value="{{ old('penerbit') }}">
        @error('penerbit')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah</label>
        <input type="number" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" value="{{ old('jumlah') }}">
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
