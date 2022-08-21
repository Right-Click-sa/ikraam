@extends('frontend.layouts.master')

@section('title', __('Common Questions'))

@section('content')

  <!--start-questions-->
    <section class="component-questions pt-5  pb-5">
        <div class="container">
            <div class="text-center ">
                <strong class="m-auto text-initiatives-head title-login">
                    @lang('How do I contribute to the Foundation')
                </strong>
            </div>

            <ul class="ul-latest mt-4">
              <li class="mb-3">@lang('Volunteer')</li>
              <li class="mb-3">@lang('community partnership contract')</li>
              <li class="mb-3">@lang('Donation')</li>
              <li class="mb-3">@lang('Ambassador')</li>
              <li class="mb-3">@lang("Participation in the implementation of the organization's initiatives")</li>
              <li class="mb-3">@lang('Participation with the research, inventory and innovation team')</li>
              <li class="mb-3">@lang('Providing advice to the associations supervised by the institution')</li>
              <li class="mb-3">@lang('Providing training and development services to associations supervised by the institution')</li>
              <li class="mb-3">@lang('Supporting the Foundation by publishing its programs and initiatives through social media')</li>
            </ul>
            <p class="p-questions col-md-6 m-auto text-center">
              @lang('For more, go to the electronic forms box and fill out the form and we will communicate as soon as possible, God willing, and to follow up on the application procedures, you can communicate via e-mail')
              <a class="link-questions" href="mailto:sa.org.ikraam@info">( sa.org.ikraam@info ) </a>
               @lang('And via Foundation WhatsApp')
            </p>

            <div class="mt-4 text-center">
                <a class="mt-4 link-questions" href="https://wa.me/966534399110" target="_newEmail">( 966534399110 )</a>
            </div>
        </div>
    </section>
    <!--end-questions-->

@endsection
