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
              @foreach ($trustees as $key => $trustee)
                <!--item-board-->
                <div class="card card-board mt-5 pb-5">
                  <div class="row g-0 align-items-center">
                    <div class="col-md-2">
                      <img src="/img/backend/about/trustees/{{ $trustee->image }}" class="img-fluid img-board" alt="board-trustees">
                    </div>
                    <div class="col-md-9">
                      <div class="card-body">
                        <h4 class="card-title"><span>{{ $trustee->title }} </span>/ {{ $trustee->name }} </h4>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>

        </div>
    </section>
    <!--end-questions-->

@endsection
