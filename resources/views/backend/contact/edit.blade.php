
@extends('backend.layouts.app')

@section('title', __('Edit Contact Us Message'))

@section('content')
    <form action="{{ route('admin.contact_us.update', $message) }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <x-backend.card>
            <x-slot name="header">
                @lang('Edit Contact Us Message')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.contact_us')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div >
                  <!-- name -->
                  <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">@lang('Name')</label>

                    <div class="col-md-10">
                        <input type="text" name="name" class="form-control" placeholder="@lang('Name')" required autofocus maxlength="60" value="{{ old('name') ?? $message->{'name'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- email -->
                  <div class="form-group row">
                    <label for="email" class="col-md-2 col-form-label">@lang('Email')</label>

                    <div class="col-md-10">
                        <input type="email" name="email" class="form-control" placeholder="@lang('Email')" required maxlength="70" value="{{ old('email') ?? $message->{'email'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- phone -->
                  <div class="form-group row">
                    <label for="phone" class="col-md-2 col-form-label">@lang('Phone')</label>

                    <div class="col-md-10">
                        <input type="text" name="phone" class="form-control" placeholder="@lang('Phone')" required maxlength="12" value="{{ old('phone') ?? $message->{'phone'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- message -->
                  <div class="form-group row">
                      <label for="message" class="col-md-2 col-form-label">@lang('Message')</label>

                      <div class="col-md-10">
                          <textarea name="message" class="form-control" rows="8" cols="80" placeholder="{{ __('Message') }}" maxlength="500"> {{ old('message') ?? $message->{'message'} }}</textarea>
                      </div>
                  </div>

                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary {{ app()->getLocale() == 'en' ? 'float-right' : 'float-left' }}" type="submit">@lang('Edit Contact Us Message')</button>
            </x-slot>
        </x-backend.card>
    </form>
@endsection
