<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('img/brand/coreui.svg#full') }}"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('img/brand/coreui.svg#signet') }}"></use>
        </svg>
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

        <!-- about us -->
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

        {{-- volunteer --}}
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


            </ul>
        </li>


        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.contact_us')"
                :active="activeClass(Route::is('admin.contact_us'), 'c-active')"
                icon="c-sidebar-nav-icon fas fa-comments"
                :text="__('Contact Us')" />
        </li>


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

        @if ($logged_in_user->hasAllAccess())
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
        @endif
    </ul>

    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div><!--sidebar-->
