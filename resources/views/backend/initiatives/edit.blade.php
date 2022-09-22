
@extends('backend.layouts.app')

@section('title', __('Edit Initiative'))

@section('content')
    <form action="{{ route('admin.initiatives.update', $initiative) }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <x-backend.card>
            <x-slot name="header">
                @lang('Edit Initiative')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.initiatives')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div >
                  <!-- title -->
                  <div class="form-group row">
                    <label for="title:en" class="col-md-2 col-form-label">@lang('title:en')</label>

                    <div class="col-md-10">
                        <input type="text" name="title:en" class="form-control" placeholder="@lang('title:en')" dir="ltr" required autofocus value="{{ old('title:en') ?? $initiative->{'title:en'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="title:ar" class="col-md-2 col-form-label">@lang('title:ar')</label>

                    <div class="col-md-10">
                        <input type="text" name="title:ar" class="form-control" placeholder="@lang('title:ar')" dir="rtl" required value="{{ old('title:ar') ?? $initiative->{'title:ar'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- initiative -->
                  <div class="form-group row">
                      <label for="initiative:en" class="col-md-2 col-form-label">@lang('initiative:en')</label>

                      <div class="col-md-10">
                          <textarea name="initiative:en" class="form-control" rows="8" cols="80" placeholder="{{ __('initiative:en') }}" dir="ltr"> {{ old('initiative:en') ?? $initiative->{'initiative:en'} }}</textarea>
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="initiative:ar" class="col-md-2 col-form-label">@lang('initiative:ar')</label>

                      <div class="col-md-10">
                          <textarea name="initiative:ar" class="form-control" rows="8" cols="80" placeholder="{{ __('initiative:ar') }}" dir="rtl"> {{ old('initiative:ar') ?? $initiative->{'initiative:ar'} }}</textarea>
                      </div>
                  </div>

                  <!-- Initiative Outputs -->
                    <div class="form-group" id="outputs">
                      @foreach($initiative->outputs as $key => $output)
                          <div class="form-group row">
                              @if($key > 0)
                                <label for="output[]" class="col-md-2 form-control-label px-0"></label>
                              @else
                                <label for="output[]" class="col-md-2 col-form-label">@lang('Initiative Outputs')</label>
                              @endif
                              <div class="col-md-4">
                                  <input type="text" name="output:en[]" class="form-control" placeholder="@lang('output:en')" value="{{  old('output:en') ?? $output->{'output:en'} }}" required >
                              </div><!--col-->

                              <div class="col-md-4">
                                  <input type="text" name="output:ar[]" class="form-control" placeholder="@lang('output:ar')" value="{{  old('output:ar') ?? $output->{'output:ar'} }}" required >
                              </div><!--col-->

                              @if($key > 0)
                                <div class="col-md-2 ">
                                  <a href="#" onclick="destroy({{ $output->id }});" class="btn btn-danger">
                                    <i class="fas fa-trash"  title="@lang('Delete')"></i>
                                  </a>
                                </div>
                              @else
                                <div class="col-md-2 ">
                                  <input type="button w-100" style="cursor: pointer;" value="@lang('Add New')" class="btn btn-primary" onclick="addOutputsRow()">
                                </div><!--col-->
                              @endif
                          </div><!--form-group-->
                      @endforeach
                    </div>


                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary {{ app()->getLocale() == 'en' ? 'float-right' : 'float-left' }}" type="submit">@lang('Edit Initiative')</button>
            </x-slot>
        </x-backend.card>
    </form>
@endsection

@push('after-scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.8.1/sweetalert2.all.min.js"></script>

	<script type="text/javascript">

      // Add Outputs Row
        function addOutputsRow(){
            $('#outputs').append(
              '<div class="form-group row output-row-delete" >' +
                  '<label for="output[]" class="col-md-2 form-control-label px-0"></label>' +
                  '<div class="col-md-4">' +
                      '<input type="text" name="output:en[]" class="form-control " placeholder="@lang("output:en")" required>' +
                  '</div>' +
                  '<div class="col-md-4">' +
                    '<input type="text" name="output:ar[]" class="form-control " placeholder="@lang("output:ar")" required>' +
                  '</div>' +
                  '<div class="col-md-2" >' +
                    '<a name="delete" href="javascript:;" data-method="delete" class="btn btn-danger delete-output ">' +
                        '<i class="fas fa-trash" title="@lang("Delete")"></i>' +
                    '</a>' +
                  '</div>' +
              '<div>'
            );
        }

        // Delete Initiative Outputs Row
        $(document).on("click",".delete-output ", function () {
           $(this).closest('.output-row-delete').remove();
        });

        function destroy(output){
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
                  url : "/admin/initiatives/"+ output +"/output/destroy",
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
