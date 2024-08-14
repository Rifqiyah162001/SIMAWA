<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategoriKegiatan;

class KategoriKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     * Mengambil semua record kategori kegiatan dari database dan menampilkannya dihalaman indeks
     */
    public function index()
    {
        $kategoriKegiatan = kategoriKegiatan::all();
        return view('admin.kategoriKegiatan.index', compact('kategoriKegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategoriKegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi inputan nama kategori
        $request->validate([
            'nama_kategori' => 'required',
        ]);

        // create kategori kegiatan baru
        KategoriKegiatan::create([
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect()->route('kategorikegiatan.index')
                         ->with('success', 'Kategori Kegiatan created successfully.');
    }
    
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // mengambil dari model kategori kegiatan berdasarkan ID
        $kategoriKegiatan = kategoriKegiatan::findOrFail($id);
        return view('admin.kategorikegiatan.show', compact('kategoriKegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategoriKegiatan = kategoriKegiatan::findOrFail($id);
        return view('admin.kategoriKegiatan.edit', compact('kategoriKegiatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //validasi inputan
        $request->validate([
            'nama_kategori' => 'required',
        ]);

         // mengambil dari model kategori kegiatan berdasarkan ID
        $kategoriKegiatan = kategoriKegiatan::findOrFail($id);
        // update record
        $kategoriKegiatan->update([
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect()->route('kategorikegiatan.index')
                         ->with('success', 'Kategori Kegiatan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // delete kategori kegiatan berdasarkan ID
        kategoriKegiatan::where('id',$id)->delete();
        return redirect()->route('kategorikegiatan.index');
    }
}
