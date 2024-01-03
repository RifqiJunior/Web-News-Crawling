<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>News Crawler</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('adm') }}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('adm') }}/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('adm') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('adm') }}/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('adm') }}/images/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
    <!-- aoslibrary -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @vite('resources/css/app.css')

</head>

<body>
    <!-- partial:partials/_navbar.html -->
    <div class="navbar bg-green text-white">
        <div class="navbar-start">
            <div class="dropdown">
                {{-- <label tabindex="0" class="btn btn-ghost lg:hidden">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
            </label> --}}
                <ul tabindex="0"
                    class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    <li class="nav-item"><a class="nav-link" href="/runpython">Berita terkini</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost normal-case text-xl text-bold" href="{{ route('halaman.index') }}"><img
                    src="{{ asset('/adm/images/bappeda.png') }}" alt="" width="50" height="50">
                <h1>News Crawler</h1>
            </a>
        </div>
        <div class="lg:flex">
            <ul class="menu menu-horizontal p-0">
                <li><a href="{{ route('halaman.index') }}">Buat Artikel</a></li>
                <li><a href="/runpython">Berita Terkini</a></li>
            </ul>
        </div>
        <div class="text-black">
            <div class="dropdown dropdown-end">
                <span class="nav-profile-name pr-2 text-white">{{ Auth::user()->name }}</span>
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="{{ asset('adm') }}/images/faces/{{ Auth::user()->avatar }}" alt="profile"" />
                    </div>
                </label>
                <ul data-aos="fade-in" tabindex="6"
                    class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-white rounded-box w-52">
                    {{-- <li data-aos="fadeDown">
                        <span class="nav-profile-name pr-2 text-bold">{{ Auth::user()->name }}</span>
                    </li> --}}
                    <li><a class="justify-between" href="{{ url('auth/logout') }}">
                            Logout
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- partial -->

    <!-- partial -->
    <div class="">
        @include('dashboard.pesan')
        <div class="">
            <div class="">

                {{-- index.blade yang halaman   --}}
                @yield('konten')

            </div>


        </div>

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer footer-center pt-3 bg-grey opacity-1 text-black">
            <div>
                <p> © Humas Bappeda Provinsi Jawa Barat 2022</p>
            </div>
        </footer>
        <!-- partial -->
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    </div>







    <!-- plugins:js -->
    <script src="{{ asset('adm') }}/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('adm') }}/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('adm') }}/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="{{ asset('adm') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('adm') }}/js/off-canvas.js"></script>
    <script src="{{ asset('adm') }}/js/hoverable-collapse.js"></script>
    <script src="{{ asset('adm') }}/js/template.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('adm') }}/js/dashboard.js"></script>
    <script src="{{ asset('adm') }}/js/data-table.js"></script>
    <script src="{{ asset('adm') }}/js/jquery.dataTables.js"></script>
    <script src="{{ asset('adm') }}/js/dataTables.bootstrap4.js"></script>
    <!-- End custom js for this page-->

    <script src="{{ asset('adm') }}/js/jquery.cookie.js" type="text/javascript"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.jd"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 200
            });
        });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
