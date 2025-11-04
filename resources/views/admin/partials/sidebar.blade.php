<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ route('admin.index') }}">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                     x="0px" y="0px" viewBox="0 0 120 120"
                     xml:space="preserve">
                <g>
                    <polygon class="st0" points="78,105 15,105 24,87 87,87 	"/>
                    <polygon class="st0" points="96,69 33,69 42,51 105,51 	"/>
                    <polygon class="st0" points="78,33 15,33 24,15 87,15 	"/>
                </g>
              </svg>
            </a>
        </div>
        <div class="navbar-nav flex-fill w-100 mb-2">
            <x-sidebar-tab href="{{ route('admin.index') }}" icon="fe-home" name="Dashboard"/>
        </div>
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Components</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <x-sidebar-tab href="{{ route('admin.services.index') }}" icon="fe-box" name="Services"/>
            <x-sidebar-tab href="{{ route('admin.features.index') }}" icon="fe-bookmark" name="Features"/>
            <x-sidebar-tab href="{{ route('admin.messages.index') }}" icon="fe-message-square" name="Messages"/>
            <x-sidebar-tab href="{{ route('admin.subscribers.index') }}" icon="fe-users" name="Subscribers"/>
            <x-sidebar-tab href="{{ route('admin.testimonials.index') }}" icon="fe-rss" name="Testimonials"/>
        </ul>
    </nav>
</aside>