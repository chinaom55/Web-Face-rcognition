<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Face Recoginition</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Font Awesome -->
  <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  </script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}" rel="stylesheet">
  </script>
  <!-- Theme style -->
  <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
  </script>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <img src="{{ asset('image/facial-recognition.png') }}" width="150">
      <a href="#"><b>Face</b>Recoginition</a>
    </div>
    <main>
      @yield('content')
    </main>
  </div>


  <!-- jQuery -->
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}" defer></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('dist/js/adminlte.min.js') }}" defer></script>

</body>

</html>