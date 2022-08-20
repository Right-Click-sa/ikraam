
@extends('backend.layouts.app')

@section('title', __('Edit Regulations and Policies'))

@section('content')
    <form action="{{ route('admin.about.policies.update', $policy) }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <x-backend.card>
            <x-slot name="header">
                @lang('Edit Regulations and Policies')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.about.policies')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div >

                  <div class="form-group row mb-3">
                    <label for="file" class="col-md-2 col-form-label">@lang('File')</label>

                    <div class="col-md-10">
                        <input class="form-control " id="file" type="file" name="file" accept=".pdf,docx,doc">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="policy:en" class="col-md-2 col-form-label">@lang('policy:en')</label>

                    <div class="col-md-10">
                        <input type="text" name="policy:en" class="form-control" placeholder="@lang('policy:en')" dir="ltr" required autofocus value="{{ old('policy:en') ?? $policy->{'policy:en'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="policy:ar" class="col-md-2 col-form-label">@lang('policy:ar')</label>

                    <div class="col-md-10">
                        <input type="text" name="policy:ar" class="form-control" placeholder="@lang('policy:ar')" dir="rtl" required  value="{{ old('policy:ar') ?? $policy->{'policy:ar'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- content -->
                  <div class="form-group row">
                      <label for="content:en" class="col-md-2 col-form-label">@lang('content:en')</label>

                      <div class="col-md-10">
                          <textarea name="content:en" class="form-control" rows="8" cols="80" placeholder="{{ __('content:en') }}" dir="ltr"> {{ old('content:en') ?? $policy->{'content:en'} }}</textarea>
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="content:ar" class="col-md-2 col-form-label">@lang('content:ar')</label>

                      <div class="col-md-10">
                          <textarea name="content:ar" class="form-control" rows="8" cols="80" placeholder="{{ __('content:ar') }}" dir="rtl"> {{ old('content:ar') ?? $policy->{'content:ar'} }}</textarea>
                      </div>
                  </div>

                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary {{ app()->getLocale() == 'en' ? 'float-right' : 'float-left' }}" type="submit">@lang('Edit Regulations and Policies')</button>
            </x-slot>
        </x-backend.card>
    </form>
@endsection
