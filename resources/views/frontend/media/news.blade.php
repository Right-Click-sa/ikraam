@extends('frontend.layouts.master')

@section('title', __('News'))

@section('content')

  <!--start-new-->
    <section class="component-new pt-5 pb-5">
        <div class="container">
            <!--start-slider---->
                <div id="carouselExampleCaptions" class="coarousel-new carousel slide mb-5" data-bs-ride="false">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/assets/img/new.png" class="img-new-boject d-block w-100" alt="new-poject">
                            <div class="carousel-captio mt-4">
                            <div class="row justify-content-between align-items-start">
                                <h5 class="col-md-5  text-capitalize">
                                    ورش العمل لمناقشة التحديات وتطوير قطاع إكرام الموتى
                                </h5>
                                <div class="col tx-icon-new fs-5">

                                    يناير 2022
                                <i class="far fa-clock "></i>
                                </div>
                            </div>
                            <pre class="pre-video col-md-12 fs-5 fw-semibold">

                                من منطلق المساهمة في تطوير قطاع إكرام الموتى بالتعاون مع الوحدة الإشرافية تم عقد ورشة عمل  متخصصه في إكرام الموتى على مستوى قطاعات وزارة الشؤون البلدية والقروية  لمناقشة تحديات قطاع إكرام
                                الموتى وانتهت ورشة العمل بعدد من المبادرات النوعية لتطوير قطاع إكرام الموتى .

                            </pre>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/img/naw-2.jpeg" class="img-new-boject d-block w-100" alt="new-poject">
                            <div class="carousel-captio mt-4">
                            <div class="row justify-content-between align-items-start">
                                    <h5 class="col-md-5  text-capitalize">
                                        زيارة أمانة الأحساء لعرض نموذج المقبرة النموذجية
                                    </h5>
                                    <div class="col tx-icon-new fs-5">

                                        يناير 2022
                                    <i class="far fa-clock "></i>
                                    </div>
                                </div>
                            <pre class="pre-video fs-5 fw-semibold">
                                استكمالاً لدور مؤسسة إكرام الأهلية في المساهمة في رفع مستوى خدمات  قطاع إكرام الموتى فقد تم الاتفاق مع أمانة الأحساء لعمل نموذج لمقبرة ومغسلة نموذجية
                                ، ولقد قامت أمانة الأحساء مشكورة بتوفير قطعة أرض بمساحة 2 كم لإقامة المشروع
                            </pre>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/img/new-4.PNG" class="img-new-boject d-block w-100" alt="new-poject">
                            <div class="carousel-captio mt-4">
                            <div class=" row justify-content-between align-items-start">
                                    <h5 class="col-md-5  text-capitalize">
                                        التعاون مع إدارة الوحدة الإشرافية لرصد التشوه البصري حول المقابر
                                    </h5>
                                    <div class="col tx-icon-new fs-5">

                                        يناير 2022
                                    <i class="far fa-clock "></i>
                                    </div>
                            </div>
                            <pre class="pre-video fs-5 fw-semibold">
                                استكمالاً لجهود مؤسسة إكرام الموتى الأهلية في تنظيم وتطوير قطاع إكرام الموتى
                                الأهلية تم إطلاق مبادرة إزالة التشوه البصري بالتعاون مع إدارة التطوع التابعة للوحدة الاشرافية بوزارة الشؤون البلدية والقروية والإسكان من خلال العمل مع مجموعة من المتطوعين ، حيث تم رصد التشوه البصري حول المقابر في ثلاث مناطق من مناطق المملكة.
                            </pre>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/img/new-5.jpg" class="img-new-boject d-block w-100" alt="new-poject">
                            <div class="carousel-captio mt-4">
                            <div class=" row justify-content-between align-items-start">
                                    <h5 class="col-md-5  text-capitalize">
                                        زيارة مدينة الملك سعود الطبية
                                    </h5>
                                    <div class="col tx-icon-new fs-5">

                                        يناير 2022
                                    <i class="far fa-clock "></i>
                                    </div>
                            </div>
                            <pre class="pre-video fs-5 fw-semibold">
                                تم زيارة إدارة شؤون الموتى في مدينة الملك سعود الطبية والنظر للممارسات القائمة وبحث سبل التكامل بين المدينة الطبية والمؤسسة

                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                    <button class="carousel-control-prev mx-2" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>

                </div>
            <!--end-slider-->
            <!--grid-new-->
                <div class="mt-4 mb-5 component-new-new">
                    <div class="row row-cols-md-2 row-cols-lg-3 row-cols-1 g-5">
                            <div class="col d-flex mb-1">
                            <div class="card-new-new">
                                <img src="/assets/img/naw-2.jpeg" alt="new">
                                <h6 class="fs-4 fw-bold mt-2">
                                    زيارة أمانة الأحساء لعرض نموذج المقبرة النموذجية
                                  </h6>
                                <p class="fs-7  mt-2">
                                        يناير 2022
                                        <i class="far fa-clock "></i>
                                </p>

                            </div>
                            </div>
                            <!---tow-new-->
                            <div class="col d-flex mb-1">
                            <div class="card-new-new">
                            <img src="/assets/img/new-4.PNG" alt="new">

                            <h6 class="fs-4 fw-bold mt-2">
                                 التعاون مع إدارة الوحدة الإشرافية لرصد التشوه البصري حول المقابر
                            </h6>
                            <p class="fs-7  mt-2"> يناير
                                2022
                                <i class="far fa-clock "></i>
                            </p>
                            </div>
                        </div>
                        <!--end-tow-->
                        <!--there-new-->
                        <div class="col d-flex mb-1">
                            <div class="card-new-new">
                            <img src="/assets/img/new-5.jpg" alt="new">
                            <h6 class="fs-4 fw-bold mt-2">
                                زيارة مدينة الملك سعود الطبية
                            </h6>
                            <p class="fs-7  mt-2">
                                    يناير2022
                                    <i class="far fa-clock "></i>
                            </p>
                            </div>
                        </div>
                        <!--end-there-project-->

                    </div>
                </div>
            <!--grid-new-->
        </div>
    </section>
    <!--end-new-->

@endsection
