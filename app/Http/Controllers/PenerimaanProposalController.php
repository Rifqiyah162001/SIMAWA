<?php

namespace App\Http\Controllers;

use App\Models\PenerimaanProposal;
use App\Models\BuatKegiatan;
use App\Models\TahapanKegiatan;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PenerimaanProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
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
        // Validasi untuk data yang masuk
        $request->validate([
            'buat_kegiatans_id' => 'required|exists:buat_kegiatans,id',
            'tahapan_kegiatans_id' => 'required|exists:tahapan_kegiatans,id',
            'judul_proposal' => 'required|string|max:255',
            'kategori_usaha' => 'required|string|max:255',
            'ketua_tim' => 'required|exists:users,id',
            'nomor_hp_ketua' => 'required|string|max:15',
            'email_ketua' => 'required|email|max:255',
            'anggota_tim' => 'required|array|min:1|max:4',
            'anggota_tim.*' => 'exists:users,id',
            'dosen_pembimbing' => 'required|exists:users,id',
            'proposal' => 'required|file|mimes:pdf|max:2048',
        ]);

        // Cek apakah ketua_tim atau anggota_tim sudah memiliki proposal atau belum
        $anggotaTimIds = $request->anggota_tim;
        $anggotaTimIds[] = $request->ketua_tim;

        $existingApprovedProposal = PenerimaanProposal::where('status_pengajuan', 'disetujui')
            ->whereHas('anggotaTim', function ($query) use ($anggotaTimIds) {
                $query->whereIn('users.id', $anggotaTimIds);
            })
            ->orWhere('ketua_tim', $request->ketua_tim)
            ->first();

        if ($existingApprovedProposal) {
            return redirect()->back()->withErrors(['error' => 'Salah satu anggota tim atau ketua tim sudah memiliki proposal yang disetujui.']);
        }

        DB::transaction(function () use ($request) {
            $proposalPath = $request->file('proposal')->store('public/proposals');
    
            $proposal = PenerimaanProposal::create([
                'buat_kegiatans_id' => $request->buat_kegiatans_id,
                'tahapan_kegiatans_id' => $request->tahapan_kegiatans_id,
                'judul_proposal' => $request->judul_proposal,
                'kategori_usaha' => $request->kategori_usaha,
                'ketua_tim' => $request->ketua_tim,
                'nomor_hp_ketua' => $request->nomor_hp_ketua,
                'email_ketua' => $request->email_ketua,
                'dosen_pembimbing' => $request->dosen_pembimbing,
                'proposal_path' => $proposalPath,
                'status_pengajuan' => 'proses', // Set status ke proses
            ]);

            $proposal->anggotaTim()->attach($request->anggota_tim);
            
        });

        return redirect()->route('pendanaanmahasiswa.show', ['pendanaanmahasiswa' => $request->buat_kegiatans_id, 'tab' => 'penerimaan_proposal'])
                         ->with('success', 'Proposal berhasil diunggah');
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
    public function update(Request $request, $id)
    {
        // Validasi untuk data yang masuk
        $request->validate([
            'buat_kegiatans_id' => 'required|exists:buat_kegiatans,id',
            'tahapan_kegiatans_id' => 'required|exists:tahapan_kegiatans,id',
            'judul_proposal' => 'required|string|max:255',
            'kategori_usaha' => 'required|string|max:255',
            'ketua_tim' => 'required|exists:users,id',
            'nomor_hp_ketua' => 'required|string|max:15',
            'email_ketua' => 'required|email|max:255',
            'anggota_tim' => 'required|array|min:1|max:4',
            'anggota_tim.*' => 'exists:users,id',
            'dosen_pembimbing' => 'required|exists:users,id',
            'proposal' => 'sometimes|file|mimes:pdf|max:2048',
        ]);

        $proposal = PenerimaanProposal::findOrFail($id);

        if ($request->hasFile('proposal')) {
            $proposalPath = $request->file('proposal')->store('public/proposals');
            $proposal->proposal_path = $proposalPath;
        }
        
        $proposal->update([
            'buat_kegiatans_id' => $request->buat_kegiatans_id,
            'tahapan_kegiatans_id' => $request->tahapan_kegiatans_id,
            'judul_proposal' => $request->judul_proposal,
            'kategori_usaha' => $request->kategori_usaha,
            'ketua_tim' => $request->ketua_tim,
            'nomor_hp_ketua' => $request->nomor_hp_ketua,
            'email_ketua' => $request->email_ketua,
            'dosen_pembimbing' => $request->dosen_pembimbing,
        ]);

        // Update relasi many-to-many anggota tim
        $proposal->anggotaTim()->sync($request->anggota_tim);

        return redirect()->route('pendanaanmahasiswa.show', ['pendanaanmahasiswa' => $request->buat_kegiatans_id, 'tab' => 'penerimaan_proposal'])
                        ->with('success', 'Proposal berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // PENERIMAAN PROPOSAL UNTUK HALAMAN ADMIN
    /**
     * function untuk menampilkan proposal
     */
    public function adminIndex() 
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
        
        return view('admin.proposals.index', compact('proposals', 'kategoriUsaha')); 
    }

    /**
     * Update status pengajuan proposal
     */
    public function updateStatus(Request $request, $id)
    {
        // Validasi input status pengajuan
        $request->validate([
            'status_pengajuan' => 'required|in:disetujui,ditolak',
        ]);

        // Mencari proposal berdasarkan id yang diberikan
        $proposal = PenerimaanProposal::findOrFail($id);

        // Mengupdate status proposal dengan status yang diterima dari request
        $proposal->status_pengajuan = $request->status_pengajuan;
        $proposal->save();

        return redirect()->route('admin.proposals.index') ->with('success', 'Status berhasil diperbarui');
    }
}
