@extends('frontend.layouts.master')

@section('title', __('About the enterprise'))

@section('content')

  <!--start-about-->
    <section class="component-questions pt-5  pb-5">
        <div class="container">
            <strong class="text-initiatives-head title-login">
                @lang('About the enterprise')
            </strong>

            <div class="row-about-definition mt-2">
                <!--about-definition-->
                <div class="row row-about">
                    <div class="col-md-4">
                        <img class="about-img" src="/img/backend/about/{{ $about->about_image }}" alt="about">
                    </div>
                    <div class="col-md-8">
                        <p class="definition-p">
                          {{ $about->about }}
                        </p>
                    </div>
                </div>
                <!--about-definition-->

                <!--Vision-->
                <div class="row-about row">
                    <div class="col-lg-1 vision-col">
                        <div class="box-vision">
                            <img class="vision-row" src="/assets/img/Vision-2.png" alt="Vision">

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <strong class="text-initiatives-head title-login">@lang('Vision')</strong>
                        <p class="definition-p">{{ $about->vision }}</p>
                    </div>
                </div>
                <!--end-Vision-->

                <!--message-->
                <div class="row-about row">
                    <div class="col-lg-1 vision-col">
                        <div class="box-vision">
                            <img class="vision-row" src="/assets/img/visibility copy.png" alt="message">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <strong class="text-initiatives-head title-login">@lang('Message')</strong>
                        <p class="definition-p">
                          {{ $about->message }}
                        </p>
                    </div>
                </div>
                <!--message-->
                
                <!--Value-->
                <div class="row-about row">
                    <div class="col-lg-1 vision-col">
                        <div class="box-vision">
                            <img class="vision-row" src="/assets/img/Value.png" alt="Value">

                        </div>
                    </div>
                    <div class="col-lg-8 mx-md-3">
                        <strong class="text-initiatives-head title-login">@lang('Values')</strong>
                        <ul class="ul-latest ul-donor mt-3 mx-md-2">
                            @foreach ($about->values as $key => $value)
                              <li class="mb-2"><span>{{ $value->title }}</span> : {{ $value->description }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!--Enterprise goals-->
                <div class="row-about row">
                    <div class="col-lg-1 vision-col">
                        <div class="box-vision">
                            <img class="vision-row" src="/assets/img/success.png" alt="success">

                        </div>
                    </div>
                    <div class="col-lg-9">
                        <strong class="text-initiatives-head title-login">@lang('Enterprise goals')</strong>
                        <p class="definition-p">
                          {{ $about->goals }}
                        </p>
                    </div>
                    <div class="col-md-12 img-general-frame">
                        <img src="/img/backend/about/{{ $about->goals_image }}" alt="Enterprise goals">
                    </div>
                </div>
                <!--Enterprise goals-->

                <!--Strategic directions of the organization-->
                <div class="row-about mt-3">
                    <strong class="text-initiatives-head title-login">
                        @lang("The organization's strategic directions")
                    </strong>
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <img class="vision-row"src="/img/backend/about/{{ $about->strategy_image }}" alt="organization strategy">
                        </div>
                        <div class="col-md-8">
                            <p class="definition-p">
                              {{ $about->strategy }}
                            </p>
                        </div>
                    </div>
                </div>
                <!--Strategic directions of the organization-->
            </div>
        </div>
    </section>
    <!--end-about-->

@endsection
