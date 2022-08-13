@extends('frontend.layouts.master')

@section('title', __('Donate'))

@section('content')

  <!--start-donation-->
    <section class="component-donation pt-5 pb-5">
        <div class="container">
            <div class="row">
                <!--bank-donation-->
                <div class="col-lg-6 col-donation-bank mb-3">
                    <div class="title-donation text-center">
                        <strong class="fw-bold">@lang('Bank accounts')</strong>
                    </div>
                    <!--bank-->
                    <div class="component-donation-Bank mt-5">
                        <div class="content-bank col-md-10 m-auto p-4">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img class="img-bank" src="/assets/img/alrajhi.png" alt="alrajhi">
                                </div>
                                <div class="col-lg-9 defintion-bank">
                                    <h6 class="title-bank-one mb-2">مصرف الراجحي </h6>
                                    <h5 class="title-bank-tow mb-2">مصرف الراجحى زكاة</h5>
                                    <p class="title-p-bank mb-2 fw-semibold">
                                        <span>(IBAN)</span>
                                        SA44 8000 0362 6080 1554 5470


                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--bank-->
                    <!--bank-->
                    <div class="component-donation-Bank mt-5">
                        <div class="content-bank col-md-10 m-auto p-4">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img class="img-bank" src="/assets/img/alrajhi.png" alt="alrajhi">
                                </div>
                                <div class="col-lg-9 defintion-bank">
                                    <h6 class="title-bank-one mb-2">مصرف الراجحي </h6>
                                    <h5 class="title-bank-tow mb-2">مصرف الراجحى تبرعات</h5>
                                    <p class="title-p-bank mb-2 fw-semibold">
                                        <span>(IBAN)</span>
                                        SA44 8000 0362 6080 1554 5470

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--bank-->
                </div>
                <!--end-bank-donation-->
                <!--start-in-kind-donation-->
                <div class="col-lg-6">
                    <div class="title-donation text-center">
                        <strong class="fw-bold">@lang('In-kind donation')</strong>
                    </div>
                    <div class="col-md-10 m-auto linke-kind-donation mt-5">

                        <a href="{{ route('frontend.contribute.donate.in-kind') }}" title="donation">
                            <img class="img-in-kind"src="/assets/img/kind-donation.png"alt="kind-donation">
                        </a>
                    </div>
                </div>
                <!--end-in-kind-donation-->

            </div>
        </div>
    </section>
    <!--end-donation-->

@endsection
