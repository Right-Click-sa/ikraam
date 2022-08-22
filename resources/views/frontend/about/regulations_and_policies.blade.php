@extends('frontend.layouts.master')

@section('title', __('Regulations and Policies'))

@section('content')

  <!--start-initives-->
    <section class="component-initives pt-5  pb-5">
        <div class="container">
           <div class="text-center">
              <strong class=" m-auto  text-initiatives-head title-login">
                @lang('Regulations and Policies')
              </strong>
           </div>

            <div class="row justify-content-center m-auto mt-5">
                <div class="col-md-12 m-auto">

                    <!--initiatives-->
                    <div class="accordion component-initiatives" id="accordionExample">

                        @foreach ($policies as $key => $policy)
                          <!--item -->
                          <div class="accordion-item">
                          <h2 class="accordion-header col-md-6 m-auto" id="heading{{ $key }}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $key }}" aria-expanded="false" aria-controls="collapse{{ $key }}">

                              <h6>
                                <span class="span-initives">{{ $key+1 }}-</span>
                                {{ $policy->policy }}
                               </h6>
                            </button>
                          </h2>
                          <div id="collapse{{ $key }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $key }}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="col-md-8 m-auto text-center">
                                  @if ($policy->file)
                                    <a href="/img/backend/about/policies/{{ $policy->file }}" download class="btn-policies btn mb-2">
                                      <span> @lang('Download File PDF')</span>
                                      <img src="/assets/img/Icon-download.png" alt="download">
                                    </a>
                                  @endif
                                  @if ($policy->content)

                                    <p class="p-policies">
                                      {{ $policy->content }}
                                    </p>
                                  @endif
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
