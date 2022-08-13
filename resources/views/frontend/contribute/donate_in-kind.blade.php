@extends('frontend.layouts.master')

@section('title', __('In-kind donation'))

@section('content')

  <section class="component-login pt-5 pb-5">
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <h6 class="text-center title-login">
                    @lang('In-kind donation')
                     <img src="/assets/img/kind.png" alt="kind">
                    </h6>
                  <form class="form-content form-login mt-3 row g-3 needs-validation justify-content-center" novalidate="">

                    <div class="col-md-6 mb-2">
                      <input type="text" class="form-control form-control-lg" placeholder="@lang('The name of the donor or the organization') " id="validationemail" required="">
                      <div class="invalid-feedback">
                        Please provide a valid name.
                      </div>
                    </div>

                    <div class="col-md-6 mb-2">
                      <input type="number" placeholder="@lang('Contact number')" class="form-control form-control-lg" id="validationCustom05" required="">
                      <div class="invalid-feedback">
                        Please provide a valid number.
                      </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <input type="email" placeholder="@lang('Email')" class="form-control form-control-lg" id="validationemail" required="">
                        <div class="invalid-feedback">
                          Please provide a valid email.
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <input type="text" placeholder="@lang('Type and details of in-kind donation')" class="form-control form-control-lg" id="validationdetails" required="">
                        <div class="invalid-feedback">
                          Please provide a valid Type and details of the in-kind donation.
                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="text" placeholder="@lang('Area')" class="form-control form-control-lg" id="validation" required="">
                        <div class="invalid-feedback">
                          Please provide a valid Region.
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                      <button class="btn btn-lg col-md-12 fw-bold  btn-submit" type="submit">@lang('Send')</button>
                    </div>
                </form>
              </div>

          </div>

        </div>
    </section>


@endsection
