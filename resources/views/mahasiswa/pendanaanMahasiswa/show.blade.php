<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>SIMAWA UNJA</title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE v4 | Dashboard">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"><!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous"><!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous"><!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous"><!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{asset('AdminLTE4/dist/css/adminlte.css')}}"><!--end::Required Plugin(AdminLTE)--><!-- apexcharts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css" integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous"><!-- jsvectormap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css" integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous">
     <!-- Select2 CSS -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
     <!-- Select2 JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head> <!--end::Head--> <!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> <!--begin::App Wrapper-->
    <div class="app-wrapper"> <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Start Navbar Links-->
                <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi bi-list"></i> </a> </li>
                </ul> <!--end::Start Navbar Links--> <!--begin::End Navbar Links-->
                
                <ul class="navbar-nav ms-auto"> <!--begin::Navbar Search-->
                    <li class="nav-item"> <a class="nav-link" data-widget="navbar-search" href="#" role="button"> <i class="bi bi-search"></i> </a> </li> <!--end::Navbar Search--> <!--begin::Messages Dropdown Menu-->
                    <li class="nav-item dropdown"> <a class="nav-link" data-bs-toggle="dropdown" href="#"> <i class="bi bi-chat-text"></i> <span class="navbar-badge badge text-bg-danger">3</span> </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <a href="#" class="dropdown-item"> <!--begin::Message-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0"> <img src="{{asset('AdminLTE4/dist/assets/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 rounded-circle me-3"> </div>
                                    <div class="flex-grow-1">
                                        <h3 class="dropdown-item-title">
                                            Brad Diesel
                                            <span class="float-end fs-7 text-danger"><i class="bi bi-star-fill"></i></span>
                                        </h3>
                                        <p class="fs-7">Call me whenever you can...</p>
                                        <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                        </p>
                                    </div>
                                </div> <!--end::Message-->
                            </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <!--begin::Message-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0"> <img src="{{asset('AdminLTE4/dist/assets/img/user4-128x128.jpg')}}" alt="User Avatar" class="img-size-50 rounded-circle me-3"> </div>
                                    <div class="flex-grow-1">
                                        <h3 class="dropdown-item-title">
                                            John Pierce
                                            <span class="float-end fs-7 text-secondary"> <i class="bi bi-star-fill"></i> </span>
                                        </h3>
                                        <p class="fs-7">I got your message bro</p>
                                        <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                        </p>
                                    </div>
                                </div> <!--end::Message-->
                            </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <!--begin::Message-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0"> <img src="{{asset('AdminLTE4/dist/assets/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 rounded-circle me-3"> </div>
                                    <div class="flex-grow-1">
                                        <h3 class="dropdown-item-title">
                                            Nora Silvester
                                            <span class="float-end fs-7 text-warning"> <i class="bi bi-star-fill"></i> </span>
                                        </h3>
                                        <p class="fs-7">The subject goes here</p>
                                        <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                        </p>
                                    </div>
                                </div> <!--end::Message-->
                            </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li> <!--end::Messages Dropdown Menu--> <!--begin::Notifications Dropdown Menu-->
                    <li class="nav-item dropdown"> <a class="nav-link" data-bs-toggle="dropdown" href="#"> <i class="bi bi-bell-fill"></i> <span class="navbar-badge badge text-bg-warning">15</span> </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i class="bi bi-envelope me-2"></i> 4 new messages
                                <span class="float-end text-secondary fs-7">3 mins</span> </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i class="bi bi-people-fill me-2"></i> 8 friend requests
                                <span class="float-end text-secondary fs-7">12 hours</span> </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                                <span class="float-end text-secondary fs-7">2 days</span> </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item dropdown-footer">
                                See All Notifications
                            </a>
                        </div>
                    </li> <!--end::Notifications Dropdown Menu--> <!--begin::Fullscreen Toggle-->
                    <li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i> <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i> </a> </li> <!--end::Fullscreen Toggle--> <!--begin::User Menu Dropdown-->
                    <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <img src="{{asset('AdminLTE4/dist/assets/img/user8-128x128.jpg')}}" class="user-image rounded-circle shadow" alt="User Image"> <span class="d-none d-md-inline"> {{auth()->user()->username}}</span> </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
                            <li class="user-header text-bg-primary"> <img src="{{asset('AdminLTE4/dist/assets/img/user8-128x128.jpg')}}" class="rounded-circle shadow" alt="User Image">
                                <p>
                                    {{auth()->user()->username}}
                                    <small>{{auth()->user()->role}}</small>
                                </p>
                            </li> <!--end::User Image--> <!--begin::Menu Footer-->
                            <li class="user-footer"> <a href="#" class="btn btn-default btn-flat">Profile</a> <a href="{{route('logout')}}" class="btn btn-default btn-flat float-end">Sign out</a> </li> <!--end::Menu Footer-->
                        </ul>
                    </li> <!--end::User Menu Dropdown-->
                </ul> <!--end::End Navbar Links-->
            </div> <!--end::Container-->
        </nav> <!--end::Header--> 
        <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body shadow" data-bs-theme="light"> <!--begin::Sidebar Brand-->
            <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="./index.html" class="brand-link"> <!--begin::Brand Image--> <img src="{{asset('images/logo.png')}}" alt="SIMAWA Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">SIMAWA UNJA</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2"> <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                        <li class="nav-item"> <a href="mahasiswa" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i>
                            <p>Dashboard</p>
                        </a> </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                                <p>
                                    Rekam Kegiatan
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="./widgets/small-box.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Kompetisi</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="pendanaanmahasiswa" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Pendanaan</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./widgets/info-box.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Prestasi Mahasiswa</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-clipboard-fill"></i>
                                <p>
                                   Beasiswa
                                   <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="./layout/unfixed-sidebar.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Data Beasiswa</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="listBeasiswaMahasiswa" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Daftar Beasiswa</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./layout/fixed-complete.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Surat</p>
                                    </a> </li>
                            </ul>
                        </li>
                    </ul> <!--end::Sidebar Menu-->
                </nav>
            </div> <!--end::Sidebar Wrapper-->
        </aside> <!--end::Sidebar--> <!--begin::App Main-->
        <main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Usulan Pendanaan</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Usulan Pendanaan
                                </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header--> <!--begin::App Content-->
            <div class="app-content"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="col">
                        <div class="card mb-4">
                            <div class="card-body">
                                {{-- Notif Pesan Sukses --}}
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                {{-- Tabs untuk tahapan kegiatan --}}
                                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                                    @foreach ($buatKegiatan->tahapanKegiatan as $index => $tahapan)
                                        @if (in_array($tahapan->jenis_tahapans_id, $showInTabs))
                                            @php
                                                // Mendapatkan tanggal saat ini
                                                $currentDate = date('Y-m-d');
                                                // Memeriksa apakah tahapan saat ini sedang aktif berdasarkan rentang tanggal_mulai dan tanggal_selesai
                                                $isCurrent = $tahapan->tanggal_mulai <= $currentDate && $currentDate <= $tahapan->tanggal_selesai;
                                                // Memeriksa apakah tab yang aktif adalah tab 'Penerimaan Proposal'
                                                $isActive = request()->get('tab') == 'penerimaan_proposal' && $tahapan->jenisTahapan->nama_tahapan == 'Penerimaan Proposal';
                                            @endphp
                                            {{-- Tab item --}}
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link {{ $isActive ? 'active' : ($index == 0 ? 'active' : '') }}" id="tab-{{ $tahapan->id }}" data-bs-toggle="tab" href="#tahapan-{{ $tahapan->id }}" role="tab" aria-controls="tahapan-{{ $tahapan->id }}" aria-selected="{{ $isActive ? 'true' : ($index == 0 ? 'true' : 'false') }}">
                                                    {{ $tahapan->jenisTahapan->nama_tahapan }}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
            
                                {{-- begin tab content --}}
                                <div class="tab-content" id="myTabContent">
                                    @foreach ($buatKegiatan->tahapanKegiatan as $index => $tahapan)
                                        @if (in_array($tahapan->jenis_tahapans_id, $showInTabs))
                                            @php
                                                $isActive = request()->get('tab') == 'penerimaan_proposal' && $tahapan->jenisTahapan->nama_tahapan == 'Penerimaan Proposal';
                                            @endphp
                                            {{-- Konten tab item --}}
                                            <div class="tab-pane fade {{ $isActive ? 'show active' : ($index == 0 ? 'show active' : '') }}" id="tahapan-{{ $tahapan->id }}" role="tabpanel" aria-labelledby="tab-{{ $tahapan->id }}">
                                                @if ($tahapan->jenisTahapan->nama_tahapan == 'Penerimaan Proposal')
                                                <p class="mt-3 fst-italic">*Silahkan isi form di bawah ini dengan benar*</p>
                                                    @if ($proposalUser)
                                                        <!-- Form update proposal -->
                                                        <form action="{{ route('proposal.update', $proposalUser->id) }}" method="POST" enctype="multipart/form-data" @if(!$isCurrent) disabled @endif>
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="tahapan_kegiatans_id" value="{{ $tahapan->id }}">
                                                            <input type="hidden" name="buat_kegiatans_id" value="{{ $buatKegiatan->id }}">
            
                                                            <!-- Field judul proposal -->
                                                            <div class="mb-3">
                                                                <label for="judul_proposal" class="form-label fw-bold">Judul Proposal</label>
                                                                <input type="text" class="form-control" id="judul_proposal" name="judul_proposal" value="{{ $proposalUser->judul_proposal }}" required>
                                                            </div>
                                                            <!-- Field kategori usaha -->
                                                            <div class="mb-3">
                                                                <label for="kategori_usaha" class="form-label fw-bold">Kategori Usaha</label>
                                                                <select class="form-select" id="kategori_usaha" name="kategori_usaha" required>
                                                                    <option value="0">Pilih Bidang Usaha</option>
                                                                    <option value="1" {{ $proposalUser->kategori_usaha == '1' ? 'selected' : '' }}>Kuliner</option>
                                                                    <option value="2" {{ $proposalUser->kategori_usaha == '2' ? 'selected' : '' }}>Budidaya</option>
                                                                    <option value="3" {{ $proposalUser->kategori_usaha == '3' ? 'selected' : '' }}>Ekonomi Kreatif</option>
                                                                    <option value="4" {{ $proposalUser->kategori_usaha == '4' ? 'selected' : '' }}>Obat dan Herbal</option>
                                                                    <option value="5" {{ $proposalUser->kategori_usaha == '5' ? 'selected' : '' }}>Teknologi Informasi</option>
                                                                    <option value="6" {{ $proposalUser->kategori_usaha == '6' ? 'selected' : '' }}>Jasa dan Perdagangan</option>
                                                                </select>
                                                            </div>
                                                            
                                                            <!-- Field Nama Ketua -->
                                                            <div class="mb-3">
                                                                <label for="ketua_tim" class="form-label fw-bold">Ketua Tim</label>
                                                                <select class="form-select" id="ketua_tim" name="ketua_tim" required>
                                                                    @foreach ($mahasiswa as $mhs)
                                                                        <option value="{{ $mhs->id }}" {{ $proposalUser->ketua_tim == $mhs->id ? 'selected' : '' }}>{{ $mhs->username }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <!-- Field No Hp Ketua -->
                                                            <div class="mb-3">
                                                                <label for="nomor_hp_ketua" class="form-label fw-bold">Nomor HP Ketua</label>
                                                                <input type="text" class="form-control" id="nomor_hp_ketua" name="nomor_hp_ketua" value="{{ $proposalUser->nomor_hp_ketua }}" required>
                                                            </div>
                                                            <!-- Field email ketua -->
                                                            <div class="mb-3">
                                                                <label for="email_ketua" class="form-label fw-bold">Email Ketua</label>
                                                                <input type="email" class="form-control" id="email_ketua" name="email_ketua" value="{{ $proposalUser->email_ketua }}" required>
                                                            </div>
                                                            {{-- Field anggota mengambil dari data user mahasiswa --}}
                                                            <div class="mb-3">
                                                                <label class="form-label fw-bold">Anggota Tim</label>
                                                                <div class="row">
                                                                    @foreach ($proposalUser->anggotaTim as $anggota)
                                                                        <div class="col-md-3">
                                                                            <label for="anggota{{ $anggota->id }}" class="form-label">Anggota {{ $loop->iteration }}</label>
                                                                            <select class="form-select" id="anggota{{ $anggota->id }}" name="anggota_tim[]" required>
                                                                                <option value="0">--Pilih Anggota Tim--</option>
                                                                                @foreach ($mahasiswa as $mhs)
                                                                                    <option value="{{ $mhs->id }}" {{ $anggota->id == $mhs->id ? 'selected' : '' }}>{{ $mhs->username }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            {{-- Field dosen pembimbing dari data user dosen --}}
                                                            <div class="mb-3">
                                                                <label for="dosen_pembimbing" class="form-label fw-bold">Dosen Pembimbing</label>
                                                                <select class="form-select" id="dosen_pembimbing" name="dosen_pembimbing" required>
                                                                    <option value="0">--Pilih Dosen Pembimbing--</option>
                                                                    @foreach ($dosen as $dsn)
                                                                        <option value="{{ $dsn->id }}" {{ $proposalUser->dosen_pembimbing == $dsn->id ? 'selected' : '' }}>{{ $dsn->username }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <!-- Field upload proposal -->
                                                            <div class="mb-3">
                                                                <label for="proposal" class="form-label fw-bold">Upload Proposal</label>
                                                                <input type="file" class="form-control" id="proposal" name="proposal">
                                                                <small>File saat ini: {{ $proposalUser->proposal_path }}</small>
                                                            </div>
            
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <button type="submit" class="btn btn-primary">Update Proposal</button>
                                                            </div>
                                                        </form>
                                                    @else
                                                        <!-- Form input proposal baru -->
                                                        <form action="{{ route('proposal.store') }}" method="POST" enctype="multipart/form-data" @if(!$isCurrent) disabled @endif>
                                                            @csrf
                                                            <input type="hidden" name="tahapan_kegiatans_id" value="{{ $tahapan->id }}">
                                                            <input type="hidden" name="buat_kegiatans_id" value="{{ $buatKegiatan->id }}">
                                                            <!-- Field judul proposal -->
                                                            <div class="mb-3">
                                                                <label for="judul_proposal" class="form-label fw-bold">Judul Proposal</label>
                                                                <input type="text" class="form-control" id="judul_proposal" name="judul_proposal" required>
                                                            </div>
                                                            <!-- Select kategori usaha -->
                                                            <div class="mb-3">
                                                                <label for="kategori_usaha" class="form-label fw-bold">Kategori Usaha</label>
                                                                <select class="form-select" id="kategori_usaha" name="kategori_usaha" required>
                                                                    <option value="0">Pilih Bidang Usaha</option>
                                                                    <option value="1">Kuliner</option>
                                                                    <option value="2">Budidaya</option>
                                                                    <option value="3">Ekonomi Kreatif</option>
                                                                    <option value="4">Obat dan Herbal</option>
                                                                    <option value="5">Teknologi Informasi</option>
                                                                    <option value="6">Jasa dan Perdagangan</option>
                                                                </select>
                                                            </div>
                                                            <!-- Field Ketua Tim-->
                                                            <div class="mb-3">
                                                                <label for="ketua_tim" class="form-label fw-bold">Ketua Tim</label>
                                                                <select class="form-select" id="ketua_tim" name="ketua_tim" required>
                                                                    @foreach ($mahasiswa as $mhs)
                                                                        <option value="{{ $mhs->id }}">{{ $mhs->username }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <!-- Field No Hp Ketua -->
                                                            <div class="mb-3">
                                                                <label for="nomor_hp_ketua" class="form-label fw-bold">Nomor HP Ketua</label>
                                                                <input type="text" class="form-control" id="nomor_hp_ketua" name="nomor_hp_ketua" required>
                                                            </div>
                                                            <!-- Field email ketua -->
                                                            <div class="mb-3">
                                                                <label for="email_ketua" class="form-label fw-bold">Email Ketua</label>
                                                                <input type="email" class="form-control" id="email_ketua" name="email_ketua" required>
                                                            </div>
                                                            {{-- Field anggota mengambil dari data user mahasiswa --}}
                                                            <div class="mb-3">
                                                                <label class="form-label fw-bold">Anggota Tim</label>
                                                                <div class="row">
                                                                    @foreach (range(1, 4) as $i)
                                                                        <div class="col-md-3">
                                                                            <label for="anggota{{ $i }}" class="form-label">Anggota {{ $i }}</label>
                                                                            <select class="form-select" id="anggota{{ $i }}" name="anggota_tim[]" required>
                                                                                <option value="0">--Pilih Anggota Tim--</option>
                                                                                @foreach ($mahasiswa as $mhs)
                                                                                    <option value="{{ $mhs->id }}">{{ $mhs->username }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            {{-- Field dosen pembimbing dari data user dosen --}}
                                                            <div class="mb-3">
                                                                <label for="dosen_pembimbing" class="form-label fw-bold">Dosen Pembimbing</label>
                                                                <select class="form-select" id="dosen_pembimbing" name="dosen_pembimbing" required>
                                                                    <option value="0">--Pilih Dosen Pembimbing--</option>
                                                                    @foreach ($dosen as $dsn)
                                                                        <option value="{{ $dsn->id }}">{{ $dsn->username }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <!-- Field upload proposal -->
                                                            <div class="mb-3">
                                                                <label for="proposal" class="form-label fw-bold">Upload Proposal</label>
                                                                <input type="file" class="form-control" id="proposal" name="proposal" required>
                                                            </div>
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <button class="btn btn-primary">Upload File Proposal</button>
                                                            </div>
                                                        </form>
                                                    @endif
                                                @elseif ($tahapan->jenisTahapan->nama_tahapan == 'Seleksi Awal Proposal')
                                                @if ($proposalUser)
                                                    <p>Status Proposal: <strong>{{ ucfirst($proposalUser->status_pengajuan) }}</strong></p>
                                                @else
                                                    <p>Belum ada proposal yang diajukan.</p>
                                                @endif
                                                @elseif ($tahapan->jenisTahapan->nama_tahapan == 'Tambah Laporan Akhir Program')
                                                <form action="#" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="laporan" class="form-label">Tambah Laporan Akhir</label>
                                                        <textarea class="form-control" id="laporan" name="laporan" rows="3"></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Tambah Laporan</button>
                                                    </form>
                                                @endif
            
                                                {{-- Navigasi antar tahapan --}}
                                                <div class="d-flex justify-content-between mt-5">
                                                    @if ($index > 0)
                                                        <button class="btn btn-light" onclick="showTab('{{ $buatKegiatan->tahapanKegiatan[$index - 1]->id }}')">Kembali</button>
                                                    @else
                                                        <div></div> <!-- Placeholder untuk menjaga agar tombol "Lanjut" tetap di sisi kanan -->
                                                    @endif
            
                                                    @php
                                                        $nextTahapan = $buatKegiatan->tahapanKegiatan[$index + 1] ?? null;
                                                        $nextIsCurrent = $nextTahapan && $nextTahapan->tanggal_mulai <= $currentDate && $currentDate <= $nextTahapan->tanggal_selesai;
                                                    @endphp
                                                    
                                                    @if ($nextTahapan)
                                                        <button class="btn btn-warning" onclick="showTab('{{ $nextTahapan->id }}')" {{ $nextIsCurrent ? '' : 'disabled' }}>Lanjut</button>
                                                    @else
                                                        <div></div> <!-- Placeholder untuk menjaga agar tombol "Lanjut" tetap di sisi kanan -->
                                                    @endif
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div> <!-- /.end tab content -->
                            </div>
                        </div>
                    </div> <!-- /.col -->
                </div> <!--end::Container-->
            </div> <!--end::App Content-->
            
        </main> <!--end::App Main--> <!--begin::Footer-->
        <footer class="app-footer"> <!--begin::To the end-->
            <div class="float-end d-none d-sm-inline">SIMAWA UNJA</div> <!--end::To the end--> <!--begin::Copyright--> <strong>
                Copyright &copy; 2024&nbsp;
                <a href="#" class="text-decoration-none">Universitas Jambi</a>.
            </strong>
            All rights reserved.
            <!--end::Copyright-->
        </footer> <!--end::Footer-->
    </div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script> <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script> <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{asset('AdminLTE4/dist/js/adminlte.js')}}"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->

    <script>
        function showTab(tahapanId) {
            var tabElement = document.getElementById('tab-' + tahapanId);
            if (tabElement) {
                var tabTrigger = new bootstrap.Tab(tabElement);
                tabTrigger.show();
            }
        }

        // Disable tabs that are not in the current date range
        document.addEventListener('DOMContentLoaded', function () {
            var tabs = document.querySelectorAll('.nav-link.disabled');
            tabs.forEach(function (tab) {
                tab.addEventListener('click', function (event) {
                    event.preventDefault();
                });
            });

            // Show the content of the first tab on load
            var firstTab = document.querySelector('.nav-link.active');
            if (firstTab) {
                var firstTabTrigger = new bootstrap.Tab(firstTab);
                firstTabTrigger.show();
            }
        });
    </script>

    <script>
        // Menambahkan event listener yang akan dipanggil setelah seluruh konten halaman dimuat
        document.addEventListener('DOMContentLoaded', function () {
            // Mendapatkan parameter URL
            var urlParams = new URLSearchParams(window.location.search);
            // Mengambil nilai parameter 'tab' dari URL
            var activeTab = urlParams.get('tab');

            // Jika ada nilai parameter 'tab'
            if (activeTab) {
                // Mencari elemen tab berdasarkan nilai parameter 'tab'
                var tabElement = document.querySelector('a[href="#' + activeTab + '"]');
                // Jika elemen tab ditemukan
                if (tabElement) {
                    // Membuat instance Bootstrap Tab dan menampilkan tab tersebut
                    var tab = new bootstrap.Tab(tabElement);
                    tab.show();
                }
            }
        });
    </script>



    {{-- script search pada dropdown --}}
    <script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "Pilih Kategori Usaha",
            allowClear: true
        });
    });
    </script>

    <script>
        const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
        const Default = {
            scrollbarTheme: "os-theme-light",
            scrollbarAutoHide: "n",
            scrollbarClickScroll: true,
        };
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (
                sidebarWrapper &&
                typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
            ) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script> <!--end::OverlayScrollbars Configure-->
</body><!--end::Body-->

</html>


