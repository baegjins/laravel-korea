<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Laravel Korea</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
  	<meta name="robots" content="index,follow">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    
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

    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', '{{ Config::get('googleAnalyticsID') }}']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>

    <script type="text/javascript">
      /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
      var disqus_shortname = '{{ Config::get('disqusShortname') }}'; // required: replace example with your forum shortname

      /* * * DON'T EDIT BELOW THIS LINE * * */
      (function () {
          var s = document.createElement('script'); s.async = true;
          s.type = 'text/javascript';
          s.src = '//' + disqus_shortname + '.disqus.com/count.js';
          (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
      }());
    </script>

    <script src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/highlight.pack.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @show

  </body>
</html>