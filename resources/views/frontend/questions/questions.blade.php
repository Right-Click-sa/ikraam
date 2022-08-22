@extends('frontend.layouts.master')

@section('title', __('Common Questions'))

@section('content')

  <!--start-questions-->
    <section class="component-questions pt-5  pb-5">
        <div class="container">
          <div class="text-center">
            <strong class="m-auto text-initiatives-head title-login">
              @lang('Common Questions')
            </strong>
          </div>
            <div class="row col-md-6 m-auto justify-content-center">
              <div class="row row-cols-lg-1 row-cols-md-2 row-cols-1  gx-5 gy-4 mt-4">
                <!--item-->
                <div class="col">
                  <div class="col-questions">
                    <a href="{{ route('frontend.questions.one') }}" title=""> @lang('What is the general framework for corporate governance')  <span>@lang('?')</span></a>
                  </div>
                </div>
                 <!--item-->
                 <div class="col">
                  <div class="col-questions">
                    <a href="{{ route('frontend.questions.two') }}" title="" > @lang('What are donor rights') <span>@lang('?')</span></a>
                  </div>
                </div>
                <!--item-->
                <!--item-->
                  <div class="col">
                    <div class="col-questions">
                      <a href="{{ route('frontend.about.board_of_trustees') }}" title="" > @lang('Who are the members of the Board of Trustees with their photos') <span>@lang('?')</span></a>
                    </div>
                  </div>
                <!--item-->
                <div class="col">
                  <div class="col-questions">
                  <a href="{{ route('frontend.questions.three') }}" title="" >@lang('What does the company contribute in the field of automation')<span>@lang('?')</span></a>
                  </div>
                </div>
                <!--item-->
                    <div class="col">
                      <div class="col-questions">
                        <a href="{{ route('frontend.questions.four') }}" title="">@lang('How do I contribute to the Foundation')<span>@lang('?')</span></a>
                      </div>
                    </div>
                <!--item-->

                <div class="col">
                  <div class="col-questions">
                    <a href="{{ route('frontend.questions.five') }}" title=""> @lang('What are the latest current programs and initiatives') <span>@lang('?')</span></a>
                  </div>
                </div>
               <!---->
                <div class="col">
                  <div class="col-questions">
                    <a href="{{ route('frontend.questions.six') }}" title="" >@lang('What are the ways to communicate with the institution')<span>@lang('?')</span></a>
                  </div>
                </div>
                  <!--item-->
                  <div class="col">
                    <div class="col-questions">
                      <a href="{{ route('frontend.questions.seven') }}" title="">@lang('What are the ways to donate to the foundation') <span>@lang('?')</span></a>
                    </div>
                  </div>
                 <!--item-->
                 <div class="col">
                  <div class="col-questions">
                    <a href="{{ route('frontend.questions.eight') }}" title="">@lang('How to book an appointment')<span>@lang('?')</span></a>
                  </div>
                </div>
                  <!--item-->
                  <div class="col">
                    <div class="col-questions">
                    <a href="{{ route('frontend.questions.nine') }}" title="">@lang('Is the company authorized')<span>@lang('?')</span></a>

                    </div>
                  </div>
                    <!--item-->
                <div class="col">
                  <div class="col-questions">
                  <a href="{{ route('frontend.questions.ten') }}" title="">@lang('What is the method of submitting a proposal or development ideas and initiatives for the honoring of the dead sector')<span>@lang('?')</span></a>
                  </div>
                </div>
                <!--item-->

              </div>
            </div>

        </div>
    </section>
    <!--end-questions-->

@endsection
