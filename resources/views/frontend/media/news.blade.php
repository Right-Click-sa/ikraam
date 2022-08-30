@extends('frontend.layouts.master')

@section('title', __('News'))

@section('content')

  <!--start-new-->
    <section class="component-new pt-5 pb-5">
        <div class="container">
            <!--start-slider---->
                <div id="carouselExampleCaptions" class="coarousel-new carousel slide mb-5" data-bs-ride="false">

                    <div class="carousel-inner">
                        @foreach ($news as $key => $article)
                          <div class="carousel-item {{ $key == 0 ? 'active' : '' }} ">
                            <img src="/img/backend/media/news/{{ $article->image }}" class="img-new-boject d-block w-100" alt="new-poject">
                            <div class="carousel-captio mt-4">
                              <div class="row justify-content-between align-items-start">
                                <h5 class="col-md-5  text-capitalize">
                                  {{ $article->title }}
                                </h5>
                                <div class="col tx-icon-new fs-5">
                                    {{ $article->created_at->toDateString() }}
                                    <i class="far fa-clock "></i>
                                </div>
                              </div>
                              <pre class="pre-video col-md-12 fs-5 fw-semibold">
                                {{ $article->content }}
                              </pre>
                            </div>
                          </div>
                        @endforeach
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
                      @foreach ($news as $key => $article)
                          @if ($key != 0)
                            <div class="col d-flex mb-1">
                              <div class="card-new-new">
                                <img src="/img/backend/media/news/{{ $article->image }}" alt="new">
                                <h6 class="fs-4 fw-bold mt-2">
                                  {{ $article->title }}
                                </h6>
                                <p class="fs-7  mt-2">
                                  {{ $article->created_at->toDateString() }}
                                  <i class="far fa-clock "></i>
                                </p>
                              </div>
                            </div>
                          @endif
                      @endforeach
                    </div>
                </div>
            <!--grid-new-->
        </div>
    </section>
    <!--end-new-->

@endsection
