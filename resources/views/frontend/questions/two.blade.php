@extends('frontend.layouts.master')

@section('title', __('Common Questions'))

@section('content')

  <!--start-questions-->
    <section class="component-questions pt-5  pb-5">
        <div class="container">
            <div class="text-center">
                <strong class="m-auto text-initiatives-head title-login">
                    ماهي حقوق المانحين
                </strong>
            </div>

            <ul class="ul-latest ul-donor mt-4">
              <li class="mb-3">.الاطالع على رسالة وأهداف المؤسسة وطريقة استخدامها للتبرعات التي تستقبلها وقدرتها
                على استخدام التبرعات على نحو فعال لتحقيق أغراضها المقصودة
              </li>
              <li class="mb-3">معرفة مجالس إدارة هذه المؤسسة وقدرتهم على تحقيق رسالتها بالمهنية المطلوبة</li>
              <li class="mb-3">التأكد من استخدام التبرعات لألغراض التي منحت من أجلها</li>
              <li class="mb-3">التأكد من احترام المؤسسة لسرية المعلومات وفق التشريعات والقوانين الرسمية</li>
              <li class="mb-3">الحق في حذف أسماء المانحين من القوائم البريدية</li>
              <li class="mb-3">الحصول على إجابات واضحة وصريحة على ألا سئلة الخاصة بالتبرعات</li>
            </ul>
        </div>
    </section>
    <!--end-questions-->

@endsection
