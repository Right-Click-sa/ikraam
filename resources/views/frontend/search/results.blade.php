@extends('frontend.layouts.master')

@section('title', __('Search Results'))

@push('after-styles')
  <link  href="/assets/css/style-2.css" rel="stylesheet">
@endpush

@section('content')

  <!--serach-->
       <section class="component-search pt-5 pb-5">
          <div class="container">
             <h6 class="text-center title-search pt-3 pb-3">@lang('Search Results')</h6>

              @if ($results == null)
                <div class="component-defintion-search mt-4 p-4">
                  <p>@lang('Sorry, no matching data found... Try changing your search terms')</p>
                </div>
              @else
                @foreach ($results as $key => $result)
                  <div class="component-search-one pt-4 pb-4">
                      <div>
                          <a href="{{ $result->link }}" class="linke-more">
                            {{  app()->getLocale() == 'ar' ? $result->titleAr : $result->titleEn }}
                          </a>
                      </div>
                  </div>
                @endforeach
              @endif

          </div>
       </section>
      <!--end-search-->

@endsection
