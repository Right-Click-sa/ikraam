@extends('frontend.layouts.master')

@section('title', __('Regulations and Policies'))

@section('content')

  <!--start-initives-->
    <section class="component-initives pt-5  pb-5">
        <div class="container">
           <div class="text-center">
              <strong class=" m-auto  text-initiatives-head title-login">
                @lang('Regulations and Policies')
              </strong>
           </div>

            <div class="row justify-content-center m-auto mt-5">
                <div class="col-md-12 m-auto">
                    <!--initiatives-->
                    <div class="accordion component-initiatives" id="accordionExample">
                        <!--item1-->

                        <div class="accordion-item">
                          <h2 class="accordion-header col-md-6 m-auto" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">

                              <h6>
                                <span class="span-initives">1-</span>
                                اللائحة الأساسية مؤسسة إكرام الموتى
                               </h6>
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="col-md-8 m-auto text-center">

                                  <a href="/assets/pdf/اللائحة التأسيسية لمجلس أمناء مؤسسة إكرام الموتى.pdf" download class="btn-policies btn mb-2">
                                    <span> تحميل الملف كامل  pdf</span>
                                    <img src="/assets/img/Icon-download.png" alt="download">
                                  </a>

                                <p class="p-policies">
                                    تم تأسيس مؤسسة إكرام الموتى بقرار وزاري بتاريخ 8/14 /1442 رقم الترخيص ( 233 ) كمؤسسة أهلية مستقلة رائده غير ربحية تعنى بشؤون إكرام الموتى من خلال إطار مؤسسي لتكوين العمل الخيري في مجال إكرام الموتى من خلال التعاون وإقامة شراكات مع الجهات ذات العالقة الحكومية والخاصة وغير الربحية لخلق داخل منظومة إكرام الموتى التنموية المستدام من أجل تحسين ورفع مستوى خدمة إكرام الموتى. وتهدف المؤسسة لتعزيز الترابط الاجتماعي وروح التضامن الانساني وتخفيف الأعباء على ذوي المتوفى من خالل متابعة الحالة منذ لحظة إعلان الوفاة وحتى يوارى الجثمان لثرى وتخفيف الا لم على ذوي المتوفى من خلال تحسين مع الجهات ذات العالقة والجمعيات المتخصصة بإكرام الموتى
                               </p>
                              </div>

                            </div>
                          </div>
                        </div>
                        <!--item2-->

                        <div class="accordion-item">
                          <h2 class="accordion-header col-md-6 m-auto" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h6>
                                    <span class="span-initives">2-</span>
                                    ميثاق العاملين في القطاع الخاص غير الربحي
                                </h6>
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                            </div>
                          </div>
                        </div>
                        <!--item3-->
                        <div class="accordion-item">
                          <h2 class="accordion-header col-md-6 m-auto" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h6>
                                    <span class="span-initives">3-</span>
                                    اللاحة تنظيم العالقة مع المستفيدين
                                </h6>
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            </div>
                          </div>
                        </div>
                        <!--item4-->

                        <div class="accordion-item">
                            <h2 class="accordion-header col-md-6 m-auto" id="headingOne">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-4" aria-expanded="false" aria-controls="collapseOne">

                                <h6>
                                  <span class="span-initives">4-</span>
                                  سياسات المؤسسة
                                 </h6>
                              </button>
                            </h2>
                            <div id="collapseOne-4" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                              </div>
                            </div>
                          </div>
                          <!--item5-->

                          <div class="accordion-item">
                            <h2 class="accordion-header col-md-6 m-auto" id="headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo">
                                  <h6>
                                      <span class="span-initives">5-</span>
                                      سياسة خصوصية البيانات
                                  </h6>
                              </button>
                            </h2>
                            <div id="collapseTwo-2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                              </div>
                            </div>
                          </div>
                          <!--item6-->
                          <div class="accordion-item">
                            <h2 class="accordion-header col-md-6 m-auto" id="headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree-2" aria-expanded="false" aria-controls="collapseThree">
                                  <h6>
                                      <span class="span-initives">6-</span>
                                      سياسة التعامل مع الشركاء
                                  </h6>
                              </button>
                            </h2>
                            <div id="collapseThree-2" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                              </div>
                            </div>
                          </div>
                          <!--item7-->
                          <div class="accordion-item">
                            <h2 class="accordion-header col-md-6 m-auto" id="headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree-7" aria-expanded="false" aria-controls="collapseThree">
                                  <h6>
                                      <span class="span-initives">7-</span>
                                      سياسة إدارة المتطوعين
                                  </h6>
                              </button>
                            </h2>
                            <div id="collapseThree-7" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                              </div>
                            </div>
                          </div>
                           <!--item8-->
                           <div class="accordion-item">
                            <h2 class="accordion-header col-md-6 m-auto" id="headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree-8" aria-expanded="false" aria-controls="collapseThree">
                                  <h6>
                                      <span class="span-initives">8-</span>
                                      سياسة التبرعات والمساهمات
                                  </h6>
                              </button>
                            </h2>
                            <div id="collapseThree-8" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end-initives-->

@endsection
