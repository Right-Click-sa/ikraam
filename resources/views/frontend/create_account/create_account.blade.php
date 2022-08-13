@extends('frontend.layouts.master')

@section('title', __('Register'))

@section('content')

  <!--start-register-->
    <section class="component-login pt-5 pb-5">
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-12">
                  <h6 class="text-center title-login">
                    @lang('Register')
                     <img src="/assets/img/login.png" alt="login">
                    </h6>
                  <form class="form-content form-login mt-3 row-cols-lg-3 row-cols-md-2 row-cols-1 row g-4 needs-validation justify-content-center" novalidate="">

                    <div class="col">
                      <input type="text" class="form-control form-control-lg" placeholder="@lang('Association name')" id="validationemail" required="">
                      <div class="invalid-feedback">
                        Please provide a valid name.
                      </div>
                    </div>
                    <div class="col">
                      <input type="text" placeholder="@lang('Association number')" class="form-control form-control-lg" id="validationCustom05" required="">
                      <div class="invalid-feedback">
                        Please provide a valid number.
                      </div>
                    </div>
                    <div class="col">
                        <input type="text" placeholder="@lang('Chairman of the Board')" class="form-control form-control-lg" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid Chairman of the Board.
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" placeholder="@lang('Founding of the Association')" class="form-control form-control-lg" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid Founding of the Association.
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" placeholder="@lang('Association license')" class="form-control form-control-lg" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid Association license.
                        </div>
                    </div>
                     <div class="col">
                        <input type="text" placeholder="@lang('Executive Director')" class="form-control form-control-lg" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid Executive Director.
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" placeholder="@lang('Association Location')" class="form-control form-control-lg" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid Association Location.
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" placeholder="@lang('The main objectives of the association (scope of work)')" class="form-control form-control-lg" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid Main objective.
                        </div>
                    </div>
                    <div class="col">
                        <input type="email" placeholder="@lang('The association\'s email')" class="form-control form-control-lg" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid association's e-mail
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" placeholder=" @lang('City')" class="form-control form-control-lg" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid city
                          .
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" placeholder="@lang('Administrative officer')" class="form-control form-control-lg" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid Administrator.
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" placeholder=" @lang('Administrative officer\'s number')" class="form-control form-control-lg" id="validationCustom05" required="">
                        <div class="invalid-feedback">
                          Please provide a valid number Administrator.
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex form-control custom-file justify-content-between">
                            <span>@lang('Upload the association certificate')</span>
                            <div class="">
                                <input type="file" class="custom-file-input" id="file" multiple onchange="javascript:updateList()">
                                <label class="custom-file-label text-white" for="file">
                                    @lang('Upload file')
                                    <img class="download"src="/assets/img/Icon awesome-download.png" alt="download">
                                </label>
                            </div>
                        </div>
                        <ul id="fileList" class="file-list"></ul>

                    </div>
                    <div class="col text-center">
                      <button class="btn btn-lg col-md-12 fw-bold  btn-submit" type="submit">@lang('Register')</button>
                    </div>
                </form>
                <div class="content-Privacy mt-5">
                    @lang('By registering for an account or using this website, you agree to our')
                     <a href="#" class="color-copy"> @lang('Terms of use')</a>
                     @lang('and')
                      <a href="#" class="color-copy">  @lang('privacy policy') </a>
                      @langrtl @lang('ours') @endlangrtl
                </div>
              </div>

          </div>

        </div>
    </section>
    <!--end-register-->

@endsection
