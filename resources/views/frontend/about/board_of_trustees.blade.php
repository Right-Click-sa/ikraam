@extends('frontend.layouts.master')

@section('title', __('Board of Trustees'))

@section('content')

  <!--start-questions-->
    <section class="component-questions pt-5  pb-5">
        <div class="container">
            <strong class=" text-initiatives-head title-login">
                @lang('Board of Trustees')
            </strong>
            <!--grid-board-trustees-->
            <div class="component-board">
                <!--item-board-->
                <div class="card card-board mt-5 pb-5">
                    <div class="row g-0 align-items-center">
                      <div class="col-md-2">
                        <img src="/assets/img/ssa-1.png" class="img-fluid img-board" alt="board-trustees">
                      </div>
                      <div class="col-md-9">
                        <div class="card-body">
                          <h4 class="card-title"><span>معالي أ. </span>/ ماجد بن عبد الله الحقيل </h4>
                        </div>
                      </div>
                    </div>
                </div>
                  <!--item-board-->
                  <div class="card card-board mt-5 pb-5">
                    <div class="row g-0 align-items-center">
                      <div class="col-md-2">
                        <img src="/assets/img/ssa-2.png" class="img-fluid img-board" alt="board-trustees">
                      </div>
                      <div class="col-md-9">
                        <div class="card-body">
                          <h4 class="card-title"><span>معالي م .</span> / احمد بن سليمان الراجحي  </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--item-board-->
                  <div class="card card-board mt-5 pb-5">
                    <div class="row g-0 align-items-center">
                      <div class="col-md-2">
                        <img src="/assets/img/ssa-3.png" class="img-fluid img-board" alt="board-trustees">
                      </div>
                      <div class="col-md-9">
                        <div class="card-body">
                          <h4 class="card-title"><span>  معالي أ.د.   </span>  / عبد السلام بن عبد الله السليمان </h4>
                        </div>
                      </div>
                    </div>
                </div>
                <!---->
                    <!--item-board-->
                    <div class="card card-board mt-5 pb-5">
                        <div class="row g-0 align-items-center">
                        <div class="col-md-2">
                            <img src="/assets/img/ssa-4.png" class="img-fluid img-board" alt="board-trustees">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                            <h4 class="card-title"><span>معالي د. </span> /عبد الرحمن بن عبد العزيز السويلم </h4>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!---->
                    <!--item-board-->
                    <div class="card card-board mt-5 pb-5">
                        <div class="row g-0 align-items-center">
                        <div class="col-md-2">
                            <img src="/assets/img/ssa-5.png" class="img-fluid img-board" alt="board-trustees">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                            <h4 class="card-title"><span>سعادة م. </span> / عصام بن عبد اللطيف الملا</h4>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!---->
                    <!--item-board-->
                    <div class="card card-board mt-5 pb-5">
                        <div class="row g-0 align-items-center">
                        <div class="col-md-2">
                            <img src="/assets/img/ssa-6.png" class="img-fluid img-board" alt="board-trustees">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                            <h4 class="card-title"><span>سعادة أ.  </span> / عبد العزيز بن محمد السبيعي </h4>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!---->
                    <!--item-board-->
                        <div class="card card-board mt-5 pb-5">
                            <div class="row g-0 align-items-center">
                            <div class="col-md-2">
                                <img src="/assets/img/ssa-7.png" class="img-fluid img-board" alt="board-trustees">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                <h4 class="card-title"><span>سعادة م.   </span> / ماجد بن سعد العصيمي </h4>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!---->
                            <!--item-board-->
                            <div class="card card-board mt-5 pb-5">
                                <div class="row g-0 align-items-center">
                                  <div class="col-md-2">
                                      <img src="/assets/img/ssa-8.png" class="img-fluid img-board" alt="board-trustees">
                                  </div>
                                  <div class="col-md-9">
                                      <div class="card-body">
                                      <h4 class="card-title"><span>سعادة أ.  </span> /يزيد بن ابراهيم النفيسة </h4>
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <!---->
                        <!--item-board-->
                        <div class="card card-board mt-5 pb-5">
                            <div class="row g-0 align-items-center">
                            <div class="col-md-2">
                                <img src="/assets/img/ssa-9.png" class="img-fluid img-board" alt="board-trustees">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                <h4 class="card-title"><span>سعادة الشيخ   </span> / عبد الله بن سعيد أبو ملحة </h4>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!---->

                        <!--item-board-->
                        <!-- <div class="card card-board mt-5 pb-5">
                            <div class="row g-0 align-items-center">
                            <div class="col-md-2">
                                <img src="/assets/img/ssa-9.png" class="img-fluid img-board" alt="board-trustees">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                <h4 class="card-title"><span>م  </span> /عبد العزيز النغيثر </h4>
                                </div>
                            </div>
                            </div>
                        </div> -->
                        <!---->

            </div>

        </div>
    </section>
    <!--end-questions-->

@endsection
