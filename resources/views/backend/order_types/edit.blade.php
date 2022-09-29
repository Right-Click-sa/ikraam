@extends('backend.layouts.app')

@section('title', __('Edit Type'))

@section('content')
    <form action="{{ route('admin.order.types.update', $type) }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <x-backend.card>
            <x-slot name="header">
                @lang('Edit Type')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.order.types')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div >

                  <div class="form-group row">
                    <label for="type:en" class="col-md-2 col-form-label">@lang('orderType:en')</label>

                    <div class="col-md-10">
                        <input type="text" name="type:en" class="form-control" placeholder="@lang('orderType:en')" dir="ltr" required autofocus value="{{ old('type:en') ?? $type->{'type:en'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="type:ar" class="col-md-2 col-form-label">@lang('orderType:ar')</label>

                    <div class="col-md-10">
                        <input type="text" name="type:ar" class="form-control" placeholder="@lang('orderType:ar')" dir="rtl" required  value="{{ old('type:ar') ?? $type->{'type:ar'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary {{ app()->getLocale() == 'en' ? 'float-right' : 'float-left' }}" type="submit">@lang('Edit Type')</button>
            </x-slot>
        </x-backend.card>
    </form>
@endsection
