
@extends('backend.layouts.app')

@section('title', __('Edit Membership'))

@section('content')
    <form action="{{ route('admin.membership.update', $membership) }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <x-backend.card>
            <x-slot name="header">
                @lang('Edit Membership')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.memberships')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div >

                  <div class="form-group row">
                    <label for="type:en" class="col-md-2 col-form-label">@lang('type:en')</label>

                    <div class="col-md-10">
                        <input type="text" name="type:en" class="form-control" placeholder="@lang('type:en')" dir="ltr" required autofocus value="{{ old('type:en') ?? $membership->{'type:en'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="type:ar" class="col-md-2 col-form-label">@lang('type:ar')</label>

                    <div class="col-md-10">
                        <input type="text" name="type:ar" class="form-control" placeholder="@lang('type:ar')" dir="rtl" required  value="{{ old('type:ar') ?? $membership->{'type:ar'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary {{ app()->getLocale() == 'en' ? 'float-right' : 'float-left' }}" type="submit">@lang('Edit Membership')</button>
            </x-slot>
        </x-backend.card>
    </form>
@endsection
