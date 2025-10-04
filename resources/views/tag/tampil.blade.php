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
<th>Aksi</th>
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

<td><a href="{{url('/kategori-
buku.'.$KategoriBuku->id_kategori_buku.'.edit')}}"> Edit</a></td>

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
<a href="{{url('kategori-buku.create')}}">Tambah Kategori Buku</a>
@endsection