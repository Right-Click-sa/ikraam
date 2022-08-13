@extends('frontend.layouts.master')

@section('title', __('Initiatives'))

@section('content')

  <!--start-initives-->
    <section class="component-initives pt-5  pb-5">
        <div class="container">
          <div class=" text-center">
            <strong class="m-auto text-initiatives-head title-login">
              @lang('Initiatives')
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
                              إعداد الأبحاث الدراسات
                             </h6>
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                  <div class="col-md-6 col-box mx-3">
                                      <div class="box-title">
                                          <h6 class="title-accordion">المبادرة </h6>
                                          <p>عداد الأبحاث والدراسات فيما يتعلق باحتياج قطاع إكرام الموتى
                                              وبحث التحديات القائمة والمتوقعة والممارسات العالمية المتجددة
                                              التي يمكن تطويعها وفق البيئة المحلية
                                          </p>
                                      </div>

                                  </div>
                                  <div class="col-md-4 col-box mx-3">
                                      <div class="box-title">
                                          <h6 class="title-accordion">المخرجات </h6>
                                          <ul>
                                              <li>دراسة وضع الجمعيات القائمة</li>
                                              <li> دراسة احتياج القطاع من المنظمات والموارد</li>
                                              <li>البحث عن أفضل الممارسات العالمية التي تقدم
                                                  للمستفيد مباشرة
                                              </li>
                                          </ul>
                                      </div>

                                  </div>
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
                                  المساهمة في زيادة عدد الجمعيات
                              </h6>
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <div class="row col-md-11 m-auto">
                              <div class="col-md-6 col-box mx-3">
                                  <div class="box-title">
                                      <h6 class="title-accordion">المبادرة </h6>
                                      <p>
                                        المساهمة في زيادة عدد الجمعيات العاملة في قطاع إكرام الموتى، وذلك عن طريق حصر الجمعيات والفرق التطوعية
                                        العاملة في المجال حاليا، ومن ثم تحديد الاحتياج على مستوى المدن والمناطق، وبعد ذلك التنسيق مع المهتمين في
                                        المناطق ذات الاحتياج والمساهمة في تأسيس الجمعيات ودعمها

                                      </p>
                                  </div>

                              </div>
                              <div class="col-md-4 col-box mx-3">
                                  <div class="box-title">
                                      <h6 class="title-accordion">المخرجات </h6>
                                      <ul>
                                          <li>ا حصر الجمعيات والعاملين في القطاع حاليا</li>
                                          <li>حملة لتسويق فكرة إنشاء جمعيات متخصصة</li>
                                          <li>ربط المهتمين بالوحدة الإشرافية في الوزارة
                                          </li>
                                      </ul>
                                  </div>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--item3-->
                      <div class="accordion-item">
                        <h2 class="accordion-header col-md-6 m-auto" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <h6>
                                  <span class="span-initives">3-</span>
                                  . تكوين شراكات فاعلة
                              </h6>
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <div class="row col-md-11 m-auto">
                              <div class="col-md-6 col-box mx-3">
                                  <div class="box-title">
                                      <h6 class="title-accordion">المبادرة </h6>
                                      <p>
                                              تحديد المؤثرين المختلفين في قضية المؤسسة وأدوارهم وطرق إشراكهم فيها وآليات التعامل والتواصل معهم بهدف
                                          زيادة مستوى مشاركتهم وتفاعلهم

                                      </p>
                                  </div>

                              </div>
                              <div class="col-md-4 col-box mx-3">
                                  <div class="box-title">
                                      <h6 class="title-accordion">المخرجات </h6>
                                      <ul>
                                          <li>. تحديد المؤثرين الآخرين في قضية المؤسسة.</li>
                                          <li>, وضع آليات التعامل والتحفيز والإشراك لجميع المؤثرين.</li>
                                          <li>توقيع الشراكات مع الجهات الفاعلة والمهتمة بالقضية
                                          </li>
                                      </ul>
                                  </div>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--item4-->

                      <div class="accordion-item">
                          <h2 class="accordion-header col-md-6 m-auto" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-4" aria-expanded="false" aria-controls="collapseOne">

                              <h6>
                                <span class="span-initives">4-</span>
                                تفعيل المشاركة المجتمعية
                               </h6>
                            </button>
                          </h2>
                          <div id="collapseOne-4" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">

                            <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                <div class="col-md-6 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">المبادرة </h6>
                                        <p>
                                          تحديد صور المشاركة المجتمعية المختلفة والفئات المستهدفة بها، والمستفيدين منها، وتصميم تلك
                                          الفرص مع ذوي العلاقة من متطوعين وجمعيات وجهات شريكة ومستفيدين

                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-4 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">المخرجات </h6>
                                        <ul>
                                            <li>تحديد شرائح المتطوعين وتفضيلاتهم ومقدراتهم.</li>
                                            <li> مع تحديد الاحتياجات التطوعية وتصميم الفرص</li>
                                            <li>حصر عدد المتطوعين في المجال
                                            </li>
                                            <li>زيادة عدد المتطوعين</li>
                                        </ul>
                                    </div>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--item5-->

                        <div class="accordion-item">
                          <h2 class="accordion-header col-md-6 m-auto" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo">
                                <h6>
                                    <span class="span-initives">5-</span>
                                    تعزيز البيئة التنظيمية
                                </h6>
                            </button>
                          </h2>
                          <div id="collapseTwo-2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                <div class="col-md-6 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">المبادرة </h6>
                                        <p>
                                          تسعى هذه المبادرة إلى خلق حلقة وصل تربط جميع الجهات المعنية من خلال توضيح العمليات البيئية
                                          والمهام التي يمكن العمل بها كي لا يتداخل عمل كل جهة مع الأخرى.

                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-4 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">المخرجات </h6>
                                        <ul>
                                            <li>	وضع اللوائح والأنظمة مع الجهات ذات العلاقة</li>
                                            <li> دليل إجرائي في كيفية التعامل مع الجثمان بجميع أحواله</li>

                                        </ul>
                                    </div>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--item6-->
                        <div class="accordion-item">
                          <h2 class="accordion-header col-md-6 m-auto" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree-2" aria-expanded="false" aria-controls="collapseThree">
                                <h6>
                                    <span class="span-initives">6-</span>
                                   تطوير نموذج الاستدامة المالية للمؤسسة
                               </h6>
                            </button>
                          </h2>
                          <div id="collapseThree-2" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                <div class="col-md-6 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">المبادرة </h6>
                                        <p>
                                          تهدف هذه المبادرة إلى المحافظة على الاستقرار المالي وتطوير موارد وأصول المؤسسة ورسم معالم
                                          احتياج المؤسسة وكيفية إدارتها ضمن أطر حديثة تسهم في الازدهار المستقبلي المادي

                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-4 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">المخرجات </h6>
                                        <ul>
                                            <li>	اللوائح المالية الحاكمة.</li>
                                            <li> 	تحديد مصادر الدخل المختلفة.</li>
                                            <li>•	نماذج زيادة الدخل من مختلف المصادر</li>
                                        </ul>
                                    </div>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--item7-->
                        <div class="accordion-item">
                          <h2 class="accordion-header col-md-6 m-auto" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree-7" aria-expanded="false" aria-controls="collapseThree">
                                <h6>
                                    <span class="span-initives">7-</span>
                                    تصميم برامج للتأهيل والتدريب
                                </h6>
                            </button>
                          </h2>
                          <div id="collapseThree-7" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                <div class="col-md-6 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">المبادرة </h6>
                                        <p>
                                          تصميم برامج تأهيل وتدريب العاملين في مجال قطاع إكرام الموتى وتقديمها بالتعاون مع الجمعيات
                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-4 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">المخرجات </h6>
                                        <ul>
                                            <li>		تسجيل عدد من المتطوعين والمحتسبين.</li>
                                            <li> 		إقامة الدورات والورش.</li>
                                            <li>	إصدار شهادات اعتماد أو تراخيص</li>
                                        </ul>
                                    </div>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                         <!--item8-->
                         <div class="accordion-item">
                          <h2 class="accordion-header col-md-6 m-auto" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree-8" aria-expanded="false" aria-controls="collapseThree">
                                <h6>
                                    <span class="span-initives">8-</span>
                                    العمل على تصميم الحلول الرقمية مع الجهات ذات العلاقة
                                </h6>
                            </button>
                          </h2>
                          <div id="collapseThree-8" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                <div class="col-md-6 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">المبادرة </h6>
                                        <p>
                                          تصميم خدمات رقمية تسهل الإجراءات على ذوي المتوفى بالشراكة مع الجهات
                                          المعنية، وخدمات تحسن من مستوى عمل الجمعيات
                                                                                    </p>
                                    </div>

                                </div>
                                <div class="col-md-4 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">المخرجات </h6>
                                        <ul>
                                            <li>		حصر جميع الجهات المعنية مع دور كل واحد منها</li>
                                            <li> 		إصدار دليل إجرائي يوضح فيه مهام كل جهة</li>
                                            <li>	تشكيل لجنة من المتخصصين في علوم الحاسب لتصميم خدمة بتطبيـق أبـشـر تيسـر انهـاء</li>
                                            <li>	إجراءات المتوفى</li>
                                            <li>	ربط الوثائق واللوائح بتطبيق أبشر و إكرام</li>
                                            <li>خدمة الكترونية تقوم برصد المغاسل والمستشفيات الشاغرة</li>
                                          </ul>
                                    </div>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--item9-->
                        <div class="accordion-item">
                          <h2 class="accordion-header col-md-6 m-auto" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree-9" aria-expanded="false" aria-controls="collapseThree">
                                <h6>
                                    <span class="span-initives">9-</span>
                                    .تأسيس الصندوق الوقفي لدعم قطاع إكرام الموتى
                               </h6>
                            </button>
                          </h2>
                          <div id="collapseThree-9" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                <div class="col-md-6 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">المبادرة </h6>
                                        <p>
                                          تأسيس صندوق وقفي مهمته الأساسية تحقيق الاستدامة المالية للمؤسسة، ويسهم أيضا في دعم
                                          المنظمات غير الربحية في مجال إكرام الموتى

                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-4 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">المخرجات </h6>
                                        <ul>
                                            <li>	منتجات تمويلية للجمعيات.</li>
                                            <li> 		مشاريع استثمار اجتماعي</li>
                                            <li>عوائد مالية للمؤسسة</li>

                                          </ul>
                                    </div>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                         <!--item10-->
                         <div class="accordion-item">
                          <h2 class="accordion-header col-md-6 m-auto" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree-10" aria-expanded="false" aria-controls="collapseThree">
                                <h6>
                                    <span class="span-initives">10-</span>
                                    التكوين لجنة الرصد والاعتناء بالمقابر
                                </h6>
                            </button>
                          </h2>
                          <div id="collapseThree-10" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                <div class="col-md-6 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">المبادرة </h6>
                                        <p>
                                          تكوين لجنة الرصد والاعتناء بالمقابر
                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-4 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">المخرجات </h6>
                                        <ul>
                                            <li>	تكوين قاعدة بيانات للمقابر بالمملكة</li>
                                            <li> 	خارطة حرارية للطاقة الاستيعابية للمقابر بأنحاء المملكة.
                                              ۱۰,۳ لائحة العقوبات والمخالفات بالتعاون مع الشؤون البلدية والقروية
                                              والإسكان
                                              </li>


                                          </ul>
                                    </div>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                         <!--item11-->
                         <div class="accordion-item">
                          <h2 class="accordion-header col-md-6 m-auto" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree-11" aria-expanded="false" aria-controls="collapseThree">
                                <h6>
                                    <span class="span-initives">11-</span>
                                    نموذج المغسلة الحديثة
                                 </h6>
                          </button>
                          </h2>
                          <div id="collapseThree-11" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                <div class="col-md-6 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">المبادرة </h6>
                                        <p>
                                          وضع نموذج مثالي للمغسلة الحديثة بناء على أبرز التجارب المحلية، ليصبح النموذج معيار لأي
                                          مانح أو جهة ترغب باستحداث مغسلة أموات
                                      </p>
                                    </div>

                                </div>
                                <div class="col-md-4 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">المخرجات </h6>
                                        <ul>
                                            <li>رصد أفضل التجارب المحلية للمغاسل وأبرز مميزاتها</li>
                                            <li> 	معيار المغسلة الحديثة.
                                              </li>
                                            <li>, نموذج تقييم المغاسل القائمة لتحديد الاحتياج</li>

                                          </ul>
                                    </div>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                         <!--item12-->
                         <div class="accordion-item">
                          <h2 class="accordion-header col-md-6 m-auto" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree-12" aria-expanded="false" aria-controls="collapseThree">
                                <h6>
                                    <span class="span-initives">12-</span>
                                    . تعزيز التواصل بين المؤثرين في قطاع اكرام الموتى
                                  </h6>
                            </button>
                          </h2>
                          <div id="collapseThree-12" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                <div class="col-md-6 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">المبادرة </h6>
                                        <p>
                                          خلق بيئة تتيح التواصل وتبادل المعلومات عن الفرص والتحديات بين القطاعات المعنية والمؤثرة
                                          (الحكومي والخاص وغير الربحي).


                                      </p>
                                    </div>

                                </div>
                                <div class="col-md-4 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">المخرجات </h6>
                                        <ul>
                                            <li>
                                              لقاء سنوي يجمع ممثلين مـن كـافـة أصحاب المصلحة
                                              بقطاع اكرام الموتى
                                              </li>
                                            <li> 	تقرير سنوي عن واقع قطاع إكرام الموتى
                                              </li>

                                          </ul>
                                    </div>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                         <!--item13-->
                         <div class="accordion-item">
                          <h2 class="accordion-header col-md-6 m-auto" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree-13" aria-expanded="false" aria-controls="collapseThree">
                                <h6>
                                    <span class="span-initives">13-</span>
                                    .إطلاق مسار إكرام الموتى بمنصة جود للإسكان
                                  </h6>

                                  </button>
                          </h2>
                          <div id="collapseThree-13" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                <div class="col-md-6 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">المبادرة </h6>
                                        <p>
                                          إطلاق مسار إكرام الموتى بمنصة جود للإسكان تحت مسمى "مسار إكرام الموتى" لحشد الدعم
                                          والموارد لمبادرات جمعيات قطاع إكرام الموتى


                                      </p>
                                    </div>

                                </div>
                                <div class="col-md-4 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">المخرجات </h6>
                                        <ul>
                                            <li>
                                                                نافـذة حشـد مـوارد لـدعم مشاريع جمعيـات اكـرام
                                                                                    الموتى الأهلية والجهات العاملة بالمجـال: مثل مغاسل
                                                                                    الموتى

                                              </li>


                                          </ul>
                                    </div>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                         <!--item14-->
                         <div class="accordion-item">
                          <h2 class="accordion-header col-md-6 m-auto" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree-14" aria-expanded="false" aria-controls="collapseThree">
                                <h6>
                                    <span class="span-initives">14-</span>
                                    . إطلاق القناة المرئية التوعوية
                                </h6>
                            </button>
                          </h2>
                          <div id="collapseThree-14" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                <div class="col-md-6 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">المبادرة </h6>
                                        <p>
                                          إطلاق قناة مرئية توعوية على اليوتيوب، لتثقيف المجتمع بالقضايا التي تخص إكرام الموتى ، سواء من
                                          الناحية الفقهية الشرعية، أو من ناحية معالجة التحديات التي تواجه المستفيدين بمجال إكرام الموتى


                                      </p>
                                    </div>

                                </div>
                                <div class="col-md-4 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">المخرجات </h6>
                                        <ul>
                                            <li>
                                             قناة مرئية توعوية لعرض محتوى يساهم في التثقيف والتوعية بقضايا إكرام الموتى
                                            </li>
                                            <li>	إعـداد محتـوى يكـون قـابـل للـعـرض والنشـر ، سـواء فـي القنـاة المرئيـة التوعويـة للمؤسسـة، أو نشـرها بمختلـف منصات التواصل الاجتماعي</li>

                                          </ul>
                                    </div>

                                </div>
                              </div>
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
