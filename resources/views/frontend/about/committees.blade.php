@extends('frontend.layouts.master')

@section('title', __('Committees'))

@section('content')

  <!--start-committees-->
    <section class="component-questions pt-5  pb-5">
        <div class="container">
            <div class="text-center">
                <strong class=" text-initiatives-head title-login">
                    @lang('The purpose of the committees')
                </strong>
                <p class="p-text-committies col-md-8 m-auto mt-3">
                 تعمل هذه اللجان كأذرع مساعدة لمجلس الامناء في عملية الرقابة والدراسة والتوصية للمواضيع
                ذات الصلة لمجلس الامناء
                </p>
                <div class="col-md-6 m-auto linke-committees mt-4 d-flex justify-content-between">
                    <a href="#committees1">اللجنة التوجيهية</a>
                    <a href="#committees2">اللجنة الشرعية</a>
                    <a href="#committees3">لجنة الإستثمار</a>
                </div>
            </div>
            <!--grid-board-committees-->
            <div class="component-board">
                <!--item-board-->
                <div class="card-board-committees mt-5 pb-5" id="committees1">
                    <div class="text-center">
                        <strong class="title-login">
                            اللجنة التوجيهية
                        </strong>
                    </div>
                    <div class="defintion-committees mt-4">
                        <div class="text-center">
                            <img src="/assets/img/ssa-11.png" class="img-fluid img-board" alt="board-trustees">
                            <div class="card-body mt-3">
                                <strong class="card-title"> رئيس اللجنة</strong>

                                <h4 class="card-text">م . : أحمد بن علي القرعاوي  </h4>
                            </div>
                        </div>
                      <div class="component-target">
                          <strong class="title-login">  الهدف :</strong>
                          <p class="definition-p">الاشراف على أعمال المؤسسة والتوجيه الالزم لحل المعوقات ومتابعة الاداء، وضمان الموائمة مع الجهات
                            ذات العالقة
                          </p>
                          <strong class="title-login">  مهام اللجنة :</strong>
                          <ul class="ul-list-disc">
                              <li class="definition-p mb-3">تحديد التوجهات الاستراتيجية والاولويات بما يتوائم مع احتياجات القطاع</li>
                              <li class="definition-p mb-3">تشكيل لجان أو فرق العمل الرئيسية والفرعية وتوزيع المهام على أعضائها</li>
                               <li class="definition-p mb-3">اعتماد خطط العمل لكل مجموعة عمل رئيسية، وتذليل المعوقات لها</li>
                               <li class="definition-p mb-3">استعراض متابعة تنفيذ المشاريع على مجلس الأمناء</li>
                               <li class="definition-p mb-3">مراجعة وتقييم أنشطة وأعمال المؤسسة
                                  واتخاذ القرارات اللازمة للتطوير والتحسين</li>
                               <li class="definition-p mb-3">اعتماد السياسات اللازمة لتنفيذ مهام وأنشطة المؤسسة</li>
                               <li class="definition-p mb-3">التنسيق والموائمة مع الجهات ذات العلاقة لضمان تحقيق أهداف المؤسسة</li>
                          </ul>
                      </div>

                    </div>
                </div>
                 <!--item-board-->
                 <div class="card-board-committees mt-5 pb-5" id="committees2">
                    <div class="text-center">
                        <strong class="title-login">
                            اللجنة الشرعية
                        </strong>
                    </div>
                    <div class="defintion-committees mt-4">
                        <div class="text-center">
                            <img src="/assets/img/ssa-10.png" class="img-fluid img-board" alt="board-trustees">
                            <div class="card-body mt-3">
                                <strong class="card-title"> رئيس اللجنة</strong>

                                <h4 class="card-text">الشيخ أ.د. :  عبد السلام بن عبد الله السليمان </h4>
                            </div>
                        </div>
                      <div class="component-target">
                          <strong class="title-login">  الهدف :</strong>
                          <p class="definition-p">إيجاد سبل شرعية نظامية لتطوير خدمات إكرام الموتى

                          </p>
                          <strong class="title-login">  مهام اللجنة :</strong>
                          <ul class="ul-list-disc">
                              <li class="definition-p mb-3">مراجعة الدليل الإرشادي للتغسيل والدفن</li>
                              <li class="definition-p mb-3">دراسة مبادرات المؤسسة وقطاع إكرام الموتى وتقديم الرأي الشرعي حيالها حسب الحاجة</li>
                               <li class="definition-p mb-3">النظر في الحلول الشرعية المقدمة لمنفعة خدمة إكرام الموتى</li>
                               <li class="definition-p mb-3">مراجعة أحكام الأوقاف والهبات المخصصة لخدمة إكرام الموتى</li>
                               <li class="definition-p mb-3">النظر في النوازل الشرعية</li>
                               <li class="definition-p mb-3">الاستشارات والتوجيهات الشرعية</li>

                          </ul>
                            <div class="text-center">
                                <strong class="title-login">
                                    الاستشارات والتوجيهات الشرعية والاستناد برأي هيئة كبار العلماء بالمملكة
                                </strong>
                            </div>
                      </div>

                    </div>
                </div>
                 <!--item-board-->
                 <div class="card-board-committees mt-5 pb-5" id="committees3">
                    <div class="text-center">
                        <strong class="title-login">
                            لجنة الإستثمار
                        </strong>
                    </div>
                    <div class="defintion-committees mt-4">
                        <div class="text-center">
                            <img src="/assets/img/ssa-12.png" class="img-fluid img-board" alt="board-trustees">
                            <div class="card-body mt-3">
                                <strong class="card-title"> رئيس اللجنة</strong>

                                <h4 class="card-text">الشيخ : عبد العزيز السبيعي </h4>
                            </div>
                        </div>
                      <div class="component-target">
                          <strong class="title-login">  الهدف :</strong>
                          <p class="definition-p">القيام بمهام البحث وطرح الفرص الا ستثمارية


                          </p>
                          <strong class="title-login">  مهام اللجنة :</strong>
                          <ul class="ul-list-disc">
                              <li class="definition-p mb-3">
                                  إعداد ومراجعة واعتماد آليات وخطط وسياسات الاستثمار ومتابعة تنفيذ وأداء هذه الخطط والسياسات.

                              </li>
                              <li class="definition-p mb-3">
                                  رفع التقارير الدورية لمجلس الأمناء وإخطار المجلس حيال التغييرات الجوهرية في الاستثمارات

                              </li>
                               <li class="definition-p mb-3">
                                  دراسة الفرص الاستثمارية والموافقة على الفرص التي تقل عن عشر مليون ريال.

                              </li>
                              <li class="definition-p mb-3">
                                  مساندة الإدارة التنفيذية للمؤسسة في مراجعة سياسة الرسوم والرعايات التي تتلقاها المؤسسة مقابل الخدمات التي تقدمها والاشراف علي تطبيقها
                              </li>
                              <li class="definition-p mb-3">
                                  المساهمة في تحقيق الاستدامة المالية للمؤسسة عن طريق تأسيس صناديق وقفية وغيرها من الأدوات الاستثمارية.

                              </li>

                          </ul>

                      </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--end-committees-->

@endsection
