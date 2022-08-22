@extends('frontend.layouts.master')

@section('title', __('Common Questions'))

@section('content')

  <!--start-questions-->
    <section class="component-questions pt-5  pb-5">
        <div class="container">
            <strong class="text-initiatives-head title-login">
                @lang('What are the ways to communicate with the institution')
            </strong>
            <div class="mt-4 component-communicate">
                <div class="mb-3">@lang("The company's mobile number / WhatsApp")<a class="link-questions"href="https://wa.me/966534399110" target="_blank">( 966534399110 )</a></div>
                <div class="mb-3"> @lang('Email') <a  class="link-questions" href="mailto:info@ikraam.org.sa" target="_newEmail">(info@ikraam.org.sa)</a></div>
            </div>
        </div>
    </section>
    <!--end-questions-->

@endsection
