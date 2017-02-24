<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta id="token"name="token" value="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('template-polo/images/favicon.png')}}">

    <title>@yield('title') | Blog Clon</title>

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

</body>

</html>
