@extends('backend.layouts.app')

@section('title', __('Create Committee'))

@section('content')
    <form action="{{ route('admin.about.committees.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Committee')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.about.committees')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div >

                  <!-- The Chairman image -->
                  <div class="form-group row">
                    <label for="image" class="col-md-2 col-form-label">@lang('Chairman Image')</label>

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

                  <!-- chairman -->
                  <div class="form-group row">
                    <label for="chairman:en" class="col-md-2 col-form-label">@lang('chairman:en')</label>

                    <div class="col-md-10">
                      <input type="text" name="chairman:en" class="form-control" placeholder="@lang('chairman:en')" dir="ltr" required >
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="chairman:ar" class="col-md-2 col-form-label">@lang('chairman:ar')</label>

                    <div class="col-md-10">
                      <input type="text" name="chairman:ar" class="form-control" placeholder="@lang('chairman:ar')" dir="rtl" required >
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="committee_name:en" class="col-md-2 col-form-label">@lang('committee_name:en')</label>

                    <div class="col-md-10">
                        <input type="text" name="committee_name:en" class="form-control" placeholder="@lang('committee_name:en')" dir="ltr" required autofocus>
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="committee_name:ar" class="col-md-2 col-form-label">@lang('committee_name:ar')</label>

                    <div class="col-md-10">
                        <input type="text" name="committee_name:ar" class="form-control" placeholder="@lang('committee_name:ar')" dir="rtl" required >
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="goal:en" class="col-md-2 col-form-label">@lang('goal:en')</label>

                    <div class="col-md-10">
                        <input type="text" name="goal:en" class="form-control" placeholder="@lang('goal:en')" dir="ltr" required>
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="goal:ar" class="col-md-2 col-form-label">@lang('goal:ar')</label>

                    <div class="col-md-10">
                        <input type="text" name="goal:ar" class="form-control" placeholder="@lang('goal:ar')" dir="rtl" required >
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- Committee Tasks -->
                    <div class="form-group" id="tasks">
                        <div class="form-group row">
                            <label for="task[]" class="col-md-2 col-form-label">@lang('Committee Tasks')</label>

                            <div class="col-md-4">
                                <input type="text" name="task:en[]" class="form-control" placeholder="@lang('task:en')" required>
                            </div><!--col-->

                            <div class="col-md-4">
                                <input type="text" name="task:ar[]" class="form-control" placeholder="@lang('task:ar')" required>
                            </div><!--col-->

                            <div class="col-md-2 ">
                              <input type="button w-100" style="cursor: pointer;" value="@lang('Add New')" class="btn btn-primary" onclick="addTasksRow()">
                            </div><!--col-->
                        </div><!--form-group-->
                    </div>


                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary {{ app()->getLocale() == 'en' ? 'float-right' : 'float-left' }}" type="submit">@lang('Create Committee')</button>
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
	</script>
@endpush
