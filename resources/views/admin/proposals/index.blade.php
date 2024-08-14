@extends('admin.dashboard')

@section('app-content-header')
<div class="app-content-header"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Pendanaan Admin</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Pendanaan Admin
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

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">No.</th>
                                <th>Jenis Kegiatan</th>
                                <th>Judul Proposal</th>
                                <th>Kategori Usaha</th>
                                <th>Ketua Tim</th>
                                <th>Anggota Tim</th>
                                <th>Dosen Pembimbing</th>
                                <th>File Proposal</th>
                                <th>Status Pengajuan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp {{-- Inisialisasi nomor urut --}}
                        @foreach ($proposals as $proposal)
                            <tr>
                                <td>{{ $no++ }}</td> {{-- Increment nomor urut --}}
                                <td>{{ $proposal->buatKegiatan->jenisKegiatan->jenis_kegiatan }}</td>
                                <td>{{ $proposal->judul_proposal }}</td>
                                <td>{{ $kategoriUsaha[$proposal->kategori_usaha]  }}</td>
                                <td>{{ $proposal->ketuaTim->username }}</td>
                                <td>
                                    <ul>
                                        @foreach ($proposal->anggotaTim as $anggota)
                                            <li>{{ $anggota->username }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>{{ $proposal->dosenPembimbing->username }}</td>
                                <td>
                                    {{-- Proposal ny msih error, blm bs diliat --}}
                                    @if ($proposal->proposal_path)
                                        <a href="{{ asset('storage/app/' . $proposal->proposal_path) }}" target="_blank" class="btn btn-info btn-sm">Lihat Proposal</a>
                                    @else
                                        <span>Tidak ada file</span>
                                    @endif
                                </td>
                                <td>{{ ucfirst($proposal->status_pengajuan) }}</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">Detail</a>
                                    @if ($proposal->status_pengajuan == 'proses')
                                        <form action="{{ route('admin.proposals.updateStatus', $proposal->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            <input type="hidden" name="status_pengajuan" value="disetujui">
                                            <button type="submit" class="btn btn-success btn-sm">Setujui</button>
                                        </form>
                                        <form action="{{ route('admin.proposals.updateStatus', $proposal->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            <input type="hidden" name="status_pengajuan" value="ditolak">
                                            <button type="submit" class="btn btn-danger btn-sm">Tolak</button>
                                        </form>
                                    @else
                                        <span>{{ ucfirst($proposal->status_pengajuan) }}</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
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
