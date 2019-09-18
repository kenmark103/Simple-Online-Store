<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name', 'shoestoreadmin') }}</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
  <script src="{{ asset('js/app.js') }}" defer></script>
  @yield('extracss')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('backend.includes.header')
  <div class="row py-5">
  <aside class="home-aside left col-md-3">
  @include('backend.includes.sidebar')
  </aside>
  <main class="col-md-9">
  @yield('main')
  </main>

  </div>

  @include('shared.footer')

</div>
</body>
</html>