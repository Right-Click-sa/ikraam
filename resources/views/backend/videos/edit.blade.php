
@extends('backend.layouts.app')

@section('title', __('Edit Video'))

@section('content')
    <form action="{{ route('admin.media.videos.update', $video) }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <x-backend.card>
            <x-slot name="header">
                @lang('Edit Video')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.media.videos')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div >
                  <!-- title -->
                  <div class="form-group row">
                    <label for="title:en" class="col-md-2 col-form-label">@lang('title:en')</label>

                    <div class="col-md-10">
                        <input type="text" name="title:en" class="form-control" placeholder="@lang('title:en')" dir="ltr" required autofocus value="{{ old('title:en') ?? $video->{'title:en'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="title:ar" class="col-md-2 col-form-label">@lang('title:ar')</label>

                    <div class="col-md-10">
                        <input type="text" name="title:ar" class="form-control" placeholder="@lang('title:ar')" dir="rtl" required  value="{{ old('title:ar') ?? $video->{'title:ar'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- link -->
                  <div class="form-group row">
                    <label for="link" class="col-md-2 col-form-label">@lang('Video link')</label>

                    <div class="col-md-10">
                        <input type="text" name="link" class="form-control" placeholder="@lang('Video link')" required  value="{{ old('link') ?? $video->{'link'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary {{ app()->getLocale() == 'en' ? 'float-right' : 'float-left' }}" type="submit">@lang('Edit Video')</button>
            </x-slot>
        </x-backend.card>
    </form>
@endsection
