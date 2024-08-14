<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListBeasiswa;

class ListBeasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listBeasiswa = ListBeasiswa::all();
        return view('admin.listBeasiswa.index', compact('listBeasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.listBeasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi inputan
        $request->validate([
            'kode_beasiswa' => 'required',
            'nama_beasiswa' => 'required',
        ]);

        // create daftar beasiswa baru
        ListBeasiswa::create($request->all());

        // Aksi berdasarkan tombol yang di klik
        if ($request->input('action') === 'save_add') {
            return redirect()->route('listBeasiswa.create')
                             ->with('success', 'Daftar Beasiswa created successfully. You can add another one.');
        }

        return redirect()->route('listBeasiswa.index')
                         ->with('success', 'Daftar Beasiswa created successfully.');
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
    public function edit($id)
    {
        $listBeasiswa = ListBeasiswa::findOrFail($id);
        return view('admin.listBeasiswa.edit', compact('listBeasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // validasi inputan
        $request->validate([
            'kode_beasiswa' => 'required',
            'nama_beasiswa' => 'required',
        ]);

        // mengambil data dari model data beasiswa berdasarkan id
        $listBeasiswa = ListBeasiswa::findOrFail($id);

        // update record
        $listBeasiswa->update($request->all());

        return redirect()->route('listBeasiswa.index')
                         ->with('success', 'Daftar Beasiswa updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // hapus data beasiswa berdasarkan id
        ListBeasiswa::where('id',$id)->delete();
        return redirect()->route('listBeasiswa.index');
    }
}
