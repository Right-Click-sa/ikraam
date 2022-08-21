@extends('frontend.layouts.master')

@section('title', __('Common Questions'))

@section('content')

  <!--start-questions-->
    <section class="component-questions pt-5  pb-5">
        <div class="container">
            <strong class=" text-initiatives-head title-login">
                @lang('How to book an appointment')
            </strong>
            <div class="mt-4 component-communicate">
                <div class="mb-3">@lang('By email')<a href="mailto:info@ikraam.org.sa" target="_newEmail" class="link-questions" >(info@ikraam.org.sa)</a></div>
                <pre>
                  @lang('Attaching the information of the meeting axes, the name of the entity and the official and the proposed time for the appointment, and God willing, in the event of receiving the request 3 to 10 working days, a response will be made and to follow up on the request procedures via the WhatsApp of the institution')
                </pre>
                <a class="link-questions" href="https://api.whatsapp.com/send?phone=0534399110" target="_blank">(0534399110)</a>
            </div>
        </div>
    </section>
    <!--end-questions-->

@endsection
