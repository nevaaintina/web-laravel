@extends('template')
@section('title')
Kategori Buku
@endsection
@section('header')
<h4>Kategori Buku</h4>
@endsection

@section('main')
<table border='1'>
<thead>
<th>No</th>
<th>Kategori Buku</th>
<th>Aksi Edit</th>
<th>Aksi Hapus</th>
</thead>
<tbody>
@if (!empty($KategoriBuku))
@php
$i=1
@endphp
@foreach($KategoriBuku as $KategoriBuku)
<tr>
<td>{{ $i }}</td>
<td>{{ $KategoriBuku->kategori_buku }}</td>

<td><a href="{{url('/kategori-buku.'.$KategoriBuku->id_kategori_buku.'.edit')}}">

<input type="button" value="Edit" /></a></td>
<td>

<form action="{{url('/kategori-buku.'.$KategoriBuku->id_kategori_buku)}}"

method="Post" onsubmit="return confirm('Apakah data ingin dihapus?')">
@csrf
<input type="hidden" value="DELETE"
name="_method">
<input type="submit" value="Delete" />

</form>
</td>
</tr>
@php
$i++
@endphp
@endforeach
@else
<p>Tidak ada data Kategori Buku</p>
@endif
<tbody>
</table>
<p>Jumlah Data : {{ $JumlahKategoriBuku }}</p>
<a href="{{url('kategori-buku.create')}}">Tambah Kategori Buku</a>
@endsection