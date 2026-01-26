<header>
    <!-- Desktop Navigation (visible on md and larger screens) -->
    <nav class="navbar d-none d-md-flex align-items-center justify-content-between py-3">
        <div class="logo navbar-brand">
            <a href="#">
                <img src="{{ asset('/images/website/logo.png') }}" alt="logo" class="logo-img">
            </a>
        </div>
        <div class="search-bar mx-4 flex-grow-1">
            <i class="bi bi-search"></i>
            <input type="text" placeholder="Search for items">
        </div>
        <div class="user-actions d-flex gap-4">
            <a href="/cart"><i class="bi bi-cart3 fs-4"></i></a>
            <a href="{{ url('/favorites') }}"><i class="bi bi-heart fs-4"></i></a>
            <a href="{{ url('/profile') }}"><i class="ti ti-user fs-4"></i></a>
        </div>
    </nav>

    <div class="container-fluid d-none d-md-block">
        <div class="row sub-nav align-items-center py-2 border-top border-bottom">
            <div class="col-2 d-flex align-items-center gap-2" id="category-dropdown">
                <img src="{{ asset('/images/website/menu-icon.png') }}" height="30" alt="Menu">
                <span class="heading-v1">All Categories</span>
            </div>
            <div class="col-6">
                <ul class="d-flex justify-content-between align-items-center nav-links mb-0">
                    <li class="heading-v1 nav-link {{ request()->is('/') ? 'active' : '' }}">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="heading-v1 nav-link {{ request()->is('shop*') ? 'active' : '' }}">
                        <a href="{{ url('/shop') }}">Shop</a>
                    </li>
                    <li class="heading-v1 nav-link {{ request()->is('blog*') ? 'active' : '' }}">
                        <a href="{{ url('/blog') }}">Blog</a>
                    </li>
                    <li class="heading-v1 nav-link {{ request()->is('about*') ? 'active' : '' }}">
                        <a href="{{ url('/about') }}">About Us</a>
                    </li>
                    <li class="heading-v1 nav-link {{ request()->is('contact*') ? 'active' : '' }}">
                        <a href="{{ url('/contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center gap-4">
                <div class="order-tracking d-flex align-items-center gap-2 px-3">
                    <a href="{{ url('/track-order') }}"
                        class="d-flex align-items-center gap-3 text-decoration-none text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-truck">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 17a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M15 17a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                        </svg>
                        <span class="heading-v2">Order Tracking</span>
                    </a>
                </div>
                <div class="select-country-dropdown d-flex align-items-center gap-2">
                    <img src="{{ asset('/images/website/flag.png') }}" width="24" alt="Flag">
                    <span class="heading-v1">BDT</span>
                    <i class="bi bi-chevron-down"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation (visible only on screens smaller than md) -->
    <nav class="navbar-mobile d-md-none d-flex align-items-center justify-content-between py-3 px-3 border-bottom">
        <div class="d-flex align-items-center gap-3">
            <!-- Hamburger Menu Button -->
            <button class="hamburger btn p-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar"
                aria-controls="mobileSidebar">
                <i class="bi bi-list fs-2"></i>
            </button>
            <div class="logo navbar-brand">
                <a href="#">
                    <img src="{{ asset('/images/website/logo.png') }}" alt="logo" class="logo-img-mobile">
                </a>
            </div>
        </div>

        <div class="d-flex align-items-center gap-3">
            <a href="/cart" class="position-relative">
                <i class="bi bi-cart3 fs-4"></i>
            </a>
            <a href="{{ url('/favorites') }}" class="position-relative">
                <i class="bi bi-heart fs-4"></i>
            </a>
            <a href="{{ url('/profile') }}">
                <i class="ti ti-user fs-4"></i>
            </a>
        </div>
    </nav>

    <!-- Mobile Search Bar (below top bar) -->
    <div class="mobile-search d-md-none px-3 py-2 border-bottom">
        <div class="search-bar">
            <i class="bi bi-search"></i>
            <input type="text" placeholder="Search for items">
        </div>
    </div>

    <!-- Offcanvas Sidebar for Mobile Menu -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileSidebar" aria-labelledby="mobileSidebarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="mobileSidebarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="mobile-nav-links list-unstyled">
                <li class="py-2 border-bottom">
                    <a href="{{ url('/') }}"
                        class="text-decoration-none heading-v1 {{ request()->is('/') ? 'active' : '' }}">Home</a>
                </li>
                <li class="py-2 border-bottom">
                    <a href="{{ url('/shop') }}"
                        class="text-decoration-none heading-v1 {{ request()->is('shop*') ? 'active' : '' }}">Shop</a>
                </li>
                <li class="py-2 border-bottom">
                    <a href="{{ url('/blog') }}"
                        class="text-decoration-none heading-v1 {{ request()->is('blog*') ? 'active' : '' }}">Blog</a>
                </li>
                <li class="py-2 border-bottom">
                    <a href="{{ url('/about') }}"
                        class="text-decoration-none heading-v1 {{ request()->is('about*') ? 'active' : '' }}">About
                        Us</a>
                </li>
                <li class="py-2 border-bottom">
                    <a href="{{ url('/contact') }}"
                        class="text-decoration-none heading-v1 {{ request()->is('contact*') ? 'active' : '' }}">Contact
                        Us</a>
                </li>
                <li class="py-3 border-bottom d-flex align-items-center gap-3">
                    <a href="{{ url('/track-order') }}"
                        class="d-flex align-items-center gap-3 text-decoration-none text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-truck">
                            <!-- paths same as above -->
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 17a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M15 17a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                        </svg>
                        <span class="heading-v2">Order Tracking</span>
                    </a>
                </li>
                <li class="py-3 d-flex align-items-center gap-3">
                    <img src="{{ asset('/images/website/flag.png') }}" width="24" alt="Flag">
                    <span class="heading-v1">BDT</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </li>
                <li class="py-3 d-flex align-items-center gap-3">
                    <img src="{{ asset('/images/website/menu-icon.png') }}" height="30" alt="Categories">
                    <span class="heading-v1">All Categories</span>
                </li>
            </ul>
        </div>
    </div>
</header>


<style>
    #category-dropdown {
        cursor: pointer;
    }
</style>