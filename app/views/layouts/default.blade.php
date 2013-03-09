<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Laravel Korea</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tomorrow-night-eighties.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  	<link href="{{ asset('css/bootstrap-responsive.css') }}" rel="stylesheet">
  </head>

  <body>

    @include('layouts.includes.nav')

    <div class="container">
    
      @include('notifications')
    
      @yield('content')

      @include('layouts.includes.footer')

    </div> <!-- /container -->

    @section('scripts')
    <script src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/highlight.pack.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @show

  </body>
</html>
