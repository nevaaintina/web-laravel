@extends('template')
@section('title', 'Kategori Buku')

@section('header')
<h4>Kategori Buku</h4>
@endsection

@section('main')
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Kategori Buku</th>
            <th>Aksi Edit</th>
            <th>Aksi Hapus</th>
        </tr>
    </thead>
    <tbody>
        @if ($KategoriBuku->isNotEmpty())
            @php $i = 1; @endphp
            @foreach ($KategoriBuku as $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->kategori_buku }}</td>
                    <td>
                        <a href="{{ url('/kategori-buku/'.$item->id_kategori_buku.'/edit') }}">
                            <input type="button" value="Edit">
                        </a>
                    </td>
                    <td>
                        <form action="{{ url('/kategori-buku/'.$item->id_kategori_buku) }}"
                              method="post"
                              onsubmit="return confirm('Apakah anda yakin akan menghapus data ini?')"
                              style="display:inline">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="4">Tidak ada data Kategori Buku</td>
            </tr>
        @endif
    </tbody>
</table>

<p>Jumlah Data : {{ $JumlahKategoriBuku }}</p>
<a href="{{ url('/kategori-buku/create') }}">Tambah Kategori Buku</a>
@endsection
