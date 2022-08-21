@extends('frontend.layouts.master')

@section('title', __('Common Questions'))

@section('content')

  <!--start-questions-->
    <section class="component-questions pt-5  pb-5">
        <div class="container">
            <div class="text-center">
                <strong class="m-auto text-initiatives-head title-login">
                    @lang('What are donor rights')
                </strong>
            </div>

            <ul class="ul-latest ul-donor mt-4">
              <li class="mb-3">@lang('Knowing the mission and objectives of the foundation, how it uses the donations it receives, and its ability to use the donations effectively to achieve its intended purposes')</li>
              <li class="mb-3">@lang('Knowledge of the boards of directors of this institution and their ability to achieve its mission with the required professionalism')</li>
              <li class="mb-3">@lang('Ensure that the donations are used for the purposes for which they were given')</li>
              <li class="mb-3">@lang('Ensure that the institution respects the confidentiality of information in accordance with official legislation and laws')</li>
              <li class="mb-3">@lang("Right to remove donors' names from mailing lists")</li>
              <li class="mb-3">@lang('Get clear and honest answers to questions about donations')</li>
            </ul>
        </div>
    </section>
    <!--end-questions-->

@endsection
