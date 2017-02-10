<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta id="token"name="token" value="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('template-polo/images/favicon.png')}}">

    <title>@yield('title') | Blog Clon</title>

    <meta name="Author" content="BlogClon" />
    <meta name="Subject" content="creamos sitios web económico" />
    <meta name="description" content="Creamos sitios web de alta calidad, Diseño web, Aplicaciones Web, Blog Clon ofrece páginas web accesibles, posicionamiento en buscadores, servicios profesionales en sitios web, paginas web dinamicas. Diseño de paginas web económicas" />
    <meta name="Keywords" content="paginas web economicas, diseño web economico, diseño de pagina de internet, diseño de sitios web economicos, diseño web, paginas web, sitios web, paginas web en venezuela, diseño web profesional, diseño de pagina de internet economica, diseñadores web, posicionamiento, diseño de paginas web, desarrollo web, paginas de internet, diseño web profesional, posicionamiento web, diseño web venezuela, diseño web anzoategui, tiendas virtuales, blog, noticias de tecnología, cursos web" />

    <!-- sample fb meta -->
    <meta property="og:title" content="Blog Clon Creamos Sitio Web Únicos y Seguros" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ route('index') }}" />
    <meta property="og:image" content="{{ asset('imagen/facebook-share.jpg') }}" />
    <meta property="og:description" content="Creamos sitios web de alta calidad, Diseño web, Aplicaciones Web, Blog Clon ofrece páginas web accesibles, posicionamiento en buscadores, servicios profesionales en sitios web, paginas web dinamicas. Diseño de paginas web económicas."/>

    <!-- sample twitter meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@therealkni">
    <meta name="twitter:creator" content="@ClonBlog">
    <meta name="twitter:title" content="Blog Clon Creamos Sitio Web Únicos y Seguros">
    <meta name="twitter:description" content="Creamos sitios web de alta calidad, Diseño web, Aplicaciones Web, Blog Clon ofrece páginas web accesibles, posicionamiento en buscadores, servicios profesionales en sitios web, paginas web dinamicas. Diseño de paginas web económicas.">
    <meta name="twitter:image" content="{{ asset('imagen/facebook-share.jpg') }}">



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
