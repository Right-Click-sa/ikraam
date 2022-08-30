@extends('frontend.layouts.master')

@section('title', __('Gallery'))

@section('content')

  <!--start-pictures-->
    <section class="component-pictures pt-5 pb-5">
        <div class="container">
            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 g-4 justify-content-center mb-5">
                @foreach ($images as $key => $image)
                  <div class="item-card col">
                      <div class="card">
                          <img src="/img/backend/media/gallery/{{ $image->image }}" alt="img-pictures">
                      </div>
                  </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--end-pictures-->

@endsection
