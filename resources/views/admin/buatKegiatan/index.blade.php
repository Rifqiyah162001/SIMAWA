@extends('admin.dashboard')

@section('app-content-header')
<div class="app-content-header"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Buat Kegiatan</h3>
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
</div> <!--end::App Content Header--> 
@endsection

@section('app-content')
<!--begin::App Content-->
<div class="app-content"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Row-->
        <div class="col">
            <div class="card mb-4">
                <div class="card-header">
                    <a href="{{url('buatkegiatan/create')}}" class="btn btn-primary text-light"><i class="bi bi-plus"></i> Tambah Data</a>
                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                            <div class="input-group-btn">
                              <button type="submit" class="btn btn-default"><i class="bi bi-search"></i></button>
                            </div>
                          </div>
                    </div>
                </div> <!-- /.card-header -->
                <div class="card-body">
                    @if ($buatKegiatan->isEmpty())
                        <p>Tidak ada kegiatan yang tersedia.</p>
                    @else                              
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">No.</th>
                                <th>Jenis Kegiatan</th>
                                <th>Tahun Pelaksanaan</th>
                                <th>Waktu Mulai Pelaksanaan</th>
                                <th>Waktu Akhir Pelaksanaan</th>
                                <th>Tahapan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp {{-- Inisialisasi nomor urut --}}
                        @foreach ($buatKegiatan as $kegiatan)                              
                            <tr class="align-middle">
                            <td>{{ $no++ }}</td> {{-- Increment nomor urut --}}
                            <td>{{ $kegiatan->jenisKegiatan->jenis_kegiatan }}</td>
                            <td>{{ $kegiatan->tahun }}</td>
                            <td>{{ $kegiatan->waktu_mulai_pelaksanaan }}</td>
                            <td>{{ $kegiatan->waktu_akhir_pelaksanaan }}</td>
                            <td>
                                @foreach ($kegiatan->tahapanKegiatan as $tahapan)
                                    <div>
                                        <strong>{{ $tahapan->jenisTahapan->nama_tahapan }}:</strong> 
                                        ({{ $tahapan->tanggal_mulai }}) - ({{ $tahapan->tanggal_selesai }})
                                    </div>
                                @endforeach
                            </td>
                            <td>
                                <div class="container buttons-inline">
                                    <a href="{{ route('buatkegiatan.edit', $kegiatan->id) }}" class="btn btn-warning text-light" style="margin-right: 10px"><i class="bi bi-pencil-square"></i> Edit</a>
                                    <form onsubmit="return confirm('Yakin akan menghapus data?')" action="{{ route('buatkegiatan.show', $kegiatan->id) }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" name="submit" class="btn btn-danger"><i class="bi bi-trash3"></i> Hapus</button>
                                    </form>
                                </div>     
                            </td> 
                            </tr>
                        @endforeach
                    
                        </tbody>
                        </table>
                    @endif
                </div> <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-end">
                        <li class="page-item"> <a class="page-link" href="#">&laquo;</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">&raquo;</a> </li>
                    </ul>
                </div>
            </div> <!-- /.card -->
        </div> <!-- /.col -->
        
    </div> <!--end::Container-->
</div> <!--end::App Content-->
@endsection


