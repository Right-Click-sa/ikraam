@extends('frontend.layouts.master')

@section('title', __('Common Questions'))

@section('content')

  <!--start-questions-->
    <section class="component-questions pt-5  pb-5">
        <div class="container">
            <strong class="text-initiatives-head title-login">
                @lang('What are the ways to donate to the foundation')
            </strong>
            <ul class="ul-latest mt-4">
              <li class="mb-3">@lang('Through the bank account')</li>
              <li class="mb-3">@lang('Al Rajhi Bank (for donations)')</li>
              <li class="mb-3">@lang('Iban') <span>SA88800003626080</span></li>
              <li class="mb-3">@lang('Through the donation basket (Quick access link to the store)')</li>
            </ul>
        </div>
    </section>
    <!--end-questions-->

@endsection
