<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
          href="{{ asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/summernote/summernote-bs4.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary">Logout({{ Auth::user()->name ??  null }})</button>
                </form>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                </div>
                <div class="info">
                    <a href="{{ route('home') }}" class="d-block text-uppercase">{{ Auth::user()->name ?? null }}</a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('category.index') }}" class="nav-link">
                            <i class="nav-icon far fa fa-list-ol"></i>
                            <p>
                                Kategoriyalar
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('posts.index') }}" class="nav-link">
                            <i class="nav-icon far fa fa-newspaper"></i>
                            <p>
                                Yangiliklar
                            </p>
                        </a>
                    </li>
                  
                   <!--  <li class="nav-item">
                        <a href="{{ route('gcategory.index') }}" class="nav-link">
                            <i class="nav-icon far fa fa-list"></i>
                            <p>
                                Gallery Kategoriya
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('gallery.index') }}" class="nav-link">
                            <i class="nav-icon far fa fa-photo-video"></i>
                            <p>
                                Gallery
                            </p>
                        </a>
                    </li> -->
                   <!--  <li class="nav-item">
                        <a href="{{ route('event.index') }}" class="nav-link">
                            <i class="nav-icon far fa fa-calendar"></i>
                            <p>
                                Tadbirlar
                            </p>
                        </a>
                    </li> -->

                    <li class="nav-item">
                        <a href="{{ route('ads.index') }}" class="nav-link">
                            <i class="nav-icon far fa fa-tv"></i>
                            <p>
                                Reklama & Rolik
                            </p>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="{{ route('notification.index') }}" class="nav-link">
                            <i class="nav-icon far fa fa-address-card "></i>
                            <p>
                                E'lonlar
                            </p>
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a href="{{ route('videocat.index') }}" class="nav-link">
                            <i class="nav-icon far fa fa-list-ol"></i>
                            <p>
                                Video kategory
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('videos.index') }}" class="nav-link">
                            <i class="nav-icon far fa fa-video"></i>
                            <p>
                                Videos
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('staff.index') }}" class="nav-link">
                            <i class="nav-icon far fa fa-users "></i>
                            <p>
                                Xodimlar
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('management.index') }}" class="nav-link">
                            <i class="nav-icon far fa fa-users "></i>
                            <p>
                                Boshqaruv
                            </p>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="{{ route('calendar.index') }}" class="nav-link">
                            <i class="nav-icon far fa fa-calendar "></i>
                            <p>
                                Kalendar

                            </p>
                        </a>
                    </li> -->
                   <!--  <li class="nav-item">
                        <a href="{{ route('word.index') }}" class="nav-link">
                            <i class="nav-icon far fa fa-newspaper "></i>
                            <p>
                                Hikmatli so'zlar

                            </p>
                        </a>
                    </li> -->
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    @yield('content')
</div>


<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('backend/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('backend/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('backend/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('backend/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('backend/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('backend/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('backend/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('backend/dist/js/pages/dashboard.js') }}"></script>
</body>
</html>
