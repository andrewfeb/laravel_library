<!-- File resources/views/book/index.blade.php -->
<!DOCTYPE html>
<html>
<head></head>
<body>
    <h1>Daftar Produk untuk kategori {{ $category }}</h1>
    @if (count($records) === 1)
        Saya mempunyai 1 data
    @elseif (count($records) > 1)
        Saya mempunyai banyak data
    @else
        Saya tidak mempunyai data
    @endif

    @unless (count($records) > 0)
        Saya tidak mempunyai data
    @endunless

    @isset($records)
        {{-- $records telah didefinisikan dan tidak null --}}
    @endisset

    @empty($records)
        {{-- Nilai $records adalah kosong --}}
    @endempty

    @auth
	    {{-- User telah diautentikasi --}}
    @endauth

    @guest
        {{-- User tidak diautentikasi atau sebagai guest --}}
    @endguest

    @auth('admin')
        {{-- User telah diautentikasi --}}
    @endauth

    @guest('admin')
        {{-- User tidak diautentikasi atau sebagai guest --}}
    @endguest

    @switch($hari)
        @case(0)
            Hari Minggu
            @break
        @case(1)
            Hari Senin
            @break
        @case(2)
            Hari Selasa
            @break
        ...
        @default
            Hari tidak diketahui
    @endswitch

    @for ($i = 0; $i < 10; $i++)
        Angka {{ $i }} <br/>
    @endfor

    @foreach ($books as $book)
        <p>{{ $book->title }}</p>
    @endforeach

    @forelse ($books as $book)
        <li>{{ $book->title }}</li>
    @empty
        <p>Belum ada book</p>
    @endforelse

    @while (true)
        <p>I'm looping forever.</p>
    @endwhile

    @foreach ($books as $book)
        @if ($book->category_id == 1)
            @continue
        @endif

        <li>{{ $book->title }}</li>

        @if ($book->id == 5)
            @break
        @endif
    @endforeach

    @foreach ($books as $book)
        @continue($book->category_id == 1)

        <li>{{ $book->title }}</li>

        @break($book->id == 5)
    @endforeach

    @php
	    // ketik kode PHP di sini
    @endphp

    <form method="POST" action="{{ route('book.update', $book->id) }}">
        @method('PUT')
        ...
    </form>

</body>
</html>
