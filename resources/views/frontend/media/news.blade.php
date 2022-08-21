@extends('frontend.layouts.master')

@section('title', __('News'))

@section('content')

  <!--start-new-->
    <section class="component-new pt-5 pb-5">
        <div class="container">
            <!--start-slider---->
                <div id="carouselExampleCaptions" class="coarousel-new carousel slide mb-5" data-bs-ride="false">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/assets/img/new.png" class="img-new-boject d-block w-100" alt="new-poject">
                            <div class="carousel-captio mt-4">
                            <div class="row justify-content-between align-items-start">
                                <h5 class="col-md-5  text-capitalize">
                                    @lang('Workshops to discuss challenges and develop the honoring sector for the dead')
                                </h5>
                                <div class="col tx-icon-new fs-5">
                                    @lang('January 2022')
                                <i class="far fa-clock "></i>
                                </div>
                            </div>
                            <pre class="pre-video col-md-12 fs-5 fw-semibold">
                                @lang('In order to contribute to the development of the honoring of the dead sector, in cooperation with the supervisory unit, a workshop was held specialized in honoring the dead at the level of the sectors of the Ministry of Municipal and Rural Affairs to discuss the challenges of the honoring of the dead sector. The workshop ended with a number of qualitative initiatives to develop the sector of honoring the dead.')
                            </pre>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/img/naw-2.jpeg" class="img-new-boject d-block w-100" alt="new-poject">
                            <div class="carousel-captio mt-4">
                            <div class="row justify-content-between align-items-start">
                                    <h5 class="col-md-5  text-capitalize">
                                        @lang('Visit Al-Ahsa Municipality to view the model cemetery model')
                                    </h5>
                                    <div class="col tx-icon-new fs-5">
                                        @lang('January 2022')
                                    <i class="far fa-clock "></i>
                                    </div>
                                </div>
                            <pre class="pre-video fs-5 fw-semibold">
                                @lang('To complement the role of the Ikram National Foundation in contributing to raising the level of services for the honoring of the dead, an agreement was reached with the Al-Ahsa Municipality to make a model for a cemetery and a model laundry.')
                            </pre>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/img/new-4.PNG" class="img-new-boject d-block w-100" alt="new-poject">
                            <div class="carousel-captio mt-4">
                            <div class=" row justify-content-between align-items-start">
                                    <h5 class="col-md-5  text-capitalize">
                                        @lang('Cooperation with the management of the supervisory unit to monitor visual distortion around graves')
                                    </h5>
                                    <div class="col tx-icon-new fs-5">
                                      @lang('January 2022')
                                    <i class="far fa-clock "></i>
                                    </div>
                            </div>
                            <pre class="pre-video fs-5 fw-semibold">
                                @lang('To complement the efforts of the National Honoring the Dead Foundation in organizing and developing the civil honoring the dead sector, the initiative to remove visual distortion was launched in cooperation with the Volunteer Department of the Supervisory Unit of the Ministry of Municipal and Rural Affairs and Housing by working with a group of volunteers, where visual distortion was monitored around cemeteries in three areas of Kingdom regions.')
                            </pre>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/img/new-5.jpg" class="img-new-boject d-block w-100" alt="new-poject">
                            <div class="carousel-captio mt-4">
                              <div class=" row justify-content-between align-items-start">
                                      <h5 class="col-md-5  text-capitalize">
                                          @lang('Visit King Saud Medical City')
                                      </h5>
                                      <div class="col tx-icon-new fs-5">

                                          @lang('January 2022')
                                      <i class="far fa-clock "></i>
                                      </div>
                              </div>
                              <pre class="pre-video fs-5 fw-semibold">
                                  @lang('A visit was made to the Department of Death Affairs in King Saud Medical City, and the existing practices were examined and ways of integration between the Medical City and the institution were discussed')
                              </pre>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                    <button class="carousel-control-prev mx-2" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>

                </div>
            <!--end-slider-->
            <!--grid-new-->
                <div class="mt-4 mb-5 component-new-new">
                    <div class="row row-cols-md-2 row-cols-lg-3 row-cols-1 g-5">
                            <div class="col d-flex mb-1">
                            <div class="card-new-new">
                                <img src="/assets/img/naw-2.jpeg" alt="new">
                                <h6 class="fs-4 fw-bold mt-2">
                                    @lang('Visit Al-Ahsa Municipality to view the model cemetery model')
                                  </h6>
                                <p class="fs-7  mt-2">
                                    @lang('January 2022')
                                    <i class="far fa-clock "></i>
                                </p>

                            </div>
                            </div>
                            <!---tow-new-->
                            <div class="col d-flex mb-1">
                            <div class="card-new-new">
                            <img src="/assets/img/new-4.PNG" alt="new">

                            <h6 class="fs-4 fw-bold mt-2">
                                 @lang('Cooperation with the management of the supervisory unit to monitor visual distortion around graves')
                            </h6>
                            <p class="fs-7  mt-2">
                                @lang('January 2022')
                                <i class="far fa-clock "></i>
                            </p>
                            </div>
                        </div>
                        <!--end-tow-->
                        <!--there-new-->
                        <div class="col d-flex mb-1">
                            <div class="card-new-new">
                            <img src="/assets/img/new-5.jpg" alt="new">
                            <h6 class="fs-4 fw-bold mt-2">
                                @lang('Visit King Saud Medical City')
                            </h6>
                            <p class="fs-7  mt-2">
                                @lang('January 2022')
                                <i class="far fa-clock "></i>
                            </p>
                            </div>
                        </div>
                        <!--end-there-project-->

                    </div>
                </div>
            <!--grid-new-->
        </div>
    </section>
    <!--end-new-->

@endsection
