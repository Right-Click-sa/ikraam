@extends('frontend.layouts.master')

@section('title', __('About the enterprise'))

@section('content')

  <!--start-about-->
    <section class="component-questions pt-5  pb-5">
        <div class="container">
            <strong class="text-initiatives-head title-login">
                @lang('About the enterprise')
            </strong>
            <div class="row-about-definition mt-2">
                <!--about-definition-->
                <div class="row row-about">
                    <div class="col-md-4">
                        <img class="about-img" src="/assets/img/abut.png" alt="about">
                    </div>
                    <div class="col-md-8">
                        <p class="definition-p">
                            تم تأسيس مؤسسة إكرام الموتى بقرار وزاري بتاريخ 8/14 /1442 رقم الترخيص ( 233 ) كمؤسسة أهلية مستقلة رائده غير ربحية تعنى بشؤون إكرام الموتى من خلال إطار مؤسسي لزيادة تنظيم العمل الخيري في مجال إكرام الموتى بالتعاون والشراكة مع الجهات ذات العلاقة (الحكومية والخاصة وغير الربحية) ولخلق منظومة تنموية مستدامة من أجل تحسين ورفع مستوى خدمات إكرام الموتى. وتهدف المؤسسة لتعزيز الترابط الاجتماعي وروح التضامن الإنساني وتخفيف الأعباء على ذوي المتوفى من خلال متابعة الحالة منذ لحظة إعلان الوفاة وحتى يوارى الجثمان الثرى.
                        </p>
                    </div>
                </div>
                <!--about-definition-->
                <!--Vision-->
                <div class="row-about row">
                    <div class="col-lg-1 vision-col">
                        <div class="box-vision">
                            <img class="vision-row" src="/assets/img/Vision-2.png" alt="Vision">

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <strong class="text-initiatives-head title-login">@lang('Vision')</strong>
                        <p class="definition-p">تقديم خدمات إنسانية راقية بشراكات فاعلة وأثر مستدام</p>
                    </div>
                </div>
                <!--end-Vision-->
                <!--message-->
                <div class="row-about row">
                    <div class="col-lg-1 vision-col">
                        <div class="box-vision">
                            <img class="vision-row" src="/assets/img/visibility copy.png" alt="message">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <strong class="text-initiatives-head title-login">@lang('Message')</strong>
                        <p class="definition-p">المساهمة ببناء قدرات الا فراد والمنظمات غير الربحية في مجال إكرام الموتى
                            وبناء الشراكات وقيادة البحث والا بتكار للرقي بالخدمات الا نسانية وتخفيف
                            المعاناة.
                        </p>
                    </div>
                </div>
                <!--message-->
                <!--Value-->
                <div class="row-about row">
                    <div class="col-lg-1 vision-col">
                        <div class="box-vision">
                            <img class="vision-row" src="/assets/img/Value.png" alt="Value">

                        </div>
                    </div>
                    <div class="col-lg-8 mx-md-3">
                        <strong class="text-initiatives-head title-login">@lang('Values')</strong>
                        <ul class="ul-latest ul-donor mt-3 mx-md-2">
                             <li class="mb-2"><span>اإلحسان</span> : من خلال إتقان العمل وبذل الجهد على أكمل وجه</li>
                             <li  class="mb-2"><span>اإلنسانية</span> : تقدير قيمة وكفاءة الا نسان بنظرة متساوية</li>
                             <li  class="mb-2"><span>التعاون</span> :  مع جميع الفاعلين في القطاع لتحقيق الأثر المستدام</li>
                             <li  class="mb-2"><span>الرحمة</span> : تتجلى بتقديمها للمستفيدين وتوفير خدمات تخفف عبء فقد الأحبة</li>
                        </ul>
                    </div>
                </div>
                <!--Enterprise goals-->
                <div class="row-about row">
                    <div class="col-lg-1 vision-col">
                        <div class="box-vision">
                            <img class="vision-row" src="/assets/img/success.png" alt="success">

                        </div>
                    </div>
                    <div class="col-lg-9">
                        <strong class="text-initiatives-head title-login">@lang('Enterprise goals')</strong>
                        <p class="definition-p">
                          تعمل المؤسسة على تقديم خدمة مجتمعية في مجال إكرام الموتى حيث تمس هذه الخدمة جميع فئات المجتمع من أجل خلق أثر مستدام بما يوائم ويحقق رؤية 2030 في مجال إشراك القطاع غير الربحي وتفعيل دوره وأثره بما يتوافق ويتقاطع مع الأهداف الوطنية التنموية المستدامة من خلال أهداف التالية:
                        </p>
                    </div>
                    <div class="col-md-12 img-general-frame">
                        <img src="/assets/img/questions-enterprise-goals.png" alt="Enterprise">
                    </div>
                </div>
                <!--Enterprise goals-->
                <!--Strategic directions of the organization-->
                <div class="row-about mt-3">
                    <strong class="text-initiatives-head title-login">
                        @lang("The organization's strategic directions")
                    </strong>
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <img class="vision-row"src="/assets/img/organization.png" alt="organization">
                        </div>
                        <div class="col-md-8">
                            <p class="definition-p">
                                إستراتيجية المؤسسة تتمثل في المساهمة في تطوير منظومة قطاع إكرام الموتى لتقديم أجود الخدمات بشكل متكامل مع مختلف الجهات ذات العلاقة في رحلة المتوفي من لحظة الوفاة حتى الدفن وما يخص ذوي المتوفي ويهدف بناء الاطار الاستراتيجي للمؤسسة إلى تطوير رؤية المؤسسة ورسالتها وأهدافها الاستراتيجية بإضافة إلى المؤشرات الرئيسية لقياس تلك الخدمات وتحديد المبادرات التي ستعمل عليها المؤسسة خلال المدى الاستراتيجي القادم.
                            </p>
                        </div>
                    </div>
                </div>
                <!--Strategic directions of the organization-->
            </div>
        </div>
    </section>
    <!--end-about-->

@endsection
