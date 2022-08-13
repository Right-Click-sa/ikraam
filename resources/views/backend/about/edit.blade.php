
@extends('backend.layouts.app')

@section('title', __('Edit About Us'))

@section('content')

    <form action="{{ route('admin.about.update', $about) }}" method="Post" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <x-backend.card>
            <x-slot name="header">
                @lang('Edit About Us')
            </x-slot>

            <x-slot name="body">
              <div >
                <!-- about image -->
                <div class="form-group row">
                  <label for="about_image" class="col-md-2 col-form-label">@lang('About Image')</label>

                  <div class="col-md-10">
                    <div class="col-md-4 offset-md-4 mx-auto">
                      <div class="image-upload row">
                        <label for="file-input1">
                          @if($about->about_image)
                              <img src="/img/backend/about/{{ $about->about_image }}" style="cursor:pointer; vertical-align: middle; margin-left: auto; margin-right: auto; width: 100%;" name="about_image" id="about_image" />
                          @else
                              <div class="d-flex trips-uploaded-images flex-wrap justify-content-center align-content-center">
                              <img src="/img/backend/upload-2.png" style="cursor:pointer; vertical-align: middle; margin-left: auto; margin-right: auto; width:300px; height: 200px;max-width: 100%;margin:0 auto; object-fit:contain;" name="about_image" id="about_image" />
                              </div>
                          @endif
                        </label>

                        <input id="file-input1" type="file" accept="image/*" onchange="readURL(this);" hidden name="about_image" />
                      </div>
                    </div>
                  </div>
                </div>

                  <!-- about -->
                  <div class="form-group row">
                      <label for="about:en" class="col-md-2 col-form-label">@lang('about:en')</label>

                      <div class="col-md-10">
                          <textarea name="about:en" class="form-control" rows="8" cols="80" placeholder="{{ __('about:en') }}" required>{{ old('about:en') ?? $about->{'about:en'} }}</textarea>
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="about:ar" class="col-md-2 col-form-label">@lang('about:ar')</label>

                      <div class="col-md-10">
                          <textarea name="about:ar" class="form-control" rows="8" cols="80" placeholder="{{ __('about:ar') }}" required>{{  old('about:ar') ?? $about->{'about:ar'} }}</textarea>
                      </div>
                  </div>

                  <!-- vision -->
                  <div class="form-group row">
                      <label for="vision:en" class="col-md-2 col-form-label">@lang('vision:en')</label>

                      <div class="col-md-10">
                          <textarea name="vision:en" class="form-control" rows="2" cols="80" placeholder="{{ __('vision:en') }}" required>{{ old('vision:en') ?? $about->{'vision:en'} }}</textarea>
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="vision:ar" class="col-md-2 col-form-label">@lang('vision:ar')</label>

                      <div class="col-md-10">
                          <textarea name="vision:ar" class="form-control" rows="2" cols="80" placeholder="{{ __('vision:ar') }}" required>{{  old('vision:ar') ?? $about->{'vision:ar'} }}</textarea>
                      </div>
                  </div>

                  <!-- message -->
                  <div class="form-group row">
                      <label for="message:en" class="col-md-2 col-form-label">@lang('message:en')</label>

                      <div class="col-md-10">
                          <textarea name="message:en" class="form-control" rows="4" cols="80" placeholder="{{ __('message:en') }}" required>{{ old('message:en') ?? $about->{'message:en'} }}</textarea>
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="message:ar" class="col-md-2 col-form-label">@lang('message:ar')</label>

                      <div class="col-md-10">
                          <textarea name="message:ar" class="form-control" rows="4" cols="80" placeholder="{{ __('message:ar') }}" required>{{  old('message:ar') ?? $about->{'message:ar'} }}</textarea>
                      </div>
                  </div>

                  <!-- goals image -->
                  <div class="form-group row">
                    <label for="goals_image" class="col-md-2 col-form-label">@lang('Goals Image')</label>

                    <div class="col-md-10">
                      <div class="col-md-4 offset-md-4 mx-auto">
                        <div class="image-upload row">
                          <label for="file-input2">
                            @if($about->goals_image)
                                <img src="/img/backend/about/{{ $about->goals_image }}" style="cursor:pointer; vertical-align: middle; margin-left: auto; margin-right: auto; width: 100%;" name="goals_image" id="goals_image" />
                            @else
                                <div class="d-flex trips-uploaded-images flex-wrap justify-content-center align-content-center">
                                <img src="/img/backend/upload-2.png" style="cursor:pointer; vertical-align: middle; margin-left: auto; margin-right: auto; width:300px; height: 200px;max-width: 100%;margin:0 auto; object-fit:contain;" name="goals_image" id="goals_image" />
                                </div>
                            @endif
                          </label>

                          <input id="file-input2" type="file" accept="image/*" onchange="readURL(this);" hidden name="goals_image" />
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- goals -->
                  <div class="form-group row">
                      <label for="goals:en" class="col-md-2 col-form-label">@lang('goals:en')</label>

                      <div class="col-md-10">
                          <textarea name="goals:en" class="form-control" rows="4" cols="80" placeholder="{{ __('goals:en') }}" required>{{ old('goals:en') ?? $about->{'goals:en'} }}</textarea>
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="goals:ar" class="col-md-2 col-form-label">@lang('goals:ar')</label>

                      <div class="col-md-10">
                          <textarea name="goals:ar" class="form-control" rows="4" cols="80" placeholder="{{ __('goals:ar') }}" required>{{  old('goals:ar') ?? $about->{'goals:ar'} }}</textarea>
                      </div>
                  </div>

                  <!-- strategy image -->
                  <div class="form-group row">
                    <label for="goals_image" class="col-md-2 col-form-label">@lang('Strategy Image')</label>

                    <div class="col-md-10">
                      <div class="col-md-4 offset-md-4 mx-auto">
                        <div class="image-upload row">
                          <label for="file-input3">
                            @if($about->strategy_image)
                                <img src="/img/backend/about/{{ $about->strategy_image }}" style="cursor:pointer; vertical-align: middle; margin-left: auto; margin-right: auto; width: 100%;" name="strategy_image" id="strategy_image" />
                            @else
                                <div class="d-flex trips-uploaded-images flex-wrap justify-content-center align-content-center">
                                <img src="/img/backend/upload-2.png" style="cursor:pointer; vertical-align: middle; margin-left: auto; margin-right: auto; width:300px; height: 200px;max-width: 100%;margin:0 auto; object-fit:contain;" name="strategy_image" id="strategy_image" />
                                </div>
                            @endif
                          </label>

                          <input id="file-input3" type="file" accept="image/*" onchange="readURL(this);" hidden name="strategy_image" />
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- strategy -->
                  <div class="form-group row">
                      <label for="strategy:en" class="col-md-2 col-form-label">@lang('strategy:en')</label>

                      <div class="col-md-10">
                          <textarea name="strategy:en" class="form-control" rows="8" cols="80" placeholder="{{ __('strategy:en') }}" required>{{ old('strategy:en') ?? $about->{'strategy:en'} }}</textarea>
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="strategy:ar" class="col-md-2 col-form-label">@lang('strategy:ar')</label>

                      <div class="col-md-10">
                          <textarea name="strategy:ar" class="form-control" rows="8" cols="80" placeholder="{{ __('strategy:ar') }}" required>{{  old('strategy:ar') ?? $about->{'strategy:ar'} }}</textarea>
                      </div>
                  </div>

                  <!-- About Values -->
                    <div class="form-group" id="values">
                      @if(count($about->values) > 0)
                        @foreach($about->values as $key => $value)
                            <div class="form-group row">
                                @if($key > 0)
                                  <label for="title[]" class="col-md-2 form-control-label px-0"></label>
                                @else
                                  <label for="title[]" class="col-md-2 col-form-label">@lang('Values')</label>
                                @endif
                                <div class="col-md-4">
                                    <input type="text" name="title:en[]" class="form-control" placeholder="@lang('titleEn')" value="{{  old('title:en') ?? $value->{'title:en'} }}" required >
                                </div><!--col-->

                                <div class="col-md-4">
                                    <input type="text" name="title:ar[]" class="form-control" placeholder="@lang('titleAr')" value="{{  old('title:ar') ?? $value->{'title:ar'} }}" required >
                                </div><!--col-->

                                <label for="" class="col-md-2 col-form-label"></label>
                                <label for="description[]" class="col-md-2 col-form-label"></label>

                                <div class="col-md-4">
                                    <input type="text" name="description:en[]" class="form-control" style="margin-top:10px;" placeholder="@lang('descriptionEn')" value="{{  old('description:en') ?? $value->{'description:en'} }}" required>
                                </div><!--col-->

                                <div class="col-md-4">
                                    <input type="text" name="description:ar[]" class="form-control" style="margin-top:10px;" placeholder="@lang('descriptionAr')" value="{{  old('description:ar') ?? $value->{'description:ar'} }}" required>
                                </div><!--col-->

                                @if($key > 0)
                                  <div class="col-md-2 ">
                                    <a href="#" onclick="destroy({{ $value->id }});" class="btn btn-danger">
                                      <i class="fas fa-trash"  title="@lang('Delete')"></i>
                                    </a>
                                  </div>
                                @else
                                  <div class="col-md-1 ">
                                    <a href="#" onclick="destroy({{ $value->id }});" class="btn btn-danger">
                                      <i class="fas fa-trash"  title="@lang('Delete')"></i>
                                    </a>
                                  </div>
                                  <div class="col-md-1 ">
                                    <input type="button" style="cursor: pointer; width: 100px;" value="@lang('Add New')" class="btn btn-primary" onclick="addValuesRow()">
                                  </div><!--col-->
                                @endif
                            </div><!--form-group-->
                        @endforeach

                      @else
                        <div class="form-group row">
                            <label for="title[]" class="col-md-2 col-form-label">@lang('Values')</label>

                            <div class="col-md-4">
                                <input type="text" name="title:en[]" class="form-control" placeholder="@lang('titleEn')" >
                            </div><!--col-->

                            <div class="col-md-4">
                                <input type="text" name="title:ar[]" class="form-control" placeholder="@lang('titleAr')" >
                            </div><!--col-->


                            <label for="" class="col-md-2 col-form-label"></label>
                            <label for="description[]" class="col-md-2 col-form-label"></label>

                            <div class="col-md-4">
                                <input type="text" name="description:en[]" class="form-control" style="margin-top:10px;" placeholder="@lang('descriptionEn')" >
                            </div><!--col-->

                            <div class="col-md-4">
                                <input type="text" name="description:ar[]" class="form-control" style="margin-top:10px;" placeholder="@lang('descriptionAr')" >
                            </div><!--col-->

                            <div class="col-md-2 ">
                              <input type="button w-100" style="cursor: pointer;" value="@lang('Add New')" class="btn btn-primary" onclick="addValuesRow()">
                            </div><!--col-->
                        </div><!--form-group-->
                      @endif
                    </div>

              </div>
          </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary {{ app()->getLocale() == 'en' ? 'float-right' : 'float-left' }}" type="submit">@lang('Edit About Us')</button>
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

      // Add Values Row
        function addValuesRow(){
            $('#values').append(
              '<div class="form-group row value-row-delete" >' +
                  '<label for="title[]" class="col-md-2 form-control-label px-0"></label>' +
                  '<div class="col-md-4">' +
                      '<input type="text" name="title:en[]" class="form-control " placeholder="@lang("titleEn")" required>' +
                  '</div>' +
                  '<div class="col-md-4">' +
                    '<input type="text" name="title:ar[]" class="form-control " placeholder="@lang("titleAr")" required>' +
                  '</div>' +
                  '<div class="col-md-2" >' +
                    '<a name="delete" href="javascript:;" data-method="delete" class="btn btn-danger delete-value ">' +
                        '<i class="fas fa-trash" title="@lang("Delete")"></i>' +
                    '</a>' +
                  '</div>' +
                  '<label for="description[]" class="col-md-2 form-control-label px-0"></label>' +
                  '<div class="col-md-4">' +
                      '<input type="text" name="description:en[]" class="form-control " style="margin-top:10px;" placeholder="@lang("descriptionEn")" required>' +
                  '</div>' +
                  '<div class="col-md-4">' +
                    '<input type="text" name="description:ar[]" class="form-control " style="margin-top:10px;" placeholder="@lang("descriptionAr")" required>' +
                  '</div>' +
              '<div>'
            );
        }

        // Delete Value Row
        $(document).on("click",".delete-value ", function () {
           $(this).closest('.value-row-delete').remove();
        });

        function destroy(value){
          Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {

              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });

              $.ajax({
                  url : "/admin/about-us/"+ value +"/value/destroy",
                  type: 'Delete',  // http method
                  success: function (data, status, xhr) {
                      if(data.errors) {
                          Swal.fire({
                            title: data.app_name,
                            text: data.errors,
                            icon: 'error',
                            timer: 3000,
                            timerProgressBar: true,
                            showClass: {
                              popup: 'animate__animated animate__fadeInDown',
                              backdrop: 'swal2-backdrop-show',
                              icon: 'swal2-icon-show'
                            },
                            hideClass: {
                              popup: 'animate__animated animate__fadeOutUp',
                              backdrop: 'swal2-backdrop-show',
                              icon: 'swal2-icon-show'
                            }
                          })
                      }
                      else {
                        Swal.fire({
                          title: data.app_name,
                          text: data.success,
                          icon: 'success',
                          timer: 3000,
                          timerProgressBar: true,
                          showClass: {
                            popup: 'animate__animated animate__fadeInDown',
                            backdrop: 'swal2-backdrop-show',
                            icon: 'swal2-icon-show'
                          },
                          hideClass: {
                            popup: 'animate__animated animate__fadeOutUp',
                            backdrop: 'swal2-backdrop-show',
                            icon: 'swal2-icon-show'
                          }
                        },

                      );

                        setTimeout(function () {
                          location.reload(true);
                        }, 3000);

                      }
                  },
                  error: function (jqXhr, textStatus, errorMessage) {
                      // console.log(errorMessage);
                      // console.log(jqXhr);
                  }

                  });

            }
          })

        }
	</script>
@endpush
