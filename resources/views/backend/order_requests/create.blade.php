@extends('backend.layouts.app')

@section('title', __('Create Type'))

@section('content')
    <form action="{{ route('admin.order.types.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Type')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.order.types')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div >

                  <div class="form-group row">
                    <label for="type:en" class="col-md-2 col-form-label">@lang('orderType:en')</label>

                    <div class="col-md-10">
                        <input type="text" name="type:en" class="form-control" placeholder="@lang('orderType:en')" dir="ltr" required autofocus>
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="type:ar" class="col-md-2 col-form-label">@lang('orderType:ar')</label>

                    <div class="col-md-10">
                        <input type="text" name="type:ar" class="form-control" placeholder="@lang('orderType:ar')" dir="rtl" required >
                    </div><!--col-->
                  </div><!--form-group-->

                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary {{ app()->getLocale() == 'en' ? 'float-right' : 'float-left' }}" type="submit">@lang('Create Type')</button>
            </x-slot>
        </x-backend.card>
    </form>
@endsection
