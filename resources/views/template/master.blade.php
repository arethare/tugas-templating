<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="{{ asset('pluto/images/fevicon.png') }}" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('pluto/css/bootstrap.min.css') }}" />
      <!-- site css -->
      <link rel="stylesheet" href="{{ asset('pluto/style.css') }}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{ asset('pluto/css/responsive.css') }}" />
      <!-- color css -->
      <link rel="stylesheet" href="{{ asset('pluto/css/colors.css') }}" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{ asset('pluto/css/bootstrap-select.css') }}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{ asset('pluto/css/perfect-scrollbar.css') }}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{ asset('pluto/css/custom.css') }}" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            @include('template.components.sidebar')
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
            <!-- topbar -->
            @include('template.components.navbar')
            <!-- end topbar -->
            <!-- dashboard inner -->
               @yield('content')
               @include('template.components.footer')
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="{{ asset('pluto/js/jquery.min.js') }}"></script>
      <script src="{{ asset('pluto/js/popper.min.js') }}"></script>
      <script src="{{ asset('pluto/js/bootstrap.min.js') }}"></script>
      <!-- wow animation -->
      <script src="{{ asset('pluto/js/animate.js') }}"></script>
      <!-- select country -->
      <script src="{{ asset('pluto/js/bootstrap-select.js') }}"></script>
      <!-- owl carousel -->
      <script src="{{ asset('pluto/js/owl.carousel.js') }}"></script> 
      <!-- chart js -->
      <script src="{{ asset('pluto/js/Chart.min.js') }}"></script>
      <script src="{{ asset('pluto/js/Chart.bundle.min.js') }}"></script>
      <script src="{{ asset('pluto/js/utils.js') }}"></script>
      <script src="{{ asset('pluto/js/analyser.js') }}"></script>
      <!-- nice scrollbar -->
      <script src="{{ asset('pluto/js/perfect-scrollbar.min.js') }}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{ asset('pluto/js/custom.js') }}"></script>
      <script src="{{ asset('pluto/js/chart_custom_style1.js') }}"></script>
   </body>
</html>