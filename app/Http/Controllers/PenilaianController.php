<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuatKegiatan;
use App\Models\JenisKegiatan;
use App\Models\PenerimaanProposal;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Mengambil semua proposal dari database 
         $proposals = PenerimaanProposal::with('ketuaTim', 'dosenPembimbing', 'anggotaTim', 'buatKegiatan.jenisKegiatan')->get();

         // Array untuk option value kategori usaha
         $kategoriUsaha = [
             1 => 'Kuliner',
             2 => 'Budidaya',
             3 => 'Ekonomi Kreatif',
             4 => 'Obat dan Herbal',
             5 => 'Teknologi Informasi',
             6 => 'Jasa dan Perdagangan',
         ];
         
         return view('reviewer.penilaian.index', compact('proposals', 'kategoriUsaha'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reviewer.penilaian.create');
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
    public function show(string $id)
    {
        //
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
