<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    <link href="{{ asset('asset/vendor/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('asset/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar accordion" id="accordionSidebar" style="background: #3344E2; color:#fff;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand text-white d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-0">
                    <img src="{{ asset('asset/img/logo.png') }}" width="60">
                </div>
                <div class="sidebar-brand-text mx-2">Sistem Informasi PAUD </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('dashboard') }}">
                    <i class="fa fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed text-white" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder-open"></i>
                    <span>Menu Master</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item fas fa-door-open" href="{{ route('kelas.index') }}"> Data Kelas </a>
                        @hasanyrole('Admin|Guru')
                            <a class="collapse-item fas fa-chalkboard-teacher" href="{{ route('jabatan.index') }}"> Data
                                Jabatan </a>
                        @endhasanyrole
                        @role('Admin')
                            <a class="collapse-item fas fa-users" href="{{ route('user.index') }}"> Data User </a>
                        @endrole
                        <a class="collapse-item fas fa-user-cog"" href=" {{ route('guru.index') }}"> Data Guru </a>
                        <a class="collapse-item fas fa-user-graduate" href="{{ route('siswa.index') }}"> Data Siswa
                        </a>
                        {{-- <a class="collapse-item fas fa-users" href="{{ route('tahun-ajaran.index') }}"> Data Tahun
                            Ajaran
                        </a>
                        <a class="collapse-item fas fa-users" href="{{ route('jadwal.index') }}">Data Jadwal
                        </a>
                        <a class="collapse-item fas fa-users" href="{{ route('absensi.index') }}">Data Absensi
                        </a> --}}

                        {{-- <a class="collapse-item fas fa-arrow-circle-right" href="{{ route('barang_masuk.index') }}">
                            Barang masuk</a>
                        <a class="collapse-item fas fa-arrow-circle-left" href="{{ route('barang_rusak.index') }}">
                            Barang Rusak</a>
                        <a class="collapse-item fas fa-arrow-circle-left" href="{{ route('kondisi.index') }}">
                            Kondisi Barang</a>
                        <a class="collapse-item fas fa-door-open" href="{{ route('ruangan.index') }}">
                            <span>Ruangan</span></a> --}}
                        {{-- <a class="collapse-item fas fa-arrow-circle-right" href="#"> Sub Menu 4</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="#"> Sub Menu 5</a> --}}
                    </div>
                </div>
            </li>
            @hasanyrole('Admin|Guru')
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('tahun-ajaran.index') }}">
                        <i class="fa fa-calendar-alt"></i>
                        <span>Tahun Ajaran</span></a>
                </li>
            @endhasanyrole
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('jadwal.index') }}">
                    <i class="far fa-clock"></i>
                    <span>Jadwal</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('absensi.index') }}">
                    <i class="fas fa-book"></i>
                    <span>Absensi</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('raport.index') }}">
                    <i class="fas fa-book"></i>
                    <span>Raport</span></a>
            </li>
            {{-- @role('Admin')
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('user.index') }}">
                        <i class="fas fa-users"></i>
                        <span>Data Pengguna</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('pindah-barang.index') }}">
                        <i class="fas fa-external-link-alt"></i>
                        <span>Letak Barang</span></a>
                </li>
            @endrole --}}
            <!-- Nav Item - Pages Collapse Menu -->

            {{-- <li class="nav-item">
                <a class="nav-link collapsed text-white" href="{{ route('laporan.barang_masuk') }}"
                    data-toggle="collapse" data-target="#collapsePages1" aria-expanded="true"
                    aria-controls="collapsePages1">
                    <i class="far fa-file-pdf"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapsePages1" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{ route('laporan.barang_masuk') }}">
                            Barang Masuk</a>
                        <a class="collapse-item fas fa-arrow-circle-left" href="{{ route('laporan.barang_rusak') }}">
                            Barang Rusak</a>
                        <a class="collapse-item fas fa-calendar-check" href="{{ route('laporan.kondisi') }}">
                            Kondisi Barang</a>
                        <a class="collapse-item fas fas fa-map-marked-alt"
                            href="{{ route('laporan.letak-barang') }}">
                            Letak Barang</a>
                    </div>
                </div>
            </li> --}}

            <!-- Nav Item - Tables -->
            {{-- <li class="nav-item">
                <a class="nav-link text-white" href="/pengaturan/1">
                    <i class="fas fa-cog"></i>
                    <span>Pengaturan</span></a>
            </li> --}}


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <div class="input-group-append">
                                <h4>Sistem Informasi PAUD</h4>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle" src="{{ asset('asset/img/avatar2.png') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                {{-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div> --}}
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <!-- Page Heading -->
                    @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Create By: Me<br>Copyright &copy; Sistem Informasi PAUD. 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar aplikasi ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" apabila ingin keluar aplikasi</div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('asset/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('asset/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('asset/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('asset/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('asset/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('asset/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('asset/js/demo/datatables-demo.js') }}"></script>
    <script src="{{ asset('asset/vendor/select2/dist/js/select2.min.js') }}"></script>
    @yield('scripts')

</body>

</html>
