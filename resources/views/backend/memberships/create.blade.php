@extends('backend.layouts.app')

@section('title', __('Create Membership'))

@section('content')
    <form action="{{ route('admin.membership.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Membership')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.memberships')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div >

                  <div class="form-group row">
                    <label for="type:en" class="col-md-2 col-form-label">@lang('type:en')</label>

                    <div class="col-md-10">
                        <input type="text" name="type:en" class="form-control" placeholder="@lang('type:en')" dir="ltr" required autofocus>
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="type:ar" class="col-md-2 col-form-label">@lang('type:ar')</label>

                    <div class="col-md-10">
                        <input type="text" name="type:ar" class="form-control" placeholder="@lang('type:ar')" dir="rtl" required >
                    </div><!--col-->
                  </div><!--form-group-->

                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary {{ app()->getLocale() == 'en' ? 'float-right' : 'float-left' }}" type="submit">@lang('Create Membership')</button>
            </x-slot>
        </x-backend.card>
    </form>
@endsection
