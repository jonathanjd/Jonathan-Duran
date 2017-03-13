@extends('polo.main.base')
@section('title','Creamos Páginas Web Únicos')
@section('meta')
  <meta name="description" content="Creamos páginas web de alta calidad, diseño web, aplicaciones Web, Blog Clon ofrece páginas web accesibles, posicionamiento en buscadores, servicios profesionales en sitios web, paginas web dinamicas. Diseño de paginas web económicas" />
  <meta name="Keywords" content="crear pagina web, como crear una pagina web, diseños web, paginas web, servicios web" />

  <!-- sample fb meta -->
  <meta property="og:title" content="Blog Clon Creamos Sitio Web Únicos y Seguros" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="{{ route('index') }}" />
  <meta property="og:image" content="{{ asset('imagen/facebook-share.jpg') }}" />
  <meta property="og:description" content="Creamos sitios web de alta calidad, Diseño web, Aplicaciones Web, Blog Clon ofrece páginas web accesibles, posicionamiento en buscadores, servicios profesionales en sitios web, paginas web dinamicas. Diseño de paginas web económicas."/>
  <meta property="fb:app_id" content="294735130942812" />

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
