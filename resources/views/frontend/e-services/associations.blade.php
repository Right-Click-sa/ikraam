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
                        @foreach ($associations as $key => $association)
                          <div class="col-img-associations col ">
                            <div class="b-img">
                              <a href="{{ $association->website ? $association->website : '#' }}" target="_blank">
                                <img src="/img/backend/associations/img/{{ $association->image }}" alt="associations">
                              </a>
                            </div>
                          </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end-associations-->

@endsection
