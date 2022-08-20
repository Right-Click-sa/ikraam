
@extends('backend.layouts.app')

@section('title', __('Edit Volunteer Field'))

@section('content')
    <form action="{{ route('admin.volunteer.fields.update', $field) }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <x-backend.card>
            <x-slot name="header">
                @lang('Edit Volunteer Field')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.volunteer.fields')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div >

                  <!-- field -->
                  <div class="form-group row">
                    <label for="field:en" class="col-md-2 col-form-label">@lang('field:en')</label>

                    <div class="col-md-10">
                        <input type="text" name="field:en" class="form-control" placeholder="@lang('field:en')" dir="ltr" required autofocus value="{{ old('field:en') ?? $field->{'field:en'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="field:ar" class="col-md-2 col-form-label">@lang('field:ar')</label>

                    <div class="col-md-10">
                        <input type="text" name="field:ar" class="form-control" placeholder="@lang('field:ar')" dir="rtl" required value="{{ old('field:ar') ?? $field->{'field:ar'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary {{ app()->getLocale() == 'en' ? 'float-right' : 'float-left' }}" type="submit">@lang('Edit Volunteer Field')</button>
            </x-slot>
        </x-backend.card>
    </form>
@endsection
