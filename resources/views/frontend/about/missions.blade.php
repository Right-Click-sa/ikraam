@extends('frontend.layouts.master')

@section('title', __('Enterprise missions'))

@section('content')

  <!--start-questions-->
    <section class="component-questions pt-5  pb-5">
        <div class="container">
            <div class="component-missions pb-5">
                {{-- <strong class="text-initiatives-head title-login">
                    @lang('Enterprise missions')
                </strong> --}}
               <div class="col-md-10 m-auto img-general-frame-one">
                 <img src="/assets/img/missions.png" alt="missions">
               </div>
            </div>
            <div class="mt-5">
                <strong class="text-initiatives-head title-login">
                    @lang('Enterprise work')
                </strong>
               <div class="col-md-10 m-auto img-general-frame-one">
                 <img src="/assets/img/Enterprise work.png" alt="work">
               </div>
            </div>
        </div>
    </section>
    <!--end-questions-->

@endsection
