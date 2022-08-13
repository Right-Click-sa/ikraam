@extends('frontend.layouts.master')

@section('title', __('Recruitment'))

@section('content')

  <!--start-jobs -->
    <section class="component-Contribute  pt-5 pb-5">
        <div class="container">
            <div class="text-center">
                <strong class=" m-auto  text-initiatives-head title-login">
                    @lang('Apply for the job')
                </strong>
            </div>
            <div class="col-md-10 m-auto p-5 mt-5 component-modify">
                <div class="col-md-9 m-auto">
                    <div class="mt-2 d-flex justify-content-between">
                        <div>
                            <h6 class="title-jop">(@lang('Job'))</h6>
                            <h5 class="title-jop-defintion">اخصائي تقنية معلومات خبرة 3 سنوات وأكثر </h5>
                        </div>
                       <div class="img-close">
                           <a href="{{ route('frontend.e-services.recruitment') }}"><img src="/assets/img/close.png" alt="close"></a>
                       </div>
                    </div>
                    <div class="col-md-10 mt-4">
                        <h6  class="title-jop">(@lang('Information'))</h6>
                        <pre class="pre-jobs mt-3">
                            الحاجة الى مختص تقني لدية خبرة في الدعم الفني والشبكات
                        </pre>
                    </div>
                    <form class="form-content form-login mt-3 row g-3 needs-validation justify-content-center" novalidate="">
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control form-control-lg" placeholder=" @lang('Name') " id="validationemail" required="">
                            <div class="invalid-feedback">
                            Please provide a valid name.
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" placeholder="@lang('Phone')" class="form-control form-control-lg" id="validationCustom05" required="">
                            <div class="invalid-feedback">
                                Please provide a valid number.
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" placeholder="@lang('Age')" class="form-control form-control-lg" id="validationCustom05" required="">
                            <div class="invalid-feedback">
                                Please provide a valid number.
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" placeholder="@lang('Identification Number')" class="form-control form-control-lg" id="validationCustom05" required="">
                            <div class="invalid-feedback">
                                Please provide a valid number.
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" placeholder="@lang('Specialization')" class="form-control form-control-lg" id="validationCustom05" required="">
                            <div class="invalid-feedback">
                                Please provide a valid number.
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <select class="form-select" aria-label="Default select example">
                                <option selected="">@lang('Gender')</option>
                                <option value="1">ذكر</option>
                                <option value="2">انثى</option>
                            </select>
                        </div>
                        <div class ="col-md-12 mb-2">
                            <div class="d-flex form-control custom-file justify-content-between">
                                <span>@lang('CV')</span>
                                <div class="">
                                    <input type="file" class="custom-file-input" id="file" multiple="" onchange="javascript:updateList()">
                                    <label class="text-white custom-file-label" for="file">
                                        @lang('Upload file')
                                        <img class="download" src="/assets/img/Icon awesome-download.png" alt="download">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <button class="btn btn-lg col-md-12 fw-bold  btn-submit" type="submit">@lang('Send')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--end-request-->

@endsection
