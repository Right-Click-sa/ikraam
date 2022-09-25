<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        {{-- <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('img/brand/coreui.svg#full') }}"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('img/brand/coreui.svg#signet') }}"></use>
        </svg> --}}
    </div><!--c-sidebar-brand-->

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.dashboard')"
                :active="activeClass(Route::is('admin.dashboard'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Dashboard')" />
        </li>

        {{-- main page --}}
        @if($logged_in_user->can('admin.mainPage.edit'))
          <li class="c-sidebar-nav-item">
              <x-utils.link
                  class="c-sidebar-nav-link"
                  :href="route('admin.mainPage.edit')"
                  :active="activeClass(Route::is('admin.mainPage.edit'), 'c-active')"
                  icon="c-sidebar-nav-icon fas fa-address-card"
                  :text="__('Main page')" />
          </li>
        @endif

        <!-- about us -->
        @if($logged_in_user->can('admin.about.*'))

          <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.about.*'), 'c-open c-show') }}">
              <x-utils.link
                  href="#"
                  icon="c-sidebar-nav-icon fas fa-address-card"
                  class="c-sidebar-nav-dropdown-toggle"
                  :text="__('About Us')" />

              <ul class="c-sidebar-nav-dropdown-items">

                  <li class="c-sidebar-nav-item">
                      <x-utils.link
                          class="c-sidebar-nav-link"
                          :href="route('admin.about.edit')"
                          :active="activeClass(Route::is('admin.about.edit'), 'c-active')"
                          :text="__('About Us')" />
                  </li>

                  <li class="c-sidebar-nav-item">
                      <x-utils.link
                          class="c-sidebar-nav-link"
                          :href="route('admin.about.enterprise-missions')"
                          :active="activeClass(Route::is('admin.about.enterprise-missions'), 'c-active')"
                          :text="__('Enterprise missions and work')" />
                  </li>

                  <li class="c-sidebar-nav-item">
                      <x-utils.link
                          class="c-sidebar-nav-link"
                          :href="route('admin.about.policies')"
                          :active="activeClass(Route::is('admin.about.policies'), 'c-active')"
                          :text="__('Regulations and Policies')" />
                  </li>

                  <li class="c-sidebar-nav-item">
                      <x-utils.link
                          class="c-sidebar-nav-link"
                          :href="route('admin.about.trustees')"
                          :active="activeClass(Route::is('admin.about.trustees'), 'c-active')"
                          :text="__('Board of Trustees')" />
                  </li>

                  <li class="c-sidebar-nav-item">
                      <x-utils.link
                          class="c-sidebar-nav-link"
                          :href="route('admin.about.committees')"
                          :active="activeClass(Route::is('admin.about.committees'), 'c-active')"
                          :text="__('Committees')" />
                  </li>

                  <li class="c-sidebar-nav-item">
                      <x-utils.link
                          class="c-sidebar-nav-link"
                          :href="route('admin.about.structure')"
                          :active="activeClass(Route::is('admin.about.structure'), 'c-active')"
                          :text="__('The administrative structure')" />
                  </li>

              </ul>
          </li>
        @endif

        {{-- volunteer --}}
        @if($logged_in_user->can('admin.volunteer.*'))
          <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.volunteer.*'), 'c-open c-show') }}">
              <x-utils.link
                  href="#"
                  icon="c-sidebar-nav-icon fas fa-address-card"
                  class="c-sidebar-nav-dropdown-toggle"
                  :text="__('Volunteer')" />

              <ul class="c-sidebar-nav-dropdown-items">
                  <li class="c-sidebar-nav-item">
                      <x-utils.link
                          class="c-sidebar-nav-link"
                          :href="route('admin.volunteer.fields')"
                          :active="activeClass(Route::is('admin.volunteer.fields'), 'c-active')"
                          :text="__('Volunteer Fields')" />
                  </li>

                  <li class="c-sidebar-nav-item">
                      <x-utils.link
                          class="c-sidebar-nav-link"
                          :href="route('admin.volunteer.requests')"
                          :active="activeClass(Route::is('admin.volunteer.requests'), 'c-active')"
                          :text="__('Volunteer Requests')" />
                  </li>

              </ul>
          </li>
        @endif

        {{-- jobs --}}
        @if($logged_in_user->can('admin.jobs.*'))

          <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.jobs.*'), 'c-open c-show') }}">
              <x-utils.link
                  href="#"
                  icon="c-sidebar-nav-icon fas fa-address-card"
                  class="c-sidebar-nav-dropdown-toggle"
                  :text="__('Jobs')" />

              <ul class="c-sidebar-nav-dropdown-items">

                  <li class="c-sidebar-nav-item">
                      <x-utils.link
                          class="c-sidebar-nav-link"
                          :href="route('admin.jobs')"
                          :active="activeClass(Route::is('admin.jobs'), 'c-active')"
                          :text="__('Available Jobs')" />
                  </li>

                  <li class="c-sidebar-nav-item">
                      <x-utils.link
                          class="c-sidebar-nav-link"
                          :href="route('admin.job.requests')"
                          :active="activeClass(Route::is('admin.job.requests'), 'c-active')"
                          :text="__('Jobs Requests')" />
                  </li>

              </ul>
          </li>

        @endif

        {{-- membership --}}
        @if($logged_in_user->can('admin.memberships.*'))

          <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.memberships.*'), 'c-open c-show') }}">
              <x-utils.link
                  href="#"
                  icon="c-sidebar-nav-icon fas fa-address-card"
                  class="c-sidebar-nav-dropdown-toggle"
                  :text="__('Memberships')" />

              <ul class="c-sidebar-nav-dropdown-items">

                  <li class="c-sidebar-nav-item">
                      <x-utils.link
                          class="c-sidebar-nav-link"
                          :href="route('admin.memberships')"
                          :active="activeClass(Route::is('admin.memberships'), 'c-active')"
                          :text="__('Membership Types')" />
                  </li>

                  <li class="c-sidebar-nav-item">
                      <x-utils.link
                          class="c-sidebar-nav-link"
                          :href="route('admin.memberships.requests')"
                          :active="activeClass(Route::is('admin.memberships.requests'), 'c-active')"
                          :text="__('Membership Requests')" />
                  </li>
              </ul>
          </li>
        @endif

        {{-- associations --}}
        @if($logged_in_user->can('admin.associations.*'))

          <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.associations.*'), 'c-open c-show') }}">
              <x-utils.link
                  href="#"
                  icon="c-sidebar-nav-icon fas fa-address-card"
                  class="c-sidebar-nav-dropdown-toggle"
                  :text="__('Associations')" />

              <ul class="c-sidebar-nav-dropdown-items">

                  <li class="c-sidebar-nav-item">
                      <x-utils.link
                          class="c-sidebar-nav-link"
                          :href="route('admin.associations')"
                          :active="activeClass(Route::is('admin.associations'), 'c-active')"
                          :text="__('Associations')" />
                  </li>

                  {{-- associations requests --}}
                  <li class="c-sidebar-nav-item">
                    <x-utils.link
                    class="c-sidebar-nav-link"
                    :href="route('admin.associations.requests')"
                    :active="activeClass(Route::is('admin.associations.requests'), 'c-active')"
                    :text="__('Associations Requests')" />
                  </li>

              </ul>
          </li>
        @endif

        {{-- media center --}}
        @if($logged_in_user->can('admin.media.*'))
          <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.media.*'), 'c-open c-show') }}">
              <x-utils.link
                  href="#"
                  icon="c-sidebar-nav-icon fas fa-address-card"
                  class="c-sidebar-nav-dropdown-toggle"
                  :text="__('Media Center')" />

              <ul class="c-sidebar-nav-dropdown-items">
                  {{-- news --}}
                    <li class="c-sidebar-nav-item">
                        <x-utils.link
                            class="c-sidebar-nav-link"
                            :href="route('admin.media.news')"
                            :active="activeClass(Route::is('admin.media.news'), 'c-active')"
                            :text="__('News')" />
                    </li>

                  {{-- gallery --}}
                    <li class="c-sidebar-nav-item">
                      <x-utils.link
                      class="c-sidebar-nav-link"
                      :href="route('admin.media.gallery.edit')"
                      :active="activeClass(Route::is('admin.media.gallery.edit'), 'c-active')"
                      :text="__('Gallery')" />
                    </li>

                  {{-- videos --}}
                    <li class="c-sidebar-nav-item">
                        <x-utils.link
                            class="c-sidebar-nav-link"
                            :href="route('admin.media.videos')"
                            :active="activeClass(Route::is('admin.media.videos'), 'c-active')"
                            :text="__('Videos')" />
                    </li>

              </ul>
          </li>
        @endif

        {{-- initiatives --}}
        @if($logged_in_user->can('admin.initiatives'))
          <li class="c-sidebar-nav-item">
              <x-utils.link
                  class="c-sidebar-nav-link"
                  :href="route('admin.initiatives')"
                  :active="activeClass(Route::is('admin.initiatives'), 'c-active')"
                  icon="c-sidebar-nav-icon fas fa-address-card"
                  :text="__('Initiatives')" />
          </li>
        @endif

        {{-- contact us messages --}}
        @if($logged_in_user->can('admin.contact_us'))
          <li class="c-sidebar-nav-item">
              <x-utils.link
                  class="c-sidebar-nav-link"
                  :href="route('admin.contact_us')"
                  :active="activeClass(Route::is('admin.contact_us'), 'c-active')"
                  icon="c-sidebar-nav-icon fas fa-comments"
                  :text="__('Contact Us')" />
          </li>
        @endif

        {{-- settings --}}
        @if($logged_in_user->can('admin.settings'))
          <li class="c-sidebar-nav-item">
              <x-utils.link
                  class="c-sidebar-nav-link"
                  :href="route('admin.settings')"
                  :active="activeClass(Route::is('admin.settings'), 'c-active')"
                  icon="c-sidebar-nav-icon fas fa-user-cog"
                  :text="__('Settings')" />
          </li>
        @endif


        @if (
            $logged_in_user->hasAllAccess() ||
            (
                $logged_in_user->can('admin.access.user.list') ||
                $logged_in_user->can('admin.access.user.deactivate') ||
                $logged_in_user->can('admin.access.user.reactivate') ||
                $logged_in_user->can('admin.access.user.clear-session') ||
                $logged_in_user->can('admin.access.user.impersonate') ||
                $logged_in_user->can('admin.access.user.change-password')
            )
        )
            <li class="c-sidebar-nav-title">@lang('System')</li>

            <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.auth.user.*') || Route::is('admin.auth.role.*'), 'c-open c-show') }}">
                <x-utils.link
                    href="#"
                    icon="c-sidebar-nav-icon cil-user"
                    class="c-sidebar-nav-dropdown-toggle"
                    :text="__('Access')" />

                <ul class="c-sidebar-nav-dropdown-items">
                    @if (
                        $logged_in_user->hasAllAccess() ||
                        (
                            $logged_in_user->can('admin.access.user.list') ||
                            $logged_in_user->can('admin.access.user.deactivate') ||
                            $logged_in_user->can('admin.access.user.reactivate') ||
                            $logged_in_user->can('admin.access.user.clear-session') ||
                            $logged_in_user->can('admin.access.user.impersonate') ||
                            $logged_in_user->can('admin.access.user.change-password')
                        )
                    )
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.auth.user.index')"
                                class="c-sidebar-nav-link"
                                :text="__('User Management')"
                                :active="activeClass(Route::is('admin.auth.user.*'), 'c-active')" />
                        </li>
                    @endif

                    @if ($logged_in_user->hasAllAccess())
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.auth.role.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Role Management')"
                                :active="activeClass(Route::is('admin.auth.role.*'), 'c-active')" />
                        </li>
                    @endif
                </ul>
            </li>
        @endif

        {{-- @if ($logged_in_user->hasAllAccess())
            <li class="c-sidebar-nav-dropdown">
                <x-utils.link
                    href="#"
                    icon="c-sidebar-nav-icon cil-list"
                    class="c-sidebar-nav-dropdown-toggle"
                    :text="__('Logs')" />

                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <x-utils.link
                            :href="route('log-viewer::dashboard')"
                            class="c-sidebar-nav-link"
                            :text="__('Dashboard')" />
                    </li>
                    <li class="c-sidebar-nav-item">
                        <x-utils.link
                            :href="route('log-viewer::logs.list')"
                            class="c-sidebar-nav-link"
                            :text="__('Logs')" />
                    </li>
                </ul>
            </li>
        @endif --}}
    </ul>

    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div><!--sidebar-->
