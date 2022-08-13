@extends('frontend.layouts.master')

@section('title', __('Common Questions'))

@section('content')

  <!--start-questions-->
    <section class="component-questions pt-5  pb-5">
        <div class="container">
            <strong class="text-initiatives-head title-login">
                ماهي طرق التواصل مع المؤسسة ؟
            </strong>
            <div class="mt-4 component-communicate">
                <div class="mb-3">رقم جوال المؤسسة / وآتس آب<a class="link-questions"href="https://api.whatsapp.com/send?phone=50600000000" target="_blank">( https://iwtsp.com/966534399110 )</a></div>
                <div class="mb-3"> البريد  الاكتروني <a  class="link-questions"href="mailto:info@ikraam.org.sa" target="_newEmail">(info@ikraam.org.sa)</a></div>
            </div>
        </div>
    </section>
    <!--end-questions-->

@endsection
