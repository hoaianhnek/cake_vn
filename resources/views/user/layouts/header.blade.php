<header class="bg-brand-teal text-white fixed-top">
    <div class="container py-3 d-flex align-items-center justify-content-between flex-wrap gap-3">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="d-inline-flex align-items-center text-white text-decoration-none gap-3">
            <img src="{{ asset('images/logo-light.png') }}" alt="Banh Viet" class="header-logo d-none d-lg-block">
            <img src="{{ asset('images/logo-light-mobile.png') }}" alt="Banh Viet" class="header-logo d-lg-none">
        </a>

        <!-- Nav list -->
        <div class="d-flex align-items-center justify-content-end flex-grow-1 gap-3 gap-lg-4">
            <!-- Nav -->
            <nav id="header-nav" class="d-none d-lg-flex align-items-center gap-3 gap-lg-4 {{ request()->is('/') ? 'is-home' : '' }}">
                <a href="{{ url('/') }}" class="header-nav-link {{ request()->is('/') ? 'header-nav-link-active' : '' }}">Giới Thiệu</a>
                <a href="{{ url('/product') }}" class="header-nav-link {{ request()->is('product') ? 'header-nav-link-active' : '' }}" class="header-nav-link">Sản Phẩm</a>
                <a href="#" class="header-nav-link">Dinh Dưỡng</a>
                <a href="#" class="header-nav-link">Đặt Hàng</a>
            </nav>

            <!-- Search -->
            <div id="header-search-container" class="header-search d-none flex-grow-1">
                <label for="header-search-input" class="visually-hidden">Tìm kiếm</label>
                <div class="search-field search-field-desktop">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_609_3207)">
                        <path d="M12.5322 19.0332C13.9297 19.0332 15.2393 18.6113 16.3291 17.8906L20.1787 21.749C20.4336 21.9951 20.7588 22.1182 21.1104 22.1182C21.8398 22.1182 22.376 21.5469 22.376 20.8262C22.376 20.4922 22.2617 20.167 22.0156 19.9209L18.1924 16.0801C18.9834 14.9551 19.4492 13.5928 19.4492 12.1162C19.4492 8.31055 16.3379 5.19922 12.5322 5.19922C8.73535 5.19922 5.61523 8.31055 5.61523 12.1162C5.61523 15.9219 8.72656 19.0332 12.5322 19.0332ZM12.5322 17.1875C9.74609 17.1875 7.46094 14.9023 7.46094 12.1162C7.46094 9.33008 9.74609 7.04492 12.5322 7.04492C15.3184 7.04492 17.6035 9.33008 17.6035 12.1162C17.6035 14.9023 15.3184 17.1875 12.5322 17.1875Z" fill="#3C3C43" fill-opacity="0.6"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_609_3207">
                        <rect width="28" height="28" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>

                    <input id="header-search-input" type="text" class="search-input" placeholder="Tìm kiếm...">
                    <button id="header-search-close" type="button" class="search-close" aria-label="Đóng tìm kiếm">
                        &times;
                    </button>
                </div>
            </div>

            <!-- Translate + Search -->
            <div class="header-actions d-flex align-items-center gap-4">
                <div class="header-locale">
                    <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" />
                    </svg>
                    <select id="header-language-select" class="language-select">
                        <option value="vi" selected>Tiếng Việt</option>
                        <option value="en">English</option>
                    </select>
                </div>
                <button id="header-search-toggle" type="button" class="header-icon-btn header-search-toggle-btn d-inline-flex" aria-label="Search">
                    <img src="{{ asset('icons/search.png') }}" alt="search" class="icon-16">
                </button>
            </div>
        </div>

        <!-- Toggle menu -->
        <button id="header-menu-toggle" type="button" class="header-menu-toggle d-inline-flex align-items-center justify-content-center d-lg-none" aria-controls="header-mobile-menu" aria-expanded="false">
            <span class="visually-hidden">Mở menu</span>
            <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="16.3638" height="1.36365" fill="white"/>
                <rect y="6.81787" width="16.3638" height="1.36365" fill="white"/>
                <rect y="13.6364" width="16.3638" height="1.36365" fill="white"/>
            </svg>

            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon-20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16M4 12h16M4 17h16" />
            </svg> -->
        </button>
    </div>

    <!-- Mobile -->
    <div id="header-mobile-overlay" class="mobile-menu-overlay d-lg-none" aria-hidden="true"></div>
    <div id="header-mobile-menu" class="header-mobile-menu d-lg-none" aria-hidden="true" role="dialog" aria-modal="true">
        <div class="mobile-menu-wrapper">
            <!-- Translate -->
            <div class="mobile-menu-header d-flex align-items-center justify-content-between">
                <a href="{{ url('/') }}" class="d-inline-flex align-items-center gap-2 text-decoration-none">
                    <img src="{{ asset('images/logo.png') }}" alt="Banh Viet" class="mobile-menu-logo">
                </a>
                <button id="header-mobile-close" type="button" class="mobile-menu-close" aria-label="Đóng menu">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="10.8076" y="27.7782" width="24" height="2" transform="rotate(-45 10.8076 27.7782)" fill="#414042"/>
                        <rect x="12.2218" y="10.8076" width="24" height="2" transform="rotate(45 12.2218 10.8076)" fill="#414042"/>
                    </svg>
                </button>
            </div>

            <!-- Search -->
            <div class="mobile-menu-search mt-4">
                <label for="header-mobile-search-input" class="visually-hidden">Tìm kiếm</label>
                <div class="search-field">
                    <!-- <img src="{{ asset('icons/search.png') }}" alt="search" class="icon-16"> -->
                     <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_609_3207)">
                        <path d="M12.5322 19.0332C13.9297 19.0332 15.2393 18.6113 16.3291 17.8906L20.1787 21.749C20.4336 21.9951 20.7588 22.1182 21.1104 22.1182C21.8398 22.1182 22.376 21.5469 22.376 20.8262C22.376 20.4922 22.2617 20.167 22.0156 19.9209L18.1924 16.0801C18.9834 14.9551 19.4492 13.5928 19.4492 12.1162C19.4492 8.31055 16.3379 5.19922 12.5322 5.19922C8.73535 5.19922 5.61523 8.31055 5.61523 12.1162C5.61523 15.9219 8.72656 19.0332 12.5322 19.0332ZM12.5322 17.1875C9.74609 17.1875 7.46094 14.9023 7.46094 12.1162C7.46094 9.33008 9.74609 7.04492 12.5322 7.04492C15.3184 7.04492 17.6035 9.33008 17.6035 12.1162C17.6035 14.9023 15.3184 17.1875 12.5322 17.1875Z" fill="#3C3C43" fill-opacity="0.6"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_609_3207">
                        <rect width="28" height="28" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                    <input id="header-mobile-search-input" type="text" class="search-input" placeholder="Tìm kiếm...">
                </div>
            </div>

            <!-- Nav -->
            <nav id="header-mobile-nav" class="mobile-nav-list mt-4">
                <a href="{{ url('/') }}" class="mobile-nav-link {{ request()->is('/') ? 'active' : '' }}">Giới Thiệu</a>
                <a href="#" class="mobile-nav-link">
                    <span class="mobile-nav-text">Sản Phẩm</span>
                </a>
                <a href="#" class="mobile-nav-link">
                    <span class="mobile-nav-text">Dinh Dưỡng</span>
                </a>
                <a href="#" class="mobile-nav-link">
                    <span class="mobile-nav-text">Đặt Hàng</span>
                </a>
            </nav>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const desktopSearchContainer = document.getElementById('header-search-container');
        const desktopSearchToggle = document.getElementById('header-search-toggle');
        const desktopSearchClose = document.getElementById('header-search-close');
        const desktopSearchInput = document.getElementById('header-search-input');
        const menuContainer = document.getElementById('header-nav');

        function showDesktopSearch() {
            if (!desktopSearchContainer) {
                return;
            }

            menuContainer.classList.remove('d-lg-flex');
            menuContainer.classList.add('d-lg-none');
            desktopSearchContainer.classList.remove('d-none');
            desktopSearchContainer.classList.add('d-lg-flex');
            desktopSearchToggle?.classList.add('d-none');

            requestAnimationFrame(function () {
                desktopSearchInput?.focus();
            });
        }

        function hideDesktopSearch() {
            if (!desktopSearchContainer) {
                return;
            }

            menuContainer.classList.remove('d-lg-none');
            menuContainer.classList.add('d-lg-flex');
            desktopSearchContainer.classList.add('d-none');
            desktopSearchContainer.classList.remove('d-lg-flex');
            desktopSearchToggle?.classList.remove('d-none');
            desktopSearchInput?.blur();
        }

        const desktopBreakpoint = window.matchMedia('(min-width: 992px)');
        const mobileSearchInput = document.getElementById('header-mobile-search-input');

        desktopSearchToggle?.addEventListener('click', function () {
            if (desktopBreakpoint.matches) {
                showDesktopSearch();
                return;
            }

            showMobileMenu();

            window.setTimeout(function () {
                mobileSearchInput?.focus();
            }, 280);
        });
        desktopSearchClose?.addEventListener('click', hideDesktopSearch);

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                hideDesktopSearch();
            }
        });

        const menuToggle = document.getElementById('header-menu-toggle');
        const mobileMenu = document.getElementById('header-mobile-menu');
        const mobileClose = document.getElementById('header-mobile-close');
        const mobileOverlay = document.getElementById('header-mobile-overlay');

        function showMobileMenu() {
            if (!menuToggle || !mobileMenu) {
                return;
            }

            mobileMenu.classList.add('is-open');
            mobileMenu.setAttribute('aria-hidden', 'false');
            mobileOverlay?.classList.add('is-open');
            mobileOverlay?.setAttribute('aria-hidden', 'false');
            menuToggle.setAttribute('aria-expanded', 'true');
            document.body.classList.add('mobile-menu-open');
        }

        function hideMobileMenu() {
            if (!menuToggle || !mobileMenu) {
                return;
            }

            mobileMenu.classList.remove('is-open');
            mobileMenu.setAttribute('aria-hidden', 'true');
            mobileOverlay?.classList.remove('is-open');
            mobileOverlay?.setAttribute('aria-hidden', 'true');
            menuToggle.setAttribute('aria-expanded', 'false');
            document.body.classList.remove('mobile-menu-open');
        }

        if (menuToggle && mobileMenu) {
            menuToggle.addEventListener('click', function () {
                const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
                if (isExpanded) {
                    hideMobileMenu();
                } else {
                    showMobileMenu();
                }
            });
        }

        mobileClose?.addEventListener('click', hideMobileMenu);
        mobileOverlay?.addEventListener('click', hideMobileMenu);

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                hideMobileMenu();
            }
        });
    });
</script>
