@extends('frontend.layouts.master')

@section('title', __('Memberships'))

@section('content')

  <!--start-memberships-->
    <section class="component-login pt-5 pb-5">
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <h6 class="text-center title-login">
                    @lang('Membership request')
                  </h6>
                  <form class="form-content form-login mt-3 row g-3 needs-validation justify-content-center" novalidate="">

                    <div class="col-md-6 mb-2">
                      <input type="text" class="form-control form-control-lg" placeholder=" @lang('Name') " id="validationemail" required="">
                      <div class="invalid-feedback">
                        Please provide a valid name.
                      </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <input type="text" placeholder="@lang('Identification Number')" class="form-control form-control-lg" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid number.
                        </div>
                      </div>
                    <div class="col-md-6 mb-2">
                      <input type="text" placeholder="@lang('Phone')" class="form-control form-control-lg" id="validationCustom05" required="">
                      <div class="invalid-feedback">
                        Please provide a valid number.
                      </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>@lang('Gender')</option>
                            <option value="1">ذكر</option>
                            <option value="2">انثى</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <input type="text" placeholder=" @lang('City')" class="form-control form-control-lg" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid city.
                        </div>
                      </div>
                    <div class="col-md-6 mb-2">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>@lang('Desired Membership Type')</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>

                        </select>
                    </div>


                    <div class="col-md-6 text-center">
                      <button class="btn btn-lg col-md-12 fw-bold  btn-submit" type="submit">@lang('Send')</button>
                    </div>
                </form>
              </div>

          </div>

        </div>
    </section>
    <!--end-memberships-->

@endsection
