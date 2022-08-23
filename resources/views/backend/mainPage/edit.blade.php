
@extends('backend.layouts.app')

@section('title', __('Main page'))

@section('content')

    <form action="{{ route('admin.mainPage.update', $mainPage) }}" method="Post" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <x-backend.card>
            <x-slot name="header">
                @lang('Main page')
            </x-slot>

            <x-slot name="body">
              <div >
                  <!-- video link -->
                  <div class="form-group row">
                      <label for="video_link" class="col-md-2 col-form-label">@lang('What Do We Do Video Link')</label>

                      <div class="col-md-10">
                          <input type="text" name="video_link" class="form-control" placeholder="@lang('What Do We Do Video Link')" required autofocus value="{{ old('video_link') ?? $mainPage->{'video_link'} }}">
                      </div><!--col-->
                  </div>

                  <!-- programs number -->
                  <div class="form-group row">
                      <label for="programs_number" class="col-md-2 col-form-label">@lang('Number Of Programs')</label>

                      <div class="col-md-10">
                          <input type="number" name="programs_number" class="form-control" placeholder="@lang('Number Of Programs')" required value="{{ old('programs_number') ?? $mainPage->{'programs_number'} }}">
                      </div><!--col-->
                  </div>

                  <!-- associations number -->
                  <div class="form-group row">
                      <label for="associations_number" class="col-md-2 col-form-label">@lang('The Number Of Associations')</label>

                      <div class="col-md-10">
                          <input type="number" name="associations_number" class="form-control" placeholder="@lang('The Number Of Associations')" required value="{{ old('associations_number') ?? $mainPage->{'associations_number'} }}">
                      </div><!--col-->
                  </div>

                  <!-- initiatives number -->
                  <div class="form-group row">
                      <label for="initiatives_number" class="col-md-2 col-form-label">@lang('Number Of Initiatives')</label>

                      <div class="col-md-10">
                          <input type="number" name="initiatives_number" class="form-control" placeholder="@lang('Number Of Initiatives')" required value="{{ old('initiatives_number') ?? $mainPage->{'initiatives_number'} }}">
                      </div><!--col-->
                  </div>

                  <!-- tombs number -->
                  <div class="form-group row">
                      <label for="tombs_number" class="col-md-2 col-form-label">@lang('The Number Of Tombs')</label>

                      <div class="col-md-10">
                          <input type="number" name="tombs_number" class="form-control" placeholder="@lang('The Number Of Tombs')" required value="{{ old('tombs_number') ?? $mainPage->{'tombs_number'} }}">
                      </div><!--col-->
                  </div>

                  <!-- washbasins number -->
                  <div class="form-group row">
                      <label for="washbasins_number" class="col-md-2 col-form-label">@lang('The Number Of Washbasins Of The Dead')</label>

                      <div class="col-md-10">
                          <input type="number" name="washbasins_number" class="form-control" placeholder="@lang('The Number Of Washbasins Of The Dead')" required value="{{ old('washbasins_number') ?? $mainPage->{'washbasins_number'} }}">
                      </div><!--col-->
                  </div>

                  <!-- death years and cases numbers -->
                  <div class="form-group row">
                      <label for="year1" class="col-md-2 col-form-label">@lang('Death Rate Year')</label>

                      <div class="col-md-4">
                          <input type="number" name="year1" class="form-control" placeholder="@lang('Death Rate Year')" required value="{{ old('year1') ?? $mainPage->{'year1'} }}">
                      </div><!--col-->

                      <label for="year1_cases" class="col-md-2 col-form-label">@lang('Death Cases Number')</label>

                      <div class="col-md-4">
                          <input type="number" name="year1_cases" class="form-control" placeholder="@lang('Death Cases Number')" required value="{{ old('year1_cases') ?? $mainPage->{'year1_cases'} }}">
                      </div><!--col-->
                  </div>

                  <div class="form-group row">
                      <label for="year2" class="col-md-2 col-form-label">@lang('Death Rate Year')</label>

                      <div class="col-md-4">
                          <input type="number" name="year2" class="form-control" placeholder="@lang('Death Rate Year')" required value="{{ old('year2') ?? $mainPage->{'year2'} }}">
                      </div><!--col-->

                      <label for="year2_cases" class="col-md-2 col-form-label">@lang('Death Cases Number')</label>

                      <div class="col-md-4">
                          <input type="number" name="year2_cases" class="form-control" placeholder="@lang('Death Cases Number')" required value="{{ old('year2_cases') ?? $mainPage->{'year2_cases'} }}">
                      </div><!--col-->
                  </div>

                  <div class="form-group row">
                      <label for="year3" class="col-md-2 col-form-label">@lang('Death Rate Year')</label>

                      <div class="col-md-4">
                          <input type="number" name="year3" class="form-control" placeholder="@lang('Death Rate Year')" required value="{{ old('year3') ?? $mainPage->{'year3'} }}">
                      </div><!--col-->

                      <label for="year3_cases" class="col-md-2 col-form-label">@lang('Death Cases Number')</label>

                      <div class="col-md-4">
                          <input type="number" name="year3_cases" class="form-control" placeholder="@lang('Death Cases Number')" required value="{{ old('year3_cases') ?? $mainPage->{'year3_cases'} }}">
                      </div><!--col-->
                  </div>

              </div>
          </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary {{ app()->getLocale() == 'en' ? 'float-right' : 'float-left' }}" type="submit">@lang('Update Main page')</button>
            </x-slot>
        </x-backend.card>
    </form>
@endsection
