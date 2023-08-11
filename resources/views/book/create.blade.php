
<html>
<body>
    <!-- /resources/views/book/create.blade.php -->
    <label for="title">Tambah Buku</label>
    ...
    <input id="title" type="text" class="@error('title') is-invalid @enderror">
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    ...
</body>
</html>
