@extends('backend.layouts.app')

@section('title', __('Create Initiative'))

@section('content')
    <form action="{{ route('admin.initiatives.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Initiative')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.initiatives')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div >
                  {{-- title --}}
                  <div class="form-group row">
                    <label for="title:en" class="col-md-2 col-form-label">@lang('title:en')</label>

                    <div class="col-md-10">
                        <input type="text" name="title:en" class="form-control" placeholder="@lang('title:en')" dir="ltr" required autofocus>
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="title:ar" class="col-md-2 col-form-label">@lang('title:ar')</label>

                    <div class="col-md-10">
                        <input type="text" name="title:ar" class="form-control" placeholder="@lang('title:ar')" dir="rtl" required >
                    </div><!--col-->
                  </div><!--form-group-->

                  {{-- initiative --}}
                  <div class="form-group row">
                      <label for="initiative:en" class="col-md-2 col-form-label">@lang('initiative:en')</label>

                      <div class="col-md-10">
                          <textarea name="initiative:en" class="form-control" rows="8" dir="ltr" cols="80" placeholder="{{ __('initiative:en') }}"></textarea>
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="initiative:ar" class="col-md-2 col-form-label">@lang('initiative:ar')</label>

                      <div class="col-md-10">
                          <textarea name="initiative:ar" class="form-control" rows="8" dir="rtl" cols="80" placeholder="{{ __('initiative:ar') }}"></textarea>
                      </div>
                  </div>

                  <!-- Initiative Outputs -->
                    <div class="form-group" id="outputs">
                        <div class="form-group row">
                            <label for="output[]" class="col-md-2 col-form-label">@lang('Initiative Outputs')</label>

                            <div class="col-md-4">
                                <input type="text" name="output:en[]" class="form-control" placeholder="@lang('output:en')" required>
                            </div><!--col-->

                            <div class="col-md-4">
                                <input type="text" name="output:ar[]" class="form-control" placeholder="@lang('output:ar')" required>
                            </div><!--col-->

                            <div class="col-md-2 ">
                              <input type="button w-100" style="cursor: pointer;" value="@lang('Add New')" class="btn btn-primary" onclick="addOutputsRow()">
                            </div><!--col-->
                        </div><!--form-group-->
                    </div>


                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary {{ app()->getLocale() == 'en' ? 'float-right' : 'float-left' }}" type="submit">@lang('Create Initiative')</button>
            </x-slot>
        </x-backend.card>
    </form>
@endsection

@push('after-scripts')
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

        // Delete Initiative Output Row
        $(document).on("click",".delete-output ", function () {
           $(this).closest('.output-row-delete').remove();
        });
	</script>
@endpush
