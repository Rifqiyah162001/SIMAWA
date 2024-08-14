<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisTahapan;

class JenisTahapanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenisTahapan = JenisTahapan::all();
        return view('admin.jenisTahapan.index', compact('jenisTahapan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jenisTahapan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi inputan nama kategori
        $request->validate([
            'nama_tahapan' => 'required',
        ]);

        // create kategori kegiatan baru
        JenisTahapan::create($request->all());

        // Tentukan aksi berdasarkan tombol yang diklik
        if ($request->input('action') === 'save_add') {
            return redirect()->route('jenistahapan.create')
                             ->with('success', 'Jenis Tahapan created successfully. You can add another one.');
        }

        return redirect()->route('jenistahapan.index')
                         ->with('success', 'Kategori Kegiatan created successfully.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // mengambil dari model kategori kegiatan berdasarkan ID
        $jenisTahapan = JenisTahapan::findOrFail($id);
        return view('admin.jenisTahapan.show', compact('jenisTahapan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jenisTahapan = JenisTahapan::findOrFail($id);
        return view('admin.jenisTahapan.edit', compact('jenisTahapan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //validasi inputan
        $request->validate([
            'nama_tahapan' => 'required',
        ]);

        // mengambil dari model kategori kegiatan berdasarkan ID
        $jenisTahapan = JenisTahapan::findOrFail($id);
        // update record
        $jenisTahapan->update($request->all());

        return redirect()->route('jenistahapan.index')
                         ->with('success', 'Kategori Kegiatan updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // delete kategori kegiatan berdasarkan ID
        JenisTahapan::where('id',$id)->delete();
        return redirect()->route('jenistahapan.index');
    }
}
