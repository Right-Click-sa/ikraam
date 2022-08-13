@extends('frontend.layouts.master')

@section('title', __('Common Questions'))

@section('content')

  <section class="component-questions pt-5  pb-5">
        <div class="container">
            <div class="text-center">
                <strong class="m-auto  text-initiatives-head title-login">
                    ما هي أحدث البرامج والمبادرات الحالية ؟
                </strong>
            </div>
            <ul class="ul-latest mt-4">
              <li class="mb-3">إعداد الأبحاث والدراسات في قطاع إكرام الموتى</li>
              <li class="mb-3">تفعيل مبادرة الرصد والا عتناء بالمقابر</li>
              <li class="mb-3">نموذج المغسلة الحديثة</li>
              <li class="mb-3">إنشاء دليل موحد للتغسيل وتكفين المتوفى والصالة عليه</li>
            </ul>
        </div>
    </section>
    <!--end-questions-->

@endsection
