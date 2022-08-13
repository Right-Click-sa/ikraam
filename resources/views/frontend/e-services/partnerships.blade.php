@extends('frontend.layouts.master')

@section('title', __('Partnerships'))

@section('content')

  <!--start-partnerships-->
    <section class="component-login  pb-5">
        <!--component-img-->
        <div class="background-img">
            <img src="/assets/img/explanation.png" alt="partnerships">
        </div>
        <!--component-identification-->
        <div class="identification-explanation my-5 py-5">
            <div class="container">
                <div class="component-p-explanat col-md-7 text-center  bg-white justify-content-center m-auto">
                    <p class="text-center col-md-10 mb-4">
                      @lang('Effective partnerships with the public and private sectors contribute to the development of the non-profit sector, achieve sustainable development and integration with the non-profit sector, and enhance social solidarity and cohesion among members of society.')
                    </p>
                    <div class="link-join col-md-4 justify-content-center m-auto">
                        <a class="text-white" href="{{ route('frontend.contact-us') }}" title="">@lang('Join us')</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end-partnerships-->

@endsection
