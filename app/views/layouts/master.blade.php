<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Daily Art | Make art, daily.</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
    {{ HTML::style('css/normalize.css') }}
    {{ HTML::style('css/foundation.min.css') }}
    {{ HTML::style('css/font-awesome.min.css') }}
    {{ HTML::style('css/dropzone.css') }}

    {{ HTML::style('css/main.css') }}
  </head>
  <body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->


    <header>
        <a href="{{ URL::to('/') }}"><h1 class="main_heading">Daily<i class="fa fa-pencil"></i>Art</h1></a>
        <a href="{{ URL::to('login') }}" class="login-btn">Submission</a>
    </header>

    @yield('content')

    <!-- Scripts -->

    {{ HTML::script('js/vendor/modernizr.js') }}
    {{ HTML::script('js/vendor/jquery.js') }}
    {{ HTML::script('js/vendor/masonry.pkgd.min.js') }}
    {{ HTML::script('js/vendor/foundation.min.js') }}
    {{ HTML::script('js/vendor/dropzone.js') }}

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

    <script>
    $(document).foundation();

    //   var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    //   (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    //   g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    //   s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>

    <script type="text/javascript">
        Dropzone.options.myAwesomeDropzone = {
          maxFiles: 1,
          complete: function() {
            location.reload();
          }
        }
    </script>

    @yield('scripts')
  </body>
</html>