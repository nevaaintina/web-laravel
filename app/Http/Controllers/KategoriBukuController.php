<?php

namespace App\Http\Controllers;

use App\Models\KategoriBuku;
use Illuminate\Http\Request;

class KategoriBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $data_kategori_buku = KategoriBuku::all()
->sortBy('kategori_buku');
$jumlah_data = $data_kategori_buku->count();
return view('tag.tampil',
['KategoriBuku' => $data_kategori_buku,
'JumlahKategoriBuku'=>$jumlah_data ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori-buku.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategori = KategoriBuku::create($request->all());
return redirect('/kategori-buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data_kategori_buku = KategoriBuku::find($id);
return view('kategori-buku.edit', ['KategoriBuku' =>
$data_kategori_buku]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    
KategoriBuku::where('id_kategori_buku',$id)->update([
'kategori_buku' => $request->kategori_buku]);
return redirect('/kategori-buku');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $kategori = KategoriBuku::find($id);
    $kategori->delete();
    return redirect('/kategori-buku');
    }
}
