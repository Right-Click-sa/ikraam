@extends('frontend.layouts.master')

@section('title', __('Recruitment'))

@section('content')

  <!--start-jobs -->
    <section class="component-Contribute  pt-5 pb-5">
        <div class="container">
            <div class="text-center">
                <strong class=" m-auto  text-initiatives-head title-login">
                    @lang('Available jobs')
                </strong>
            </div>
            <div class="col-md-10 m-auto p-5 mt-5   component-modify">
                @foreach ($jobs as $key => $job)
                  <div class="component-jop pb-4 mt-4">
                    <div class="mt-2 d-flex justify-content-between">
                      <div>
                        <h6 class="title-jop">(@lang('Job'))</h6>
                        <h5 class="title-jop-defintion">{{ $job->job }} </h5>
                      </div>
                      <div class="img-close">
                        <a class="a-linke-join" href="{{ route('frontend.e-services.recruitment.apply', $job) }}">@lang('Join us')</a>
                      </div>
                    </div>
                    <div class="col-md-10 mt-4">
                      <h6  class="title-jop">(@lang('Information'))</h6>
                      <pre class="pre-jobs mt-3">
                        {{ $job->description }}
                      </pre>
                    </div>
                  </div>
                @endforeach

                <!--job-tow-->
                {{-- <div class="component-jop mt-4">
                    <div class="mt-2 d-flex justify-content-between">
                        <div>
                            <h6 class="title-jop">(@lang('Job'))</h6>
                            <h5 class="title-jop-defintion">مهندس معماري</h5>
                        </div>
                        <div class="img-close">
                            <a class="a-linke-join" href="{{ route('frontend.e-services.recruitment.apply') }}">@lang('Join us')</a>
                        </div>
                    </div>
                    <div class="col-md-10 mt-4">
                        <h6  class="title-jop">(@lang('Information'))</h6>
                        <pre class="pre-jobs mt-3">
                            تحتاج شركه ايدرينك للمياه مهندس 3 سنين خبره علي الأقل مع المسؤولية
                            الكامله للعمل الذي سيقوم بيه
                         </pre>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!--end-request-->

@endsection
