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
                    <a href="{{ route('frontend.questions.one') }}" title=""> ما هو الاطار العام لحوكمة المؤسسة  <span>؟</span></a>

                  </div>
                </div>
                 <!--item-->
                 <div class="col">
                  <div class="col-questions">
                  <a href="{{ route('frontend.questions.two') }}" title="" > ماهي حقوق المانحين <span>؟</span></a>

                  </div>
                </div>
                <!--item-->
                <!--item-->
                  <div class="col">
                    <div class="col-questions">
                    <a href="{{ route('frontend.about.board_of_trustees') }}" title="" > من هم اعضاء مجلس الامناء مع صورهم <span>؟</span></a>

                    </div>
                  </div>
                <!--item-->
                <div class="col">
                  <div class="col-questions">
                  <a href="{{ route('frontend.questions.three') }}" title="" >بماذا ستساهم المؤسسة في مجال الاتمتة<span>؟</span></a>

                  </div>
                </div>
                <!--item-->
                    <div class="col">
                      <div class="col-questions">
                      <a href="{{ route('frontend.questions.four') }}" title="">كيف أساهم مع المؤسسة<span>؟</span></a>
                      </div>
                    </div>
                <!--item-->

                <div class="col">
                  <div class="col-questions">
                    <a href="{{ route('frontend.questions.five') }}" title=""> ما هي أحدث البرامج والمبادرات الحالية <span>؟</span></a>
                  </div>
                </div>
               <!---->
                <div class="col">
                  <div class="col-questions">
                    <a href="{{ route('frontend.questions.six') }}" title="" >ماهي طرق التواصل مع المؤسسة<span>؟</span></a>
                  </div>
                </div>
                  <!--item-->
                  <div class="col">
                    <div class="col-questions">
                      <a href="{{ route('frontend.questions.seven') }}" title=""> ماهي طرق التبرع للمؤسسة <span>؟</span></a>
                    </div>
                  </div>
                 <!--item-->
                 <div class="col">
                  <div class="col-questions">
                    <a href="{{ route('frontend.questions.eight') }}" title="">كيفية حجز موعد<span>؟</span></a>
                  </div>
                </div>
                  <!--item-->
                  <div class="col">
                    <div class="col-questions">
                    <a href="{{ route('frontend.questions.nine') }}" title="">هل المؤسسة مصرح بها<span>؟</span></a>

                    </div>
                  </div>
                    <!--item-->
                <div class="col">
                  <div class="col-questions">
                  <a href="{{ route('frontend.questions.ten') }}" title="">ماهي طريقة تقديم مقترح أو أفكار ومبادرات تطويرية
                    لقطاع إكرام الموتى<span>؟</span></a>

                  </div>
                </div>
                <!--item-->

              </div>
            </div>

        </div>
    </section>
    <!--end-questions-->

@endsection
