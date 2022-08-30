@extends('backend.layouts.app')

@section('title', __('Gallery'))

@push('after-styles')
  <style media="screen">
    .project-uploaded-images img{
      max-width: 100%; width: 200px; height: 100px;object-fit: cover; padding: 8px;
    }

    .project-edit-images {
        width: 200px;
        max-width: 100%;
        position: relative;
    }

    .delete-icon-wrapper{
        position: absolute;
        top: 0
    }
  </style>
@endpush

@section('content')
  <form action="{{ route('admin.media.gallery.update') }}" method="Post" enctype="multipart/form-data">
      @method('patch')
      @csrf
      <x-backend.card>
          <x-slot name="header">
              @lang('Gallery')
          </x-slot>

          <x-slot name="body">
            <div class="row mt-4">
                <div class="col">

                  <div class="form-group row">
                      <label for="images[]" class="col-md-2 col-form-label">@lang('Gallery Images')</label>
                          {{-- {{ html()->label(__('project_gallery.backend.table.images'))->class('col-md-2 form-control-label')->for('images[]') }} --}}
                    <div class="col-md-10">
                      <div class="col-md-12 offset-md-12">
                        <div class="image-upload row">
                          <label for="images" class="imagePreview w-100" >
                            <div class="d-flex project-uploaded-images flex-wrap justify-content-center align-content-center">
                              <div class="project-edit-images">
                                <img src="/img/backend/upload-2.png" style="cursor:pointer; object-fit: contain; vertical-align: middle; margin-left: auto; margin-right: auto; width: 100%;" name="images[]"  />
                              </div>

                                @if($images)
                                  @foreach($images as $image)
                                    <div class="project-edit-images">
                                      <img src="/img/backend/media/gallery/{{ $image->image }}" style="cursor:pointer; vertical-align: middle; margin-left: auto; margin-right: auto; width: 100%;" name="images[]"  />
                                      <div class="delete-icon-wrapper">
                                          <a href="#" onclick="destroy({{ $image->id }});" class="btn btn-danger">
                                            <i class="fas fa-trash"  title="@lang('Delete')"></i>
                                          </a>
                                      </div>
                                    </div>
                                  @endforeach
                                @else
                                    <img src="/img/backend/upload-2.png" style="cursor:pointer; vertical-align: middle; margin-left: auto; margin-right: auto; width:300px; height: 200px;max-width: 100%;margin:0 auto; object-fit:contain;" name="images[]"  id="imagePreview" />
                                @endif
                            </div>
                          </label>

                          <input id="images" type="file"  accept="image/*"  onchange="readURL(this);" hidden name="images[]" multiple />
                        </div>
                      </div>
                    </div>
                  </div>

                </div><!--col-->
            </div><!--row-->
          </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary {{ app()->getLocale() == 'en' ? 'float-right' : 'float-left' }}" type="submit">@lang('Update Gallery')</button>
            </x-slot>
        </x-backend.card>
    </form>


@endsection

@push('after-scripts')
	<script type="text/javascript">
      function readURL(input)
        {
          if (input.files && input.files[0]) {

            for (i = 0; i < input.files.length; i++) {
                var reader = new FileReader();

                reader.onload = function(e)
                {

                    $('.project-uploaded-images').append('<div class="project-edit-images remove"><img class="view" style="cursor:pointer; vertical-align: middle; margin-left: auto; margin-right: auto; width: 100%;" src=' + e.target.result + '>' + `<div class="delete-icon-wrapper">
                        <a name="delete" href = "#" data-method="delete"
                            class="btn btn-danger">
                            <i class="fas fa-trash" title="@lang('buttons.general.crud.delete')"></i>
                        </a>
                    </div>` + '</div>');

                    $(".delete-icon-wrapper").click(function(){
                       $(this).closest('.remove').remove();

                      if($('.remove').length < 1)
                      {
                          $('#imagePreview').show();
                      }
                    });
                }
                reader.readAsDataURL(input.files[i]);
            }
          }
        };

        $(document).ready(function()
        {
          if($('.remove').length < 1 && $('.project-edit-images').length < 1)
          {
            $('.project-uploaded-images').append('<img src="/img/backend/upload-2.png" style="cursor:pointer; vertical-align: middle; margin-left: auto; margin-right: auto; width:300px; height: 200px;max-width: 100%;margin:0 auto; object-fit:contain;" name="images[]"  id="imagePreview" />');
          }
        });

        function destroy(image){
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
                  url : "/admin/media/gallery/"+ image +"/image/destroy",
                  type: 'Delete',  // http method
                  success: function (data, status, xhr) {
                      if(data.errors) {
                          Swal.fire({
                            title: data.app_name,
                            text: data.errors,
                            icon: 'error',
                            timer: 2000,
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
                          timer: 2000,
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
                      }, 2000);

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
