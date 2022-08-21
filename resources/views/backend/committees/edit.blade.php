
@extends('backend.layouts.app')

@section('title', __('Edit Committee'))

@section('content')
    <form action="{{ route('admin.about.committees.update', $committee) }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <x-backend.card>
            <x-slot name="header">
                @lang('Edit Committee')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.about.committees')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div >

                  <!-- The Chairman Image -->
                  <div class="form-group row">
                    <label for="image" class="col-md-2 col-form-label">@lang('Chairman Image')</label>

                    <div class="col-md-10">
                      <div class="col-md-4 offset-md-4 mx-auto">
                        <div class="image-upload row">
                          <label for="file-input1">
                              @if($committee->image)
                                  <img src="/img/backend/about/committees/{{ $committee->image }}" style="cursor:pointer; vertical-align: middle; margin-left: auto; margin-right: auto; width: 100%;" name="image" id="image" />
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

                  <div class="form-group row">
                    <label for="chairman:en" class="col-md-2 col-form-label">@lang('chairman:en')</label>

                    <div class="col-md-10">
                        <input type="text" name="chairman:en" class="form-control" placeholder="@lang('chairman:en')" dir="ltr" required autofocus value="{{ old('chairman:en') ?? $committee->{'chairman:en'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="chairman:ar" class="col-md-2 col-form-label">@lang('chairman:ar')</label>

                    <div class="col-md-10">
                        <input type="text" name="chairman:ar" class="form-control" placeholder="@lang('chairman:ar')" dir="rtl" required value="{{ old('chairman:ar') ?? $committee->{'chairman:ar'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- name -->
                  <div class="form-group row">
                    <label for="committee_name:en" class="col-md-2 col-form-label">@lang('committee_name:en')</label>

                    <div class="col-md-10">
                        <input type="text" name="committee_name:en" class="form-control" placeholder="@lang('committee_name:en')" dir="ltr" required value="{{ old('committee_name:en') ?? $committee->{'committee_name:en'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="committee_name:ar" class="col-md-2 col-form-label">@lang('committee_name:ar')</label>

                    <div class="col-md-10">
                        <input type="text" name="committee_name:ar" class="form-control" placeholder="@lang('committee_name:ar')" dir="rtl" required value="{{ old('committee_name:ar') ?? $committee->{'committee_name:ar'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  {{-- Goals --}}
                  <div class="form-group row">
                    <label for="goal:en" class="col-md-2 col-form-label">@lang('goal:en')</label>

                    <div class="col-md-10">
                        <input type="text" name="goal:en" class="form-control" placeholder="@lang('goal:en')" dir="ltr" value="{{ old('goal:en') ?? $committee->{'goal:en'} }}" required>
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="goal:ar" class="col-md-2 col-form-label">@lang('goal:ar')</label>

                    <div class="col-md-10">
                        <input type="text" name="goal:ar" class="form-control" placeholder="@lang('goal:ar')" dir="rtl" value="{{ old('goal:ar') ?? $committee->{'goal:ar'} }}" required >
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- Committee Task -->
                    <div class="form-group" id="tasks">
                      @foreach($committee->tasks as $key => $task)
                          <div class="form-group row">
                              @if($key > 0)
                                <label for="task[]" class="col-md-2 form-control-label px-0"></label>
                              @else
                                <label for="task[]" class="col-md-2 col-form-label">@lang('Committee Tasks')</label>
                              @endif
                              <div class="col-md-4">
                                  <input type="text" name="task:en[]" class="form-control" placeholder="@lang('task:en')" value="{{  old('task:en') ?? $task->{'task:en'} }}" required >
                              </div><!--col-->

                              <div class="col-md-4">
                                  <input type="text" name="task:ar[]" class="form-control" placeholder="@lang('task:ar')" value="{{  old('task:ar') ?? $task->{'task:ar'} }}" required >
                              </div><!--col-->

                              @if($key > 0)
                                <div class="col-md-2 ">
                                  <a href="#" onclick="destroy({{ $task->id }});" class="btn btn-danger">
                                    <i class="fas fa-trash"  title="@lang('Delete')"></i>
                                  </a>
                                </div>
                              @else
                                <div class="col-md-2 ">
                                  <input type="button w-100" style="cursor: pointer;" value="@lang('Add New')" class="btn btn-primary" onclick="addTasksRow()">
                                </div><!--col-->
                              @endif
                          </div><!--form-group-->
                      @endforeach
                    </div>

                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary {{ app()->getLocale() == 'en' ? 'float-right' : 'float-left' }}" type="submit">@lang('Edit Committee')</button>
            </x-slot>
        </x-backend.card>
    </form>
@endsection

@push('after-scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.8.1/sweetalert2.all.min.js"></script>

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

      // Add Tasks Row
        function addTasksRow(){
            $('#tasks').append(
              '<div class="form-group row task-row-delete" >' +
                  '<label for="task[]" class="col-md-2 form-control-label px-0"></label>' +
                  '<div class="col-md-4">' +
                      '<input type="text" name="task:en[]" class="form-control " placeholder="@lang("task:en")" required>' +
                  '</div>' +
                  '<div class="col-md-4">' +
                    '<input type="text" name="task:ar[]" class="form-control " placeholder="@lang("task:ar")" required>' +
                  '</div>' +
                  '<div class="col-md-2" >' +
                    '<a name="delete" href="javascript:;" data-method="delete" class="btn btn-danger delete-task ">' +
                        '<i class="fas fa-trash" title="@lang("Delete")"></i>' +
                    '</a>' +
                  '</div>' +
              '<div>'
            );
        }

        // Delete Committee Task Row
        $(document).on("click",".delete-task ", function () {
           $(this).closest('.task-row-delete').remove();
        });

        function destroy(task){
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
                  url : "/admin/about-us/committees/"+ task +"/task/destroy",
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
