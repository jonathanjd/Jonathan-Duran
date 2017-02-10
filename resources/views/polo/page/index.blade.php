@extends('polo.main.base')
@section('title','Inicio')

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
