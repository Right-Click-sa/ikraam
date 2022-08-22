@extends('frontend.layouts.master')

@section('title', __('Committees'))

@section('content')

  <!--start-committees-->
    <section class="component-questions pt-5  pb-5">
        <div class="container">
            <div class="text-center">
                <strong class=" text-initiatives-head title-login">
                    @lang('The purpose of the committees')
                </strong>
                <p class="p-text-committies col-md-8 m-auto mt-3">
                  @lang('These committees act as auxiliary arms to the Board of Trustees in the process of monitoring, studying, and recommending issues related to the Board of Trustees.')
                </p>
                <div class="col-md-6 m-auto linke-committees mt-4 d-flex justify-content-between">
                  @foreach ($committees as $key => $committee)
                    <a href="#committees{{ $key }}"> {{ $committee->committee_name }} </a>
                  @endforeach
                </div>
            </div>

            <!--grid-board-committees-->
            <div class="component-board">
                @foreach ($committees as $key => $committee)
                  <!--item-board-->
                  <div class="card-board-committees mt-5 pb-5" id="committees{{ $key }}">
                    <div class="text-center">
                        <strong class="title-login">
                            {{ $committee->committee_name }}
                        </strong>
                    </div>

                    <div class="defintion-committees mt-4">
                        <div class="text-center">
                            <img src="/img/backend/about/committees/{{ $committee->image }}" class="img-fluid img-board" alt="board-trustees">
                            <div class="card-body mt-3">
                                <strong class="card-title">@lang('Chairman')</strong>

                                <h4 class="card-text">{{ $committee->chairman }}  </h4>
                            </div>
                        </div>
                      <div class="component-target">
                          <strong class="title-login"> @lang('Goal') :</strong>
                          <p class="definition-p">
                            {{ $committee->goal }}
                          </p>
                          <strong class="title-login"> @lang('Committee Tasks') :</strong>
                          <ul class="ul-list-disc">
                            @foreach ($committee->tasks as $key => $task)
                              <li class="definition-p mb-3">{{ $task->task }}</li>
                            @endforeach
                          </ul>
                      </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--end-committees-->

@endsection
