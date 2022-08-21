@extends('frontend.layouts.master')

@section('title', __('Common Questions'))

@section('content')

  <!--start-questions-->
    <section class="component-questions pt-5  pb-5">
        <div class="container">
            <strong class="text-initiatives-head title-login">
                @lang('What does the company contribute in the field of automation')
            </strong>
            <div class="mt-4 component-communicate">
                <div class="mb-3">
                    <pre>
                        @lang('By completing the procedures for the deceased’s journey, starting from the preparation to the issuance of the death certificate, allowing the choice of burial places, providing electronic means of transportation, organizing electronic donation work, and contributing to the automation of the procedures of the associations honoring the dead')
                    </pre>
                </div>
            </div>
        </div>
    </section>
    <!--end-questions-->

@endsection
