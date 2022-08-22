@extends('frontend.layouts.master')

@section('title', __('Common Questions'))

@section('content')

  <!--start-questions-->
    <section class="component-questions pt-5  pb-5">
        <div class="container">
            <strong class="text-initiatives-head title-login">
                @lang('What is the method of submitting a proposal or development ideas and initiatives for the honoring of the dead sector')
            </strong>
            <div class="mt-4 component-communicate">
                <pre>
                    @lang('By email')<a href="mailto:info@ikraam.org.sa" target="_newEmail" class="link-questions">(info@ikraam.org.sa)</a>

                    @lang('Attaching information on the subject and the contact information of the owner of the proposal or initiative')
               </pre>
            </div>
        </div>
    </section>
    <!--end-questions-->

@endsection
