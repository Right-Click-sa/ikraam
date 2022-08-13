@extends('frontend.layouts.master')

@section('title', __('Common Questions'))

@section('content')

  <!--start-questions-->
    <section class="component-questions pt-5  pb-5">
        <div class="container">
            <strong class=" text-initiatives-head title-login">
                هل المؤسسة مصرح بها ؟
            </strong>
            <p class="mt-3 p-questions">نعم مصرح بها ومرفق أد ناه شهادة تسجيل المؤسسة</p>
           <div class="col-md-8 m-auto img-general-frame">
             <img src="/assets/img/authorized.png" alt="authorized">
           </div>
        </div>
    </section>
    <!--end-questions-->

@endsection
