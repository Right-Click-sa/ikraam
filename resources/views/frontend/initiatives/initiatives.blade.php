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
                              @lang('Preparing research studies')
                             </h6>
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                  <div class="col-md-5 col-box mx-3">
                                      <div class="box-title">
                                          <h6 class="title-accordion">@lang('The initiative') </h6>
                                          <p>
                                            @lang('Preparing research and studies regarding the needs of the honoring of the dead sector and examining the existing and expected challenges and global renewable practices that can be adapted according to the local environment')
                                          </p>
                                      </div>

                                  </div>
                                  <div class="col-md-5 col-box mx-3">
                                      <div class="box-title">
                                          <h6 class="title-accordion">@lang('output') </h6>
                                          <ul>
                                              <li>@lang('Study the status of existing associations')</li>
                                              <li> @lang("Study the sector's need for organizations and resources")</li>
                                              <li>@lang('Searching for global best practices that are provided to the beneficiary directly')</li>
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
                                  @lang('Contribute to increasing the number of associations')
                              </h6>
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <div class="row col-md-11 m-auto">
                              <div class="col-md-5 col-box mx-3">
                                <div class="box-title">
                                    <h6 class="title-accordion">@lang('The initiative') </h6>
                                    <p>
                                      @lang('Contribute to increasing the number of associations operating in the honoring of the dead sector, by listing the associations and voluntary teams currently working in the field, and then identifying the need at the level of cities and regions, and then coordinating with those interested in areas of need and contributing to the establishment and support of associations')
                                    </p>
                                </div>
                              </div>
                              <div class="col-md-5 col-box mx-3">
                                  <div class="box-title">
                                      <h6 class="title-accordion">@lang('output') </h6>
                                      <ul>
                                          <li>@lang('Inventory of associations and workers in the sector currently')</li>
                                          <li>@lang('A campaign to market the idea of establishing specialized associations')</li>
                                          <li>@lang('Connecting those interested to the supervisory unit in the ministry')</li>
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
                                  @lang('Forming effective partnerships')
                              </h6>
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <div class="row col-md-11 m-auto">
                              <div class="col-md-5 col-box mx-3">
                                  <div class="box-title">
                                      <h6 class="title-accordion">@lang('The initiative') </h6>
                                      <p>
                                          @lang('Determining the different influencers on the issue of the institution, their roles, ways to involve them in it, and the mechanisms of dealing and communicating with them in order to increase the level of their participation and interaction.')
                                      </p>
                                  </div>

                              </div>
                              <div class="col-md-5 col-box mx-3">
                                  <div class="box-title">
                                      <h6 class="title-accordion">@lang('output') </h6>
                                      <ul>
                                          <li>@lang('Identification of other influencers on an enterprise cause')</li>
                                          <li>@lang('Establishing mechanisms for dealing, motivating and engaging all influencers')</li>
                                          <li>@lang('Signing partnerships with actors and those interested in the cause')</li>
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
                                @lang('Activate community participation')
                               </h6>
                            </button>
                          </h2>
                          <div id="collapseOne-4" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">

                            <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                <div class="col-md-5 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">@lang('The initiative') </h6>
                                        <p>
                                          @lang('Determining the different forms of community participation, its target groups, and its beneficiaries, and designing those opportunities with stakeholders, including volunteers, associations, partner agencies, and beneficiaries.')
                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-5 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">@lang('output') </h6>
                                        <ul>
                                            <li>@lang('Determining the segments of volunteers, their preferences and abilities')</li>
                                            <li> @lang('Identifying volunteer needs and designing opportunities')</li>
                                            <li>@lang('Limit the number of volunteers in the field')</li>
                                            <li>@lang('Increase the number of volunteers')</li>
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
                                    @lang('Strengthening the regulatory environment')
                                </h6>
                            </button>
                          </h2>
                          <div id="collapseTwo-2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                <div class="col-md-5 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">@lang('The initiative') </h6>
                                        <p>
                                          @lang('This initiative seeks to create a link that connects all stakeholders by clarifying environmental processes and tasks that can be worked on so that the work of each entity does not overlap with the other.')
                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-5 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">@lang('output') </h6>
                                        <ul>
                                            <li> @lang('Laying down bylaws and regulations with the relevant authorities') </li>
                                            <li> @lang('A procedural guide on how to deal with the corpse in all its cases') </li>

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
                                   @lang('Develop a financial sustainability model for the organization')
                               </h6>
                            </button>
                          </h2>
                          <div id="collapseThree-2" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                <div class="col-md-5 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">@lang('The initiative') </h6>
                                        <p>
                                          @lang('This initiative aims to maintain financial stability, develop the institution’s resources and assets, and outline the institution’s needs and how to manage it within modern frameworks that contribute to future material prosperity.')
                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-5 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">@lang('output') </h6>
                                        <ul>
                                            <li> @lang('Governing Financial Regulations') </li>
                                            <li> @lang('Determine different sources of income') </li>
                                            <li> @lang('Models to increase income from various sources') </li>
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
                                    @lang('Designing training and training programs')
                                </h6>
                            </button>
                          </h2>
                          <div id="collapseThree-7" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                <div class="col-md-5 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">@lang('The initiative') </h6>
                                        <p>
                                          @lang('Designing rehabilitation and training programs for workers in the honoring of the dead sector and presenting them in cooperation with associations')
                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-5 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">@lang('output') </h6>
                                        <ul>
                                            <li> @lang('Registering a number of volunteers and recruiters') </li>
                                            <li> @lang('Holding courses and workshops')	</li>
                                            <li> @lang('Issuance of accreditation certificates or licenses') </li>
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
                                    @lang('Work on designing digital solutions with the relevant authorities')
                                </h6>
                            </button>
                          </h2>
                          <div id="collapseThree-8" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                <div class="col-md-5 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">@lang('The initiative') </h6>
                                        <p>
                                          @lang('Designing digital services that facilitate procedures for the families of the deceased, in partnership with the concerned authorities, and services that improve the level of work of associations')
                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-5 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">@lang('output') </h6>
                                        <ul>
                                            <li> @lang('List all stakeholders with the role of each one') </li>
                                            <li> @lang('Issuing a procedural guide explaining the tasks of each party') </li>
                                            <li> @lang('Formation of a committee of specialists in computer sciences to design a service using the Absher application that facilitates completion') </li>
                                            <li> @lang('Deceased procedures') </li>
                                            <li> @lang('Linking documents and regulations to the application of Absher and Ikram') </li>
                                            <li>@lang('An electronic service that monitors vacant laundries and hospitals')</li>
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
                                    @lang('Establishment of the endowment fund to support the honoring of the dead sector')
                               </h6>
                            </button>
                          </h2>
                          <div id="collapseThree-9" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                <div class="col-md-5 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">@lang('The initiative') </h6>
                                        <p>
                                          @lang('Establishing an endowment fund whose main mission is to achieve the financial sustainability of the institution, and also contribute to supporting non-profit organizations in the field of honoring the dead')
                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-5 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">@lang('output') </h6>
                                        <ul>
                                            <li>@lang('Financing products for associations')</li>
                                            <li>@lang('social investment projects')</li>
                                            <li>@lang('Financial returns to the organization')</li>

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
                                    @lang('Formation of the monitoring committee and the care of cemeteries')
                                </h6>
                            </button>
                          </h2>
                          <div id="collapseThree-10" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                <div class="col-md-5 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">@lang('The initiative') </h6>
                                        <p>
                                          @lang('Formation of the monitoring committee and the care of cemeteries')
                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-5 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">@lang('output') </h6>
                                        <ul>
                                            <li>@lang('Creating a database of cemeteries in the Kingdom')</li>
                                            <li>@lang('A heat map of the carrying capacity of cemeteries across the Kingdom')</li>
                                            <li>@lang('The list of penalties and violations in cooperation with the Municipal and Rural Affairs and Housing')</li>
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
                                    @lang('Modern washbasin model')
                                 </h6>
                          </button>
                          </h2>
                          <div id="collapseThree-11" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                <div class="col-md-5 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">@lang('The initiative') </h6>
                                        <p>
                                          @lang('Develop an ideal model for the modern laundry based on the most prominent local experiences, so that the model becomes a standard for any donor or entity wishing to develop a mortuary laundry')
                                      </p>
                                    </div>

                                </div>
                                <div class="col-md-5 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">@lang('output') </h6>
                                        <ul>
                                            <li>@lang('Monitoring the best local experiences of laundries and their most prominent features')</li>
                                            <li>@lang('Modern Laundry Standard')</li>
                                            <li>@lang('Existing Laundry Evaluation Form to Determine Need')</li>
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
                                    @lang('Strengthening communication between influencers in the honoring of the dead sector')
                                  </h6>
                            </button>
                          </h2>
                          <div id="collapseThree-12" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                <div class="col-md-5 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">@lang('The initiative') </h6>
                                        <p>
                                          @lang('Create an environment that allows communication and exchange of information on opportunities and challenges between the relevant and influential sectors (government, private and non-profit)')
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-5 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">@lang('output') </h6>
                                        <ul>
                                            <li>@lang('An annual meeting that brings together representatives from all stakeholders in the honoring of the dead sector')</li>
                                            <li>@lang('Annual report on the reality of honoring the dead sector')</li>
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
                                    @lang('Launching the path of honoring the dead at the Joud housing platform')
                                  </h6>

                                  </button>
                          </h2>
                          <div id="collapseThree-13" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                <div class="col-md-5 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">@lang('The initiative') </h6>
                                        <p>
                                            @lang("Launching the Path of Honoring the Dead on the Jude Housing Platform under the name of 'The Path of Honoring the Dead' to mobilize support and resources for the initiatives of the Associations of Honoring the Dead")
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-5 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">@lang('output') </h6>
                                        <ul>
                                            <li>@lang('A window to mobilize resources to support the projects of the civil associations honoring the dead and those working in the field: such as the laundries of the dead')</li>
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
                                    @lang('Launching the Awareness Visual Channel')
                                </h6>
                            </button>
                          </h2>
                          <div id="collapseThree-14" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="row col-md-11 m-auto">
                                <div class="col-md-5 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">@lang('The initiative') </h6>
                                        <p>
                                          @lang('Launching an awareness video channel on YouTube, to educate the community on issues related to honoring the dead, both from a legal jurisprudence point of view, or in terms of addressing the challenges facing beneficiaries in the field of honoring the dead')
                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-5 col-box mx-3">
                                    <div class="box-title">
                                        <h6 class="title-accordion">@lang('output') </h6>
                                        <ul>
                                            <li>@lang('An educational video channel to display content that contributes to education and awareness of issues of honoring the dead')</li>
                                            <li>@lang('Preparing content that is subject to display and dissemination, either in the educational awareness video channel of the institution, or disseminated on various social media platforms')</li>
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
