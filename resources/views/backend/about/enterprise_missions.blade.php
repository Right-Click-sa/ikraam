
@extends('backend.layouts.app')

@section('title', __('Enterprise missions and work'))

@section('content')

    <form action="{{ route('admin.about.enterprise-missions.update', $about) }}" method="Post" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <x-backend.card>
            <x-slot name="header">
                @lang('Enterprise missions and work')
            </x-slot>

            <x-slot name="body">
              <div >
                <!-- Enterprise missions image -->
                <div class="form-group row">
                  <label for="mission_image" class="col-md-2 col-form-label">@lang('Enterprise Missions Image')</label>

                  <div class="col-md-10">
                    <div class="col-md-4 offset-md-4 mx-auto">
                      <div class="image-upload row">
                        <label for="file-input1">
                          @if($about->mission_image)
                              <img src="/img/backend/about/{{ $about->mission_image }}" style="cursor:pointer; vertical-align: middle; margin-left: auto; margin-right: auto; width: 100%;" name="mission_image" id="mission_image" />
                          @else
                              <div class="d-flex trips-uploaded-images flex-wrap justify-content-center align-content-center">
                              <img src="/img/backend/upload-2.png" style="cursor:pointer; vertical-align: middle; margin-left: auto; margin-right: auto; width:300px; height: 200px;max-width: 100%;margin:0 auto; object-fit:contain;" name="mission_image" id="mission_image" />
                              </div>
                          @endif
                        </label>

                        <input id="file-input1" type="file" accept="image/*" onchange="readURL(this);" hidden name="mission_image" />
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Enterprise work image -->
                <div class="form-group row">
                  <label for="work_image" class="col-md-2 col-form-label">@lang('Enterprise Work Image')</label>

                  <div class="col-md-10">
                    <div class="col-md-4 offset-md-4 mx-auto">
                      <div class="image-upload row">
                        <label for="file-input2">
                          @if($about->work_image)
                              <img src="/img/backend/about/{{ $about->work_image }}" style="cursor:pointer; vertical-align: middle; margin-left: auto; margin-right: auto; width: 100%;" name="work_image" id="work_image" />
                          @else
                              <div class="d-flex trips-uploaded-images flex-wrap justify-content-center align-content-center">
                              <img src="/img/backend/upload-2.png" style="cursor:pointer; vertical-align: middle; margin-left: auto; margin-right: auto; width:300px; height: 200px;max-width: 100%;margin:0 auto; object-fit:contain;" name="work_image" id="work_image" />
                              </div>
                          @endif
                        </label>

                        <input id="file-input2" type="file" accept="image/*" onchange="readURL(this);" hidden name="work_image" />
                      </div>
                    </div>
                  </div>
                </div>

              </div>
          </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary {{ app()->getLocale() == 'en' ? 'float-right' : 'float-left' }}" type="submit">@lang('Update Enterprise missions')</button>
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
