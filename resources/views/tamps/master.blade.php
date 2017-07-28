<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 3, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="ress/css/bootstrap.min.css" rel="stylesheet">
    <link href="ress/css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<!-- Navbar -->
			@include('layouts.nav')
			<!-- EndNavbar -->
		    {{-- Caroussel--}}
		    <!-- Caraussel -->
		    @include('layouts.caroussel')
		    <!-- EndCaroussel -->
			
			<div class="jumbotron">
				{{-- isi --}}
              @yield('content')
              {{-- Akhir Isi --}}
			
			</div>
		</div>
	</div>
</div>

    <script src="ress/js/jquery.min.js"></script>
    <script src="ress/js/bootstrap.min.js"></script>
    <script src="ress/js/scripts.js"></script>
  </body>
</html>