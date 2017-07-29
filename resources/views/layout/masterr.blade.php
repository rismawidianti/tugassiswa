<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 3, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="assets3/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets3/css/stylassets3/e.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">

    <!-- Navbar -->
      @include('layout.nav')
      <!-- EndNavbar -->

      {{-- isi --}}
        @yield('imawd')
        {{-- Akhir Isi --}}
      
		
	</div>
</div>

    <script src="assets3/js/jquery.min.js"></script>
    <script src="assets3/js/bootstrap.min.js"></script>
    <script src="assets3/js/scripts.js"></script>
  </body>
</html>