@extends('frontend.layouts.master')

@section('title', __('Home'))

@section('content')
  
  <!--slider-->
    @include('frontend.includes.slider')
  <!--end-slider-->

  <!-- Floating Buttons -->
    @include('frontend.includes.float-buttons')
  <!-- Floating Buttons -->

  <!--donate-links-->
    @include('frontend.includes.donate-links')
  <!--end-donate-links-->

  <!--What-do-video-->
    @include('frontend.includes.video')
  <!--end-what-do-video-->

  <!--The supervisory authorities-->
    @include('frontend.includes.supervisory-authorities')
  <!--The supervisory authorities-->

  <!--start-ikram in numbers -->
    @include('frontend.includes.ikram-in-numbers')
  <!--end-'ikram in numbers -->

  <!--start-death rate-->
   @include('frontend.includes.death-rate')
  <!--end-death rate-->

  <!--The number of tombs-->
    @include('frontend.includes.tombs-num')
  <!--end-The number of tombs-->

  <!--start-content-us-->
    @include('frontend.includes.contact-us')
  <!--end-conent-us-->

@endsection
