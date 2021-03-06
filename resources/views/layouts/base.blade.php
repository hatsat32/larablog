<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title', 'LaraBlog')</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/lib/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/lib/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition">

  @yield('body')

  <!-- jQuery -->
  <script src="/lib/js/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/lib/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/lib/js/adminlte.min.js"></script>
</body>
</html>
