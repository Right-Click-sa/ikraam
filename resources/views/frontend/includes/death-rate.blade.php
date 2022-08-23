<section class="component-deat mb-5 mt-5">
    <div class="container">
       <ul class="nav nav-pills mb-3 justify-content-end" id="pills-tab" role="tablist">
           <li class="nav-item" role="presentation">
             <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">@lang('Saudi Arabia')</button>
           </li>
       </ul>
       <div class="tab-content" id="pills-tabContent">
           <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
               <div class="row">
                   <div class="col-md-6 defintion-death">
                       <div class="col-md-8 justify-content-center text-center w-100">
                           <h5 class="title-death">@lang('Death Rate')</h5>

                           <div class="row row-cols-lg-4 row-cols-md-2 row-cols-1 g-2 row-cases mt-5">
                               <div class="text-center p-2">
                                   <div class="row-cases-col p-3">
                                       <div class="title-cases">
                                           <span class="d-block mt-1">{{ $mainPage->year1 }}</span>
                                       </div>
                                       <div class="number-deat mt-3">
                                           <small>{{ $mainPage->year1_cases }}</small>
                                           <span class="d-block">
                                               <i class="fa-solid fa-user"></i>
                                               @lang('Case')
                                           </span>
                                       </div>
                                   </div>
                               </div>

                               <div class="text-center p-2">
                                   <div class="row-cases-col p-3">
                                       <div class="title-cases">
                                           <span class="d-block mt-1">{{ $mainPage->year2 }}</span>
                                       </div>
                                       <div class="number-deat mt-3">
                                           <small>{{ $mainPage->year2_cases }}</small>
                                           <span class="d-block">
                                               <i class="fa-solid fa-user"></i>
                                               @lang('Case')
                                           </span>
                                       </div>
                                   </div>

                               </div>

                               <div class=" text-center p-2">
                                   <div class="row-cases-col p-3 ">
                                       <div class="title-cases">
                                           <span class="d-block mt-1">{{ $mainPage->year3 }}</span>
                                       </div>
                                       <div class="number-deat mt-3">
                                           <small>{{ $mainPage->year3_cases }}</small>
                                           <span class="d-block">
                                               <i class="fa-solid fa-user"></i>
                                               @lang('Case')
                                           </span>
                                       </div>
                                   </div>

                               </div>


                           </div>
                       </div>
                   </div>

                   <div class="col-md-6 img-death">
                       <img src="/assets/img/death.png" alt="death">
                   </div>
               </div>
           </div>

       </div>
    </div>
</section>
