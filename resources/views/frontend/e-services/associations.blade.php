@extends('frontend.layouts.master')

@section('title', __('Associations'))

@section('content')

  <!--start-associations-->
    <section class="component-associations pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mt-5">
                    <div class="account-associations-login">
                        <div class="img-ass-login d-flex justify-content-end">
                            <img src="/assets/img/Subtraction.png" alt="Subtraction">
                        </div>
                        <div class="row justify-content-center gy-4">


                            <div class="text-center">
                              {{-- @if (Auth::user())
                                @if( $logged_in_user->isAssociation())
                                  <a class="create-account-ass" href="{{ route('frontend.user.account') }}" title="  @lang('My Account') ">@lang('My Account') </a>
                                @endif
                              @else
                                <a class="create-account-ass" href="{{ route('frontend.auth.login') }}" title="  @lang('Login') ">@lang('Login') </a>
                              @endif --}}
                            </div>
                            
                            <div class="text-center">
                                 <a class="col-5 link-Login-ass" href="{{ route('frontend.create_account') }}" title="@lang('Join request form')">@lang('Join request form') </a>
                            </div>

                            <div class="text-center">
                            </div>

                        </div>
                        <div class="img-ass-login d-flex justify-content-start">
                            <img src="/assets/img/Subtraction 27.png" alt="Subtraction">
                        </div>

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row row-cols-lg-4 row-cols-md-2  row-cols-1 g-5 justify-content-center">
                        <div class="col-img-associations col ">
                            <div class="b-img">
                              <a href="#">
                                <img src="/assets/img/associations-1.png" alt="associations">
                              </a>
                            </div>
                        </div>
                         <!---->
                         <div class="col-img-associations col">
                            <div class="b-img">
                              <a href="#">
                                <img src="/assets/img/associations-2.png" alt="associations">
                              </a>
                            </div>
                        </div>
                         <!---->
                         <div class="col-img-associations col">
                            <div class="b-img">
                              <a href="#">
                                <img src="/assets/img/associations-3.png" alt="associations">
                              </a>
                            </div>

                        </div>
                         <!---->
                         <div class="col-img-associations col">
                            <div class="b-img">
                              <a href="#">
                                <img src="/assets/img/associations-4.png" alt="associations">
                              </a>
                            </div>
                        </div>
                         <!---->
                         <div class="col-img-associations col">
                            <div class="b-img">
                              <a href="#">
                                <img src="/assets/img/associations-5.png" alt="associations">
                              </a>
                            </div>
                        </div>
                         <!---->
                         <div class="col-img-associations col">
                            <div class="b-img">
                              <a href="#">
                                <img src="/assets/img/associations-6.png" alt="associations">
                              </a>
                            </div>
                        </div>
                         <!---->
                         <div class="col-img-associations col">
                            <div class="b-img">
                              <a href="#">
                                <img src="/assets/img/associations-7.png" alt="associations">
                              </a>
                            </div>
                        </div>
                         <!---->
                         <div class="col-img-associations col">
                            <div class="b-img">
                              <a href="#">
                                <img src="/assets/img/associations-8.png" alt="associations">
                              </a>
                            </div>
                        </div>
                         <!---->
                         <div class="col-img-associations col">
                            <div class="b-img">
                              <a href="#">
                                <img src="/assets/img/associations-9.png" alt="associations">
                              </a>
                            </div>
                        </div>
                             <!---->
                             <div class="col-img-associations col">
                                <div class="b-img">
                                  <a href="#">
                                    <img src="/assets/img/associations-10.png" alt="associations">
                                  </a>
                                </div>
                            </div>
                                 <!---->
                         <div class="col-img-associations col">
                            <div class="b-img">
                              <a href="#">
                                <img src="/assets/img/associations-11.png" alt="associations">
                              </a>
                            </div>
                        </div>
                        <!---->
                            <div class="col-img-associations col">
                                <div class="b-img">
                                  <a href="#">
                                    <img src="/assets/img/associations-12.png" alt="associations">
                                  </a>
                                </div>
                            </div>
                                 <!---->
                         <div class="col-img-associations col">
                            <div class="b-img">
                              <a href="#">
                                <img src="/assets/img/associations-13.png" alt="associations">
                              </a>
                            </div>
                        </div>
                             <!---->
                             <div class="col-img-associations col">
                                <div class="b-img">
                                  <a href="#">
                                    <img src="/assets/img/associations-14.png" alt="associations">
                                  </a>
                                </div>
                            </div>
                             <!---->
                             <div class="col-img-associations col">
                                <div class="b-img">
                                  <a href="#">
                                    <img src="/assets/img/associations-15.jpg" alt="associations">
                                  </a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end-associations-->

@endsection
