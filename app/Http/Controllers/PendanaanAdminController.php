<?php

namespace App\Http\Controllers;

use App\Models\BuatKegiatan;
use Illuminate\Http\Request;

class PendanaanAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil data buat kegiatan berdasarkan tahun saat ini
        $currentYear = date('Y');
        $buatKegiatan = BuatKegiatan::where('tahun', $currentYear)->get();

        return view('admin.pendanaan.index', compact('buatKegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $buatKegiatan = BuatKegiatan::with('tahapanKegiatan.jenisTahapan')->findOrFail($id);
        // Ambil data show_in_tabs dari database
        $showInTabs = $buatKegiatan->tahapanKegiatan->where('show_in_tabs', true)->pluck('jenis_tahapans_id')->toArray();

        return view('admin.pendanaan.show', compact('buatKegiatan', 'showInTabs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
