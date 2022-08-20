@extends('backend.layouts.app')

@section('title', __('Create Trustee'))

@section('content')
    <form action="{{ route('admin.about.trustees.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Trustee')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.about.trustees')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div >

                  <!-- The Trustee image -->
                  <div class="form-group row">
                    <label for="image" class="col-md-2 col-form-label">@lang('Trustee Image')</label>

                    <div class="col-md-10">
                      <div class="col-md-4 offset-md-4 mx-auto">
                        <div class="image-upload row">
                          <label for="file-input1">
                              <div class="d-flex trips-uploaded-images flex-wrap justify-content-center align-content-center">
                                <img src="/img/backend/upload-2.png" style="cursor:pointer; vertical-align: middle; margin-left: auto; margin-right: auto; width:300px; height: 200px;max-width: 100%;margin:0 auto; object-fit:contain;" name="image" id="image" />
                              </div>
                          </label>

                          <input id="file-input1" type="file" accept="image/*" onchange="readURL(this);" hidden name="image" />
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="title:en" class="col-md-2 col-form-label">@lang('Trustee Title:en')</label>

                    <div class="col-md-10">
                        <input type="text" name="title:en" class="form-control" placeholder="@lang('Trustee Title:en')" dir="ltr" required autofocus>
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="title:ar" class="col-md-2 col-form-label">@lang('Trustee Title:ar')</label>

                    <div class="col-md-10">
                        <input type="text" name="title:ar" class="form-control" placeholder="@lang('Trustee Title:ar')" dir="rtl" required >
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- name -->
                  <div class="form-group row">
                    <label for="name:en" class="col-md-2 col-form-label">@lang('name:en')</label>

                    <div class="col-md-10">
                        <input type="text" name="name:en" class="form-control" placeholder="@lang('name:en')" dir="ltr" required autofocus>
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="name:ar" class="col-md-2 col-form-label">@lang('name:ar')</label>

                    <div class="col-md-10">
                        <input type="text" name="name:ar" class="form-control" placeholder="@lang('name:ar')" dir="rtl" required >
                    </div><!--col-->
                  </div><!--form-group-->

                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary {{ app()->getLocale() == 'en' ? 'float-right' : 'float-left' }}" type="submit">@lang('Create Trustee')</button>
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
