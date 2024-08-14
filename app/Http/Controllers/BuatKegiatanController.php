<?php

namespace App\Http\Controllers;
use App\Models\BuatKegiatan;
use App\Models\JenisKegiatan;
use App\Models\JenisTahapan;
use App\Models\TahapanKegiatan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BuatKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     * mengambil data dari database jenis kegiatan yg berelasi dengan jbuat kegiatan
     */
    public function index()
    {
        $buatKegiatan = BuatKegiatan::with('jenisKegiatan')->get();
        return view('admin.buatKegiatan.index', compact('buatKegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengambil semua data JenisKegiatan dan JenisTahapan untuk form create
        $jenisKegiatan = JenisKegiatan::all();
        $jenisTahapan = JenisTahapan::all();

        // Menampilkan view create dengan data JenisKegiatan dan JenisTahapan
        return view('admin.buatKegiatan.create', compact('jenisKegiatan', 'jenisTahapan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = $request->validate([
            'jenis_kegiatans_id' => 'required',
            'tahun' => 'required|integer',
            'waktu_mulai_pelaksanaan' => 'required|date',
            'waktu_akhir_pelaksanaan' => 'required|date',
            'jenis_tahapans_id' => 'array',
            'tanggal_mulai' => 'array',
            'tanggal_selesai' => 'array',
            'show_in_tabs' => 'array'
        ]);

        DB::transaction(function () use ($request, $data) {
            $buatKegiatan = BuatKegiatan::create([
                'jenis_kegiatans_id' => $data['jenis_kegiatans_id'],
                'tahun' => $data['tahun'],
                'waktu_mulai_pelaksanaan' => $data['waktu_mulai_pelaksanaan'],
                'waktu_akhir_pelaksanaan' => $data['waktu_akhir_pelaksanaan'],
            ]);

            if (isset($data['jenis_tahapans_id'])) {
                foreach ($data['jenis_tahapans_id'] as $tahapanId) {
                    $showInTabs = in_array($tahapanId, $data['show_in_tabs'] ?? []) ? true : false;
                    TahapanKegiatan::create([
                        'buat_kegiatans_id' => $buatKegiatan->id,
                        'jenis_tahapans_id' => $tahapanId,
                        'tanggal_mulai' => $data['tanggal_mulai'][$tahapanId] ?? null,
                        'tanggal_selesai' => $data['tanggal_selesai'][$tahapanId] ?? null,
                        'show_in_tabs' => $showInTabs,
                    ]);
                }
            }
        });

        return redirect()->route('buatkegiatan.index');
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
        $buatKegiatan = BuatKegiatan::findOrFail($id);
        $jenisKegiatan = JenisKegiatan::all();
        $jenisTahapan = JenisTahapan::all();

        // Ambil data show_in_tabs dari database
        $showInTabs = $buatKegiatan->tahapanKegiatan->where('show_in_tabs', true)->pluck('jenis_tahapans_id')->toArray();
    
        return view('admin.buatKegiatan.edit', compact('buatKegiatan', 'jenisKegiatan', 'jenisTahapan', 'showInTabs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'jenis_kegiatans_id' => 'required',
            'tahun' => 'required|integer',
            'waktu_mulai_pelaksanaan' => 'required|date',
            'waktu_akhir_pelaksanaan' => 'required|date',
            'jenis_tahapans_id' => 'array',
            'tanggal_mulai' => 'array',
            'tanggal_selesai' => 'array',
            'show_in_tabs' => 'array'
        ]);

        DB::transaction(function () use ($request, $data, $id) {
            $buatKegiatan = BuatKegiatan::findOrFail($id);
            $buatKegiatan->update([
                'jenis_kegiatans_id' => $data['jenis_kegiatans_id'],
                'tahun' => $data['tahun'],
                'waktu_mulai_pelaksanaan' => $data['waktu_mulai_pelaksanaan'],
                'waktu_akhir_pelaksanaan' => $data['waktu_akhir_pelaksanaan'],
            ]);
        
            // Perbarui atau buat ulang tahapan
            if (isset($data['jenis_tahapans_id'])) {
                foreach ($data['jenis_tahapans_id'] as $tahapanId) {
                    $showInTabs = in_array($tahapanId, $data['show_in_tabs'] ?? []);
                    TahapanKegiatan::updateOrCreate(
                        [
                            'buat_kegiatans_id' => $buatKegiatan->id,
                            'jenis_tahapans_id' => $tahapanId,
                        ],
                        [
                            'tanggal_mulai' => $data['tanggal_mulai'][$tahapanId] ?? null,
                            'tanggal_selesai' => $data['tanggal_selesai'][$tahapanId] ?? null,
                            'show_in_tabs' => $showInTabs,
                        ]
                    );
                }
            }
        });

        return redirect()->route('buatkegiatan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $buatKegiatan = BuatKegiatan::findOrFail($id);
        DB::transaction(function () use ($buatKegiatan) {
            $buatKegiatan->tahapanKegiatan()->delete();
            $buatKegiatan->delete();
        });
        return redirect()->route('buatkegiatan.index');
    }
}
