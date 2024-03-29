@extends('frontend.layouts.master')

@section('title', __('Videos'))

@section('content')

  <!--start-video-->
    <section class="component-video pt-5 pb-5">
        <div class="container">
            <div class="row-video row  row-cols-lg-2 row-cols-md-2 row-cols-1 g-5">
              @foreach ($videos as $key => $video)
                <div class="col d-flex mb-1">
                    <div class="card-new-video">
                      <div class="video-datee">
                        <div class="div-button div-video-tow">
                            <a  href="{{ $video->link }}" id="myBtn" class="video-btn"  target="iframe1" data-fancybox="gallery"></a>
                        </div>
                      </div>
                      <div class="card-body-video">
                        <div>
                          <h6 class="text-center">{{ $video->title }}</h6>
                          <span class="d-bloke ">{{ $video->created_at->toDateString() }}</span>
                        </div>
                      </div>
                    </div>
                </div>
              @endforeach

            </div>
        </div>

    </section>
    <!--end-pictures-->

    <!-- Modal -->
    {{-- <div class="modal fade model-video" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="video-date">
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
            </div>
        </div>
        </div>
    </div> --}}

@endsection
