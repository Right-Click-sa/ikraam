
@extends('backend.layouts.app')

@section('title', __('Edit Job'))

@section('content')
    <form action="{{ route('admin.job.update', $job) }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <x-backend.card>
            <x-slot name="header">
                @lang('Edit Job')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.jobs')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div >

                  <div class="form-group row">
                    <label for="job:en" class="col-md-2 col-form-label">@lang('job:en')</label>

                    <div class="col-md-10">
                        <input type="text" name="job:en" class="form-control" placeholder="@lang('job:en')" dir="ltr" required autofocus value="{{ old('job:en') ?? $job->{'job:en'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="job:ar" class="col-md-2 col-form-label">@lang('job:ar')</label>

                    <div class="col-md-10">
                        <input type="text" name="job:ar" class="form-control" placeholder="@lang('job:ar')" dir="rtl" required  value="{{ old('job:ar') ?? $job->{'job:ar'} }}">
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- description -->
                  <div class="form-group row">
                      <label for="description:en" class="col-md-2 col-form-label">@lang('description:en')</label>

                      <div class="col-md-10">
                          <textarea name="description:en" class="form-control" rows="8" cols="80" placeholder="{{ __('description:en') }}" dir="ltr"> {{ old('description:en') ?? $job->{'description:en'} }}</textarea>
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="description:ar" class="col-md-2 col-form-label">@lang('description:ar')</label>

                      <div class="col-md-10">
                          <textarea name="description:ar" class="form-control" rows="8" cols="80" placeholder="{{ __('description:ar') }}" dir="rtl"> {{ old('description:ar') ?? $job->{'description:ar'} }}</textarea>
                      </div>
                  </div>

                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary {{ app()->getLocale() == 'en' ? 'float-right' : 'float-left' }}" type="submit">@lang('Edit Job')</button>
            </x-slot>
        </x-backend.card>
    </form>
@endsection
