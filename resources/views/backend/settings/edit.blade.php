
@extends('backend.layouts.app')

@section('title', __('Edit Settings'))

@section('content')

    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <x-backend.card>
            <x-slot name="header">
                @lang('Edit Settings')
            </x-slot>

            <x-slot name="body">
                <div >

                  <div class="form-group row">
                    <label for="phone" class="col-md-2 col-form-label">@lang('Phone')</label>

                    <div class="col-md-10">
                        <input type="text" name="phone" class="form-control" placeholder="@lang('Phone')" maxlength="50" required autofocus value="{{ $settings['phone'] }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="email" class="col-md-2 col-form-label">@lang('Email')</label>

                    <div class="col-md-10">
                        <input type="email" name="email" class="form-control" placeholder="@lang('Email')" required  value="{{ $settings['email'] }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="addressEn" class="col-md-2 col-form-label">@lang('addressEn')</label>

                    <div class="col-md-10">
                        <input type="text" name="addressEn" class="form-control" placeholder="@lang('addressEn')" required value="{{ $settings['addressEn'] }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="addressAr" class="col-md-2 col-form-label">@lang('addressAr')</label>

                    <div class="col-md-10">
                        <input type="text" name="addressAr" class="form-control" placeholder="@lang('addressAr')" required  value="{{ $settings['addressAr'] }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="facebook" class="col-md-2 col-form-label">@lang('Facebook')</label>

                    <div class="col-md-10">
                        <input type="text" name="facebook" class="form-control" placeholder="@lang('Facebook')"  value="{{ $settings['facebook'] }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="twitter" class="col-md-2 col-form-label">@lang('Twitter')</label>

                    <div class="col-md-10">
                        <input type="text" name="twitter" class="form-control" placeholder="@lang('Twitter')"  value="{{ $settings['twitter'] }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="instagram" class="col-md-2 col-form-label">@lang('Instagram')</label>

                    <div class="col-md-10">
                        <input type="text" name="instagram" class="form-control" placeholder="@lang('Instagram')"  value="{{ $settings['instagram'] }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="linkedin" class="col-md-2 col-form-label">@lang('LinkedIn')</label>

                    <div class="col-md-10">
                        <input type="text" name="linkedin" class="form-control" placeholder="@lang('LinkedIn')"  value="{{ $settings['linkedin'] }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="map" class="col-md-2 col-form-label">@lang('Map')</label>

                    <div class="col-md-10">
                        <input type="text" name="map" class="form-control" placeholder="@lang('Map')"  value="{{ $settings['map'] }}">
                    </div><!--col-->
                  </div><!--form-group-->

                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary {{ app()->getLocale() == 'en' ? 'float-right' : 'float-left' }}" type="submit">@lang('Edit Settings')</button>
            </x-slot>
        </x-backend.card>
    </form>
@endsection
