@extends('admin.dashboard')

@section('app-content-header')
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Kategori Kegiatan - Edit</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Kategori Kegiatan
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
                       <form action="{{ route('kategorikegiatan.update', $kategoriKegiatan->id) }}" method="POST">
                           @csrf
                           @method('PUT')
                           <div class="card mb-4">
                               <div class="card-body">
                                   <div class="mb-3">
                                       <label for="nama_kategori" class="form-label">Nama Kategori Kegiatan</label>
                                       <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ $kategoriKegiatan->nama_kategori }}">
                                   </div>
                               </div>
                               <div class="card-footer">
                                   <button type="submit" class="btn btn-primary">Update</button>
                                   <a href="{{ route('kategorikegiatan.index') }}" class="btn btn-secondary">Kembali</a>
                               </div>
                           </div>
                       </form>
                   </div> <!-- /.col -->
               </div> <!--end::Container-->
           </div> <!--end::App Content-->  
@endsection
    