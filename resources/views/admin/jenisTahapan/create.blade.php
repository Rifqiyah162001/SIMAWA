@extends('admin.dashboard')

@section('app-content-header')   
<div class="app-content-header"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Jenis Tahapan - Tambah</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Jenis Tahapan
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
                        <form action="{{ route('jenistahapan.store') }}" method="POST">
                            @csrf
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="nama_tahapan" class="form-label">Nama Tahapan</label>
                                        <input type="text" class="form-control" id="nama_tahapan" name="nama_tahapan">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" name="action" value="save" class="btn btn-primary">Simpan</button>
                                    <button type="submit" name="action" value="save_add" class="btn btn-warning">Simpan & Tambah Lainnya</button>
                                    <a href="{{ route('jenistahapan.index') }}" class="btn btn-secondary">Kembali</a>
                                </div>
                                <!--end::Footer-->
                            </div>
                            <!-- /.card -->
                        </form>
                    </div> <!-- /.col -->
                </div> <!--end::Container-->
            </div> <!--end::App Content-->
@endsection
           

        