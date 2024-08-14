<?php

namespace App\Http\Controllers;

use App\Models\BuatKegiatan;
use App\Models\User;
use App\Models\PenerimaanProposal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\DB;

class PendanaanMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource
     */
    public function index()
    {
         // Ambil data buat kegiatan berdasarkan tahun saat ini
         $currentYear = date('Y');
         $buatKegiatan = BuatKegiatan::where('tahun', $currentYear)->get();
 
         return view('mahasiswa.pendanaanMahasiswa.index', compact('buatKegiatan'));
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
        $mahasiswa = User::where('role', 'mahasiswa')->get();
        $dosen = User::where('role', 'dosen')->get();

        // Ambil data show_in_tabs dari database
        $showInTabs = $buatKegiatan->tahapanKegiatan->where('show_in_tabs', true)->pluck('jenis_tahapans_id')->toArray();

        // Cek apakah user saat ini adalah ketua tim atau anggota tim dari proposal
        $proposalUser = PenerimaanProposal::where('ketua_tim', Auth::id())
        ->orWhereHas('anggotaTim', function ($query) {
            $query->where('users_id', Auth::id());
        })
        ->first();
        
        return view('mahasiswa.pendanaanMahasiswa.show', compact('buatKegiatan', 'showInTabs', 'proposalUser', 'mahasiswa', 'dosen'));
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
