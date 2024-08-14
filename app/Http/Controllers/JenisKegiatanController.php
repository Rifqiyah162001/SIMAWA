<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategoriKegiatan;
use App\Models\JenisKegiatan;

class JenisKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     * mengambil data dari database kategori kegiatan yg berelasi dengan jenis kegiatan
     * data dikirim ke jenis kegiatan indexx
     */
    public function index()
    {
        $jenisKegiatan = JenisKegiatan::with('KategoriKegiatan')->get();
        return view('admin.jenisKegiatan.index', compact('jenisKegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoriKegiatan = kategoriKegiatan::all();
        return view('admin.jenisKegiatan.create', compact('kategoriKegiatan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // validasi inputan nama kategori
        $request->validate([
            'jenis_kegiatan' => 'required',
            'kategori_kegiatans_id' => 'required',
        ]);

        // create kategori kegiatan baru
        JenisKegiatan::create([
            'jenis_kegiatan' => $request->jenis_kegiatan,
            'kategori_kegiatans_id' => $request->kategori_kegiatans_id,
        ]);

        return redirect()->route('jeniskegiatan.index')
                         ->with('success', 'Kategori Kegiatan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jenisKegiatan = JenisKegiatan::findOrFail($id);
        return view('admin.jenisKegiatan.show', compact('jenisKegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jenisKegiatan = JenisKegiatan::findOrFail($id);
        $kategoriKegiatan = kategoriKegiatan::all();
        return view('admin.jenisKegiatan.edit', compact('jenisKegiatan','kategoriKegiatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //validasi inputan
        $request->validate([
            'jenis_kegiatan' => 'required',
            'kategori_kegiatans_id' => 'required',
        ]);

         // mengambil dari model kategori kegiatan berdasarkan ID
        $jenisKegiatan = JenisKegiatan::findOrFail($id);
        // update record
        $jenisKegiatan->update([
            'jenis_kegiatan' => $request->jenis_kegiatan,
            'kategori_kegiatans_id' => $request->kategori_kegiatans_id,
        ]);

        return redirect()->route('jeniskegiatan.index')
                         ->with('success', 'Kategori Kegiatan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        JenisKegiatan::where('id',$id)->delete();
        return redirect()->route('jeniskegiatan.index')->with('success', 'Jenis Kegiatan deleted successfully.');
    }
}
