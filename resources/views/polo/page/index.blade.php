@extends('polo.main.base')
@section('title','Inicio')
@section('meta')
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
  <meta name="twitter:site" content="@ClonBlog">
  <meta name="twitter:creator" content="@ClonBlog">
  <meta name="twitter:title" content="Blog Clon Creamos Sitio Web Únicos y Seguros">
  <meta name="twitter:description" content="Creamos sitios web de alta calidad, Diseño web, Aplicaciones Web, Blog Clon ofrece páginas web accesibles, posicionamiento en buscadores, servicios profesionales en sitios web, paginas web dinamicas. Diseño de paginas web económicas.">
  <meta name="twitter:image" content="{{ asset('imagen/facebook-share.jpg') }}">
@endsection

@section('content_part')

  <!-- SLIDER -->
  @include('polo.part.slider')
  <!-- END: SLIDER -->

  <!-- SERVICES -->
  @include('polo.part.service')
  <!-- END: SERVICES -->

  <!-- COUNTERS -->
  @include('polo.part.counter')
  <!-- END: COUNTERS -->

  <!-- PORTFOLIO -->
  @include('polo.part.portfolio')
  <!-- END: Portfolio Items -->

  <!-- CALL TO ACTION -->
  @include('polo.part.calltoaction')
  <!-- CALL TO ACTION -->

  <!-- BLOG -->
  @include('polo.part.blog')
  <!-- END: BLOG -->

  <!-- Social -->
  @include('polo.part.socialrrssb')
  <!-- END: SOCIAL -->
@endsection
