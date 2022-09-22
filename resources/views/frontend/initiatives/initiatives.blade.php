@extends('frontend.layouts.master')

@section('title', __('Initiatives'))

@section('content')

  <!--start-initives-->
    <section class="component-initives pt-5  pb-5">
        <div class="container">
          <div class=" text-center">
            <strong class="m-auto text-initiatives-head title-login">
              @lang('Initiatives')
            </strong>
          </div>

          <div class="row justify-content-center m-auto mt-5">
              <div class="col-md-12 m-auto">
                  <!--initiatives-->
                  <div class="accordion component-initiatives" id="accordionExample">
                      @foreach ($initiatives as $key => $initiative)
                        <!--item1-->
                        <div class="accordion-item">
                          <h2 class="accordion-header col-md-6 m-auto" id="heading{{ $key }}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $key }}" aria-expanded="false" aria-controls="collapse{{ $key }}">

                              <h6>
                                <span class="span-initives">{{ $key + 1 }}-</span>
                                {{ $initiative->title }}
                               </h6>
                            </button>
                          </h2>
                          <div id="collapse{{ $key }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $key }}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row col-md-11 m-auto">
                                    <div class="col-md-5 col-box mx-3">
                                        <div class="box-title">
                                            <h6 class="title-accordion">@lang('The initiative') </h6>
                                            <p>
                                              {{ $initiative->initiative }}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-5 col-box mx-3">
                                        <div class="box-title">
                                            <h6 class="title-accordion">@lang('output') </h6>
                                            <ul>
                                              @foreach ($initiative->outputs as $key => $output)
                                                <li>{{ $output->output }}</li>
                                              @endforeach
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                          </div>
                        </div>
                      @endforeach

                  </div>
              </div>
          </div>
      </div>
    </section>
    <!--end-initives-->
@endsection
