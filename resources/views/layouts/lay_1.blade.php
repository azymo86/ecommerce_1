<!DOCTYPE html>
<html>
<head>
  @include('component.head')
</head>
{{-- <body class="hold-transition sidebar-mini layout-navbar-fixed layout-footer-fixed sidebar-collapse"> --}}
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse">

<!-- Site wrapper -->
<div class="wrapper">

  @include('component.navbar')

  @include('component.sidebar_1')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-4 col-md-3 col-sm-2 col-xs-1"></div>
      <div class="col-lg-4 col-md-6 col-sm-8 col-xs-10">

        @yield('contents')

      </div>
      <div class="col-lg-4 col-md-3 col-sm-2 col-xs-1"></div>
    </div>
  </div>
  <!-- /.content-wrapper -->

  @include('component.footer_1')

</div>
<!-- ./wrapper -->
@include('component.script')
</body>
</html>
