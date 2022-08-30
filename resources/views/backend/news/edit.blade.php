
@extends('backend.layouts.app')

@section('title', __('Edit News'))

@section('content')
    <form action="{{ route('admin.media.news.update', $article) }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <x-backend.card>
            <x-slot name="header">
                @lang('Edit News')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.media.news')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div >

                  <!-- The News image -->
                  <div class="form-group row">
                    <label for="image" class="col-md-2 col-form-label">@lang('News Image')</label>

                    <div class="col-md-10">
                      <div class="col-md-4 offset-md-4 mx-auto">
                        <div class="image-upload row">
                          <label for="file-input1">
                              @if($article->image)
                                  <img src="/img/backend/media/news/{{ $article->image }}" style="cursor:pointer; vertical-align: middle; margin-left: auto; margin-right: auto; width: 100%;" name="image" id="image" />
                              @else
                                <div class="d-flex trips-uploaded-images flex-wrap justify-content-center align-content-center">
                                  <img src="/img/backend/upload-2.png" style="cursor:pointer; vertical-align: middle; margin-left: auto; margin-right: auto; width:300px; height: 200px;max-width: 100%;margin:0 auto; object-fit:contain;" name="image" id="image" />
                                </div>
                              @endif
                          </label>

                          <input id="file-input1" type="file" accept="image/*" onchange="readURL(this);" hidden name="image" />
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- title -->
                  <div class="form-group row">
                    <label for="title:en" class="col-md-2 col-form-label">@lang('title:en')</label>

                    <div class="col-md-10">
                        <input type="text" name="title:en" class="form-control" placeholder="@lang('title:en')" dir="ltr" required autofocus value="{{ old('title:en') ?? $article->{'title:en'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="title:ar" class="col-md-2 col-form-label">@lang('title:ar')</label>

                    <div class="col-md-10">
                        <input type="text" name="title:ar" class="form-control" placeholder="@lang('title:ar')" dir="rtl" required value="{{ old('title:ar') ?? $article->{'title:ar'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- content -->
                  <div class="form-group row">
                      <label for="content:en" class="col-md-2 col-form-label">@lang('content:en')</label>

                      <div class="col-md-10">
                          <textarea name="content:en" class="form-control" rows="8" cols="80" dir="ltr" placeholder="{{ __('content:en') }}" required>{{ old('content:en') ?? $article->{'content:en'} }}</textarea>
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="content:ar" class="col-md-2 col-form-label">@lang('content:ar')</label>

                      <div class="col-md-10">
                          <textarea name="content:ar" class="form-control" rows="8" cols="80" dir="rtl" placeholder="{{ __('content:ar') }}" required>{{  old('content:ar') ?? $article->{'content:ar'} }}</textarea>
                      </div>
                  </div>

                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary {{ app()->getLocale() == 'en' ? 'float-right' : 'float-left' }}" type="submit">@lang('Edit News')</button>
            </x-slot>
        </x-backend.card>
    </form>
@endsection

@push('after-scripts')
	<script type="text/javascript">
	    function readURL(input)
	    {
	        if (input.files && input.files[0]) {
	            var reader = new FileReader();

	            reader.onload = function (e)
	            {
	                $('#'+ input.name).attr('src', e.target.result);
	            }

	            reader.readAsDataURL(input.files[0]);
	        }
	    }
	</script>
@endpush
