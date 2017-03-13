<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta id="token"name="token" value="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('template-polo/images/favicon.png')}}">
    <title>Blog Clon - @yield('title')</title>
    <meta name="Author" content="BlogClon.com.ve" />
    <meta name="owner" content="Jonathan David Duran Segovia" />
    @yield('meta')

    @include('polo.part.stylesheet')

    @yield('stylesheet')

</head>

<body class="wide">

    <!-- WRAPPER -->
    <div class="wrapper">


        <!-- HEADER -->
        @include('polo.part.header')
        <!-- END: HEADER -->

        @yield('content_part')

        <!-- REVOLUTION SLIDER -->

        <!-- END REVOLUTION SLIDER -->

        <!-- FOOTER -->
        @include('polo.part.footer')
        <!-- END: FOOTER -->

    </div>
    <!-- END: WRAPPER -->

    <!-- GO TOP BUTTON -->
    <a class="gototop gototop-button" href="#"><i class="fa fa-chevron-up"></i></a>

    @include('polo.part.script')
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/rrssb.min.js') }}"></script>
    @yield('script')

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-87605828-2', 'auto');
      ga('send', 'pageview');
    </script>

</body>

</html>
