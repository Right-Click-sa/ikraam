@extends('frontend.layouts.master')

@section('title', __('Common Questions'))

@section('content')

  <section class="component-questions pt-5  pb-5">
        <div class="container">
            <div class="text-center">
                <strong class="m-auto  text-initiatives-head title-login">
                    @lang('What are the latest current programs and initiatives')
                </strong>
            </div>
            <ul class="ul-latest mt-4">
              <li class="mb-3">@lang('Preparing research and studies in the honoring of the dead sector')</li>
              <li class="mb-3">@lang('Activating the initiative to monitor and take care of cemeteries')</li>
              <li class="mb-3">@lang('Modern washbasin model')</li>
              <li class="mb-3">@lang('Create a unified guide for washing and shrouding the deceased and praying for him')</li>
            </ul>
        </div>
    </section>
    <!--end-questions-->

@endsection
