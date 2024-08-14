@extends('admin.dashboard')

@section('app-content-header')
<div class="app-content-header"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Jenis Tahapan - Detail</h3>
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
<div class="app-content"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Row-->
        <div class="col">
            <form>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="id_tahapan" class="form-label">Id Jenis Tahapan</label>
                            <input type="text" class="form-control" id="id_tahapan" value="{{ $jenisTahapan->id }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="nama_tahapan" class="form-label">Nama Tahapan</label>
                            <input type="text" class="form-control" id="nama_tahapan" value="{{ $jenisTahapan->nama_tahapan }}" disabled>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('jenistahapan.index') }}" class="btn btn-primary">Kembali ke Daftar</a>
                    </div>
                </div>
            </form>
        </div> <!-- /.col -->
    </div> <!--end::Container-->
</div> <!--end::App Content-->
@endsection
