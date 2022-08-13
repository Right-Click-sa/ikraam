@extends('frontend.layouts.master')

@section('title', __('Reset Password'))

@section('content')


    <section class="component-login pt-5 pb-5">
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-6">
                  <h6 class="text-center title-login">
                    @lang('Reset Password')

                     <img src="/assets/img/login.png" alt="login">
                    </h6>
                  <form class="form-content form-login mt-3 row g-3 needs-validation justify-content-center" novalidate="" method="post" action="{{ route('frontend.auth.password.email') }}">
                      @csrf
                    <div class="col-md-9 mb-2">
                      <input type="email" name="email" class="form-control form-control-lg" value="{{ old('email') }}" placeholder="{{ __('E-mail Address') }}" maxlength="191" required autofocus autocomplete="email" id="email" >
                      <div class="invalid-feedback">
                        Please provide a valid Email.
                      </div>
                    </div>
                    <div class="col-md-9 text-center">
                      <button class="btn btn-lg col-md-12 fw-bold  btn-submit" type="submit">@lang('Send Password Reset Link')</button>
                    </div>
                </form>
              </div>

          </div>

        </div>
    </section>
@endsection
