@extends('frontend.layouts.master')

@section('title', __('Volunteer'))

@section('content')

  <section class="component-login  pb-5">
        <!--component-img-->
        <div class="background-img">
            <img src="/assets/img/explanation.png" allt="explanation">
        </div>
        <!--component-identification-->
        <div class="identification-explanation my-5 py-5">
            <div class="container">
                <div class="component-p-explanat col-md-7 text-center  bg-white justify-content-center m-auto">
                    <p class="text-center col-md-10 mb-4">
                      @lang('Volunteer work is one of the strategic goals of Vision 2030, on which non-profit organizations such as the Honoring the Dead Foundation depend and works to honor and appreciate the efforts of volunteers, which is considered one of the foundations of building, progressing and renaissance societies and works to strengthen community cohesion, raise social responsibility and support the local economy')
                    </p>
                    <div class="link-join col-md-4 justify-content-center m-auto">
                        <a class="text-white" href="{{ route('frontend.contribute.volunteer.join') }}" title="">@lang('Join us')</a>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
