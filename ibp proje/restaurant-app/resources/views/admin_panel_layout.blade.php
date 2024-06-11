<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed dark-mode" data-panel-auto-height-mode="height">
<div class="wrapper">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                </button>
              </div>
            </div>
          </div>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('logout')}}" class="nav-link">Çıkış Yap</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->


      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- SidebarSearch Form -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('addUser')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Müşteri Ekle</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('updateUser')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Müşteri Güncelle</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('deleteUser')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Müşteri Sil</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('showAllUsers')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Tüm Müşteriler</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('addRestaurant')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Mağaza Ekle</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('updateRestaurant')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Mağaza Güncelle</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('deleteRestaurant')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Mağaza Kaldır</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('showAllRestaurants')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Tüm Mağazalar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('addAnnouncement')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Rapor Ekle</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('editLastAnnouncement')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Son Raporu Düzenle</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('showAllAnnouncements')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Tüm Raporlar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('messages')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>İletişim</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper bg-dark" data-auto-dark-mode="true">
  <div class="tab-content">
    @yield('form')
    </div>
  </div>
    <!-- /.content-wrapper -->
  <footer class="main-footer dark-mode">
    <strong>&copy;Necmican Sayraç</strong>
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
</body>
</html>
