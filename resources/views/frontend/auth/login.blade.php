@extends('frontend.layouts.master')

@section('title', __('Login'))

@section('content')
    <!--start-login-->
    <section class="component-login pt-5 pb-5">
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-6">
                  <h6 class="text-center title-login">
                      @lang('Login')
                     <img src="/assets/img/login.png" alt="login">
                    </h6>
                  <form class="form-content form-login mt-3 row g-3 needs-validation justify-content-center" method="post" action="{{ route('frontend.auth.login') }}" novalidate="">
                    @csrf
                    <div class="col-md-9 mb-2">
                      <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder=" {{ __('E-mail Address') }}" id="validationemail" value="{{ old('email') }}" maxlength="191" required autofocus autocomplete="email">
                      <div class="invalid-feedback">
                        Please provide a valid Email.
                      </div>
                    </div>

                    <div class="col-md-9 mb-2">
                      <input type="password" name="password" id="password" placeholder="{{ __('Password') }}" maxlength="100" required autocomplete="current-password" class="form-control form-control-lg" id="validationCustom05" >
                      <div class="invalid-feedback">
                        Please provide a valid number.
                      </div>
                    </div>
                    <div class="col-md-9 mb-2">
                        <div class="row justify-content-between">
                            <a class="col link-login-number" href="{{ route('frontend.auth.password.request') }}">@lang('Forgot Your Password?')</a>
                            <div class="col form-check">
                                <input class="form-check-input" name="remember" id="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }} id="flexCheckDefault">
                                <label class="form-check-label" for="remember">
                                    @lang('Remember Me')
                                </label>
                            </div>
                        </div>

                    </div>

                    @if(config('boilerplate.access.captcha.login'))
                        <div class="row">
                            <div class="col">
                                @captcha
                                <input type="hidden" name="captcha_status" value="true" />
                            </div><!--col-->
                        </div><!--row-->
                    @endif

                    <div class="col-md-9 text-center">
                      <button class="btn btn-lg col-md-12 fw-bold  btn-submit" type="submit">@lang('Login')</button>
                    </div>

                    <div class="text-center">
                      @include('frontend.auth.includes.social')
                    </div>
                </form>

              </div>
          </div>
        </div>
    </section>
    <!--end-login-->
@endsection
