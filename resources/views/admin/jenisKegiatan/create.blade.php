@extends('admin.dashboard')

@section('app-content-header')   
<div class="app-content-header"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Jenis Kegiatan - Tambah</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Jenis Kegiatan
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
            <form action="{{ route('jeniskegiatan.store') }}" method="POST">
                @csrf
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="jenis_kegiatan" class="form-label">Jenis Kegiatan</label>
                            <input type="text" class="form-control" id="jenis_kegiatan" name="jenis_kegiatan">
                        </div>
                        <div class="mb-3">
                            <label for="kategori_kegiatan" class="form-label">Kategori Kegiatan</label>
                            <select class="form-select" id="kategori_kegiatans_id" name="kategori_kegiatans_id">
                                @foreach ($kategoriKegiatan as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!--end::Footer-->
                </div>
                <!-- /.card -->
            </form>
        </div> <!-- /.col -->
    </div> <!--end::Container-->
</div> <!--end::App Content-->
@endsection
           