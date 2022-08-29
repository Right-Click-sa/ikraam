@extends('backend.layouts.app')

@section('title', __('Create Association'))

@section('content')
    <form action="{{ route('admin.associations.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Association')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.associations')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div >

                  <!-- The Association image -->
                  <div class="form-group row">
                    <label for="image" class="col-md-2 col-form-label">@lang('Association Image')</label>

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

                  <!-- Association user -->
                  <div class="form-group row">
                      <label for="user_id" class="col-md-2 col-form-label">@lang('Association User')</label>

                      <div class="col-md-10">
                          <select name="user_id" class="form-control" required >
                              <option value="">@lang('Association User')</option>
                            @foreach ($users as $key => $user)
                              <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                          </select>
                      </div>
                  </div><!--form-group-->

                  <!-- Association name -->
                  <div class="form-group row">
                    <label for="name:en" class="col-md-2 col-form-label">@lang('association_name:en')</label>

                    <div class="col-md-10">
                      <input type="text" name="name:en" class="form-control" placeholder="@lang('association_name:en')" dir="ltr" required autofocus>
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="name:ar" class="col-md-2 col-form-label">@lang('association_name:ar')</label>

                    <div class="col-md-10">
                      <input type="text" name="name:ar" class="form-control" placeholder="@lang('association_name:ar')" dir="rtl" required >
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- chairman -->
                  <div class="form-group row">
                    <label for="chairman:en" class="col-md-2 col-form-label">@lang('association_chairman:en')</label>

                    <div class="col-md-10">
                      <input type="text" name="chairman:en" class="form-control" placeholder="@lang('association_chairman:en')" dir="ltr" required >
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="chairman:ar" class="col-md-2 col-form-label">@lang('association_chairman:ar')</label>

                    <div class="col-md-10">
                      <input type="text" name="chairman:ar" class="form-control" placeholder="@lang('association_chairman:ar')" dir="rtl" required >
                    </div><!--col-->
                  </div><!--form-group-->

                  {{-- objective --}}
                  <div class="form-group row">
                    <label for="objective:en" class="col-md-2 col-form-label">@lang('objective:en')</label>

                    <div class="col-md-10">
                        <input type="text" name="objective:en" class="form-control" placeholder="@lang('objective:en')" dir="ltr" required>
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="objective:ar" class="col-md-2 col-form-label">@lang('objective:ar')</label>

                    <div class="col-md-10">
                        <input type="text" name="objective:ar" class="form-control" placeholder="@lang('objective:ar')" dir="rtl" required >
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- city -->
                  <div class="form-group row">
                    <label for="city:en" class="col-md-2 col-form-label">@lang('city:en')</label>

                    <div class="col-md-10">
                      <input type="text" name="city:en" class="form-control" placeholder="@lang('city:en')" dir="ltr" required >
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="city:ar" class="col-md-2 col-form-label">@lang('city:ar')</label>

                    <div class="col-md-10">
                      <input type="text" name="city:ar" class="form-control" placeholder="@lang('city:ar')" dir="rtl" required >
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- location -->
                  <div class="form-group row">
                    <label for="location:en" class="col-md-2 col-form-label">@lang('location:en')</label>

                    <div class="col-md-10">
                      <input type="text" name="location:en" class="form-control" placeholder="@lang('location:en')" dir="ltr" required >
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="location:ar" class="col-md-2 col-form-label">@lang('location:ar')</label>

                    <div class="col-md-10">
                      <input type="text" name="location:ar" class="form-control" placeholder="@lang('location:ar')" dir="rtl" required >
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- executive_director -->
                  <div class="form-group row">
                    <label for="executive_director:en" class="col-md-2 col-form-label">@lang('executive_director:en')</label>

                    <div class="col-md-10">
                      <input type="text" name="executive_director:en" class="form-control" placeholder="@lang('executive_director:en')" dir="ltr" required >
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="executive_director:ar" class="col-md-2 col-form-label">@lang('executive_director:ar')</label>

                    <div class="col-md-10">
                      <input type="text" name="executive_director:ar" class="form-control" placeholder="@lang('executive_director:ar')" dir="rtl" required >
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- administrative_officer -->
                  <div class="form-group row">
                    <label for="administrative_officer:en" class="col-md-2 col-form-label">@lang('administrative_officer:en')</label>

                    <div class="col-md-10">
                      <input type="text" name="administrative_officer:en" class="form-control" placeholder="@lang('administrative_officer:en')" dir="ltr" required >
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="administrative_officer:ar" class="col-md-2 col-form-label">@lang('administrative_officer:ar')</label>

                    <div class="col-md-10">
                      <input type="text" name="administrative_officer:ar" class="form-control" placeholder="@lang('administrative_officer:ar')" dir="rtl" required >
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- email -->
                  <div class="form-group row">
                    <label for="email" class="col-md-2 col-form-label">@lang('Email')</label>

                    <div class="col-md-10">
                      <input type="email" name="email" class="form-control" placeholder="@lang('Email')"  required >
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- phone -->
                  <div class="form-group row">
                    <label for="number" class="col-md-2 col-form-label">@lang('Phone')</label>

                    <div class="col-md-10">
                      <input type="number" name="number" class="form-control" placeholder="@lang('Phone')"  required >
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- founding -->
                  <div class="form-group row">
                    <label for="founding" class="col-md-2 col-form-label">@lang('Founding')</label>

                    <div class="col-md-10">
                      <input type="number" name="founding" class="form-control" placeholder="@lang('Founding')" required >
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- license -->
                  <div class="form-group row">
                    <label for="license" class="col-md-2 col-form-label">@lang('License')</label>

                    <div class="col-md-10">
                      <input type="text" name="license" class="form-control" placeholder="@lang('License')"  required >
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- administrative_officer_number -->
                  <div class="form-group row">
                    <label for="administrative_officer_number" class="col-md-2 col-form-label">@lang("Administrative officer's number")</label>

                    <div class="col-md-10">
                      <input type="number" name="administrative_officer_number" class="form-control" placeholder="@lang("Administrative officer's number")" required >
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- file -->
                  <div class="form-group row mb-3">
                    <label for="file" class="col-md-2 col-form-label">@lang('Upload the association certificate')</label>

                    <div class="col-md-10">
                        <input class="form-control " id="file" type="file" name="file" accept=".pdf,docx,doc">
                    </div>
                  </div>

                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary {{ app()->getLocale() == 'en' ? 'float-right' : 'float-left' }}" type="submit">@lang('Create Association')</button>
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
