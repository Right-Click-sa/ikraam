@extends('frontend.layouts.master')

@section('title', __('Common Questions'))

@section('content')

  <!--start-questions-->
    <section class="component-questions pt-5  pb-5">
        <div class="container">
            <strong class=" text-initiatives-head title-login">
                كيفية حجز موعد ؟
            </strong>
            <div class="mt-4 component-communicate">
                <div class="mb-3">عبر البريد الاكتروني<a href="info@ikraam.org.sa" class="link-questions" target="_blank">(info@ikraam.org.sa)</a></div>
                <pre>مع إرفاق معلومات محاور الاجتماع وأسم الجهة والمسؤول والوقت المقترح للموعد وإذن الله في حال
                    استقبال الطلب 3 الى 10 أيام عمل سيتم الرد و لمتابعة إجراءات الطلب عبر وآتس أب المؤسسة
                </pre>
                <a class="link-questions" href="https://api.whatsapp.com/send?phone=0534399110" target="_blank">(0534399110)</a>
            </div>
        </div>
    </section>
    <!--end-questions-->

@endsection
