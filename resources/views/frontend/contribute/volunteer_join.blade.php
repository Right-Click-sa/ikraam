@extends('frontend.layouts.master')

@section('title', __('Volunteer'))

@section('content')

  <section class="component-login pt-5 pb-5">
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <h6 class="text-center title-login">
                    @lang('Volunteer')
                     <img src="/assets/img/volunteer.png" alt="volunteer">
                    </h6>
                  <form class="form-content form-login mt-3 row g-3 needs-validation justify-content-center" novalidate="">
                    <div class="col-md-12 mb-2">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>@lang('Desired field of volunteering')</option>
                            <option value="1">مجال 1</option>
                            <option value="2">مجال 2</option>
                            <option value="3">مجال 3</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                      <input type="text" class="form-control form-control-lg" placeholder="@lang('Volunteer name') " id="validationemail" required="">
                      <div class="invalid-feedback">
                        Please provide a valid name.
                      </div>
                    </div>

                    <div class="col-md-6 mb-2">
                      <input type="number" placeholder="@lang('Contact number')" class="form-control form-control-lg" id="validationCustom05" required="">
                      <div class="invalid-feedback">
                        Please provide a valid number.
                      </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <input type="email" placeholder="@lang('Email')" class="form-control form-control-lg" id="validationemail" required="">
                        <div class="invalid-feedback">
                          Please provide a valid email.
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                      <input type="number" placeholder="@lang('Age')" class="form-control form-control-lg" id="validationCustom05" required="">
                      <div class="invalid-feedback">
                        Please provide a valid age.
                      </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>موقع المتطوع</option>
                            <option value="الرياض">الرياض</option>
                            <option value="وادي الدواسر">وادي الدواسر</option>
                            <option value="الخرج">الخرج</option>
                            <option value="الزلفي"> الزلفي</option>
                            <option value="جدة">جدة</option>
                            <option value="مكة المكرمة">مكة المكرمة</option>
                            <option value="الدمام">الدمام</option>
                            <option value="الأحساء">الأحساء</option>
                            <option value="الخبر">الخبر</option>
                            <option value="المخواة">المخواة</option>
                            <option value="أبها">أبها</option>
                            <option value="خميس مشيط">خميس مشيط</option>
                            <option value="النماص">النماص</option>
                            <option value="جازان">جازان</option>
                            <option value="الباحة">الباحة</option>
                            <option value="حائل">حائل</option>
                            <option value="عنيزة">عنيزة</option>
                            <option value="بريدة">بريدة</option>
                            <option value="الرس">الرس</option>
                            <option value="المدينة المنورة">المدينة المنورة</option>
                            <option value="ينبع">ينبع</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>الجنس</option>
                            <option value="1">ذكر</option>
                            <option value="2">انثى</option>
                        </select>
                    </div>
                    <div class="col-md-6 text-center">
                      <button class="btn btn-lg col-md-12 fw-bold  btn-submit" type="submit">@lang('Send')</button>
                    </div>
                </form>
              </div>

          </div>

        </div>
    </section>


@endsection
