@extends('backend.layouts.app')

@section('title', __('Create Policy'))

@section('content')
    <form action="{{ route('admin.about.policies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Policy')
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
                        <input type="text" name="policy:en" class="form-control" placeholder="@lang('policy:en')" dir="ltr" required autofocus>
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="policy:ar" class="col-md-2 col-form-label">@lang('policy:ar')</label>

                    <div class="col-md-10">
                        <input type="text" name="policy:ar" class="form-control" placeholder="@lang('policy:ar')" dir="rtl" required >
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- content -->
                  <div class="form-group row">
                      <label for="content:en" class="col-md-2 col-form-label">@lang('content:en')</label>

                      <div class="col-md-10">
                          <textarea name="content:en" class="form-control" rows="8" dir="ltr" cols="80" placeholder="{{ __('content:en') }}"></textarea>
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="content:ar" class="col-md-2 col-form-label">@lang('content:ar')</label>

                      <div class="col-md-10">
                          <textarea name="content:ar" class="form-control" rows="8" dir="rtl" cols="80" placeholder="{{ __('content:ar') }}"></textarea>
                      </div>
                  </div>

                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary {{ app()->getLocale() == 'en' ? 'float-right' : 'float-left' }}" type="submit">@lang('Create Policy')</button>
            </x-slot>
        </x-backend.card>
    </form>
@endsection
