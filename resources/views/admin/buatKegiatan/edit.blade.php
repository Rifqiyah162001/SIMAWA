@extends('admin.dashboard')

@section('app-content-header')
<div class="app-content-header"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Buat Kegiatan - Edit</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Buat Kegiatan
                    </li>
                </ol>
            </div>
        </div> <!--end::Row-->
    </div> <!--end::Container-->
</div> <!--end::App Content Header--> <!--begin::App Content-->
@endsection

@section('app-content')
<div class="app-content">
    <div class="container-fluid">
        <div class="col">
            <form action="{{ route('buatkegiatan.update', $buatKegiatan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card mb-4">
                    <div class="card-body">
                        <!-- field jenis kegiatan -->
                        <div class="mb-3">
                            <label for="jenis_kegiatan" class="form-label fw-bold">Jenis Kegiatan</label>
                            <select class="form-select" id="jenis_kegiatan" name="jenis_kegiatans_id">
                                @foreach ($jenisKegiatan as $jenis)
                                <option value="{{ $jenis->id }}" {{ $jenis->id == $buatKegiatan->jenis_kegiatans_id ? 'selected' : '' }}>{{ $jenis->jenis_kegiatan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- field tahun pelaksanaan -->
                        <div class="mb-3">
                            <label for="tahun" class="form-label fw-bold">Tahun Pelaksanaan</label>
                            <input type="number" class="form-control" id="tahun" name="tahun" value="{{ $buatKegiatan->tahun }}">
                        </div>
                        <!-- field waktu mulai -->
                        <div class="mb-3">
                            <label for="waktu_mulai" class="form-label fw-bold">Waktu Mulai Pelaksanaan</label>
                            <input type="date" class="form-control" id="waktu_mulai" name="waktu_mulai_pelaksanaan" value="{{ $buatKegiatan->waktu_mulai_pelaksanaan }}">
                        </div>
                        <!-- field waktu akhir -->
                        <div class="mb-3">
                            <label for="waktu_akhir" class="form-label fw-bold">Waktu Akhir Pelaksanaan</label>
                            <input type="date" class="form-control" id="waktu_akhir" name="waktu_akhir_pelaksanaan" value="{{ $buatKegiatan->waktu_akhir_pelaksanaan }}">
                        </div>
                        <!-- field jenis tahapan -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Jenis Tahapan</label>
                            @foreach ($jenisTahapan as $tahapan)
                            <div class="form-check-container">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="jenis_tahapans_id_{{ $tahapan->id }}" name="jenis_tahapans_id[]" value="{{ $tahapan->id }}"
                                    @if($buatKegiatan->tahapanKegiatan->pluck('jenis_tahapans_id')->contains($tahapan->id)) checked @endif>
                                    <label class="form-check-label" for="jenis_tahapans_id_{{ $tahapan->id }}">{{ $tahapan->nama_tahapan }}</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="show_in_tabs_{{ $tahapan->id }}" name="show_in_tabs[]" value="{{ $tahapan->id }}"
                                    @if($buatKegiatan->tahapanKegiatan->where('jenis_tahapans_id', $tahapan->id)->first() && $buatKegiatan->tahapanKegiatan->where('jenis_tahapans_id', $tahapan->id)->first()->show_in_tabs) checked @endif>
                                    <label class="form-check-label" for="show_in_tabs_{{ $tahapan->id }}">Tampilkan dalam Tabs</label>
                                </div>
                            </div>
                            <!-- field tanggal mulai & tanggal selesai tahapan -->
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="tanggal_mulai_{{ $tahapan->id }}" class="form-label">Tanggal Mulai</label>
                                    <input type="date" class="form-control tanggal_mulai" id="tanggal_mulai_{{ $tahapan->id }}" name="tanggal_mulai[{{ $tahapan->id }}]" value="{{ optional($buatKegiatan->tahapanKegiatan->where('jenis_tahapans_id', $tahapan->id)->first())->tanggal_mulai }}">
                                </div>
                                <div class="col">
                                    <label for="tanggal_selesai_{{ $tahapan->id }}" class="form-label">Tanggal Selesai</label>
                                    <input type="date" class="form-control tanggal_selesai" id="tanggal_selesai_{{ $tahapan->id }}" name="tanggal_selesai[{{ $tahapan->id }}]" value="{{ optional($buatKegiatan->tahapanKegiatan->where('jenis_tahapans_id', $tahapan->id)->first())->tanggal_selesai }}">
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('buatkegiatan.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end::App Content-->
@endsection

    {{-- script Checkbox untuk tahapan --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Mendapatkan semua elemen checkbox dengan class 'jenis_tahapan_checkbox'
            const checkboxes = document.querySelectorAll('.jenis_tahapan_checkbox');

            // Menambahkan event listener 'change' ke setiap checkbox, untuk deteksi checkbox dicentang atau tidak
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function () {

                     // Mendapatkan id jenis tahapan dari nilai checkbox
                    const tahapanId = this.value;

                    // Mendapatkan elemen input tanggal mulai dan tanggal selesai berdasarkan id jenis tahapan
                    const tanggalMulai = document.getElementById('tanggal_mulai_' + tahapanId);
                    const tanggalSelesai = document.getElementById('tanggal_selesai_' + tahapanId);

                    // Jika checkbox dicentang, aktifkan input tanggal
                    if (this.checked) {
                        tanggalMulai.disabled = false;
                        tanggalSelesai.disabled = false;
                    
                    // Jika checkbox tidak dicentang, nonaktifkan input tanggal
                    } else {
                        tanggalMulai.disabled = true;
                        tanggalSelesai.disabled = true;
                    }
                });
            });
        });
    </script>
    {{-- end script --}}

           
  