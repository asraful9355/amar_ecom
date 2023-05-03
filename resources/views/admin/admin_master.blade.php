<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="  {{ asset('backend/images/favicon.ico') }}">
    <!-- Toastr css  er jnne-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <title>Easy Ecommerce Admin - Dashboard</title>


	<!-- Vendors Style-->
	<link rel="stylesheet" href="  {{ asset('backend/css/vendors_css.css') }}">

	<!-- Style-->
	<link rel="stylesheet" href="  {{ asset('backend/css/style.css') }}">
	<link rel="stylesheet" href="  {{ asset('backend/css/skin_color.css') }}">
    <!-- toastr er jonne -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

  </head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

<div class="wrapper">

 @include('admin.body.header')

  <!-- Left side column. contains the logo and sidebar -->
 @include('admin.body.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  @yield('admin')





  </div>
  <!-- /.content-wrapper -->
  @include('admin.body.footer ')



  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->


	<!-- Vendor JS -->
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <!-- Toastr js  er jonne-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
	<script src=" {{ asset('backend/js/vendors.min.js') }}"></script>
    <script src="	{{ asset('../assets/icons/feather-icons/feather.min.js') }}"></script>
	<script src="	{{ asset('../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js') }}"></script>
	<script src="	{{ asset('../assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>
	<script src="	{{ asset('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>

	<!-- Sunny Admin App -->
	<script src=" {{ asset('backend/js/template.js') }}"></script>
	<script src=" {{ asset('backend/js/pages/dashboard.js') }}"></script>
                 {{-- toastr er jonne --}}
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}


</body>
</html>
