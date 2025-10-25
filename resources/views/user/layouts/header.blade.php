<header class="bg-brand-teal text-white">
    <div class="container py-3 d-flex align-items-center justify-content-between flex-wrap gap-3">
        <a href="{{ url('/') }}" class="d-inline-flex align-items-center text-white text-decoration-none gap-3">
            <img src="{{ asset('images/logo-light.png') }}" alt="Banh Viet" class="header-logo">
        </a>

        <div class="d-flex align-items-center justify-content-end flex-grow-1 gap-3 gap-lg-4">
            <nav id="header-nav" class="d-none d-lg-flex align-items-center gap-3 gap-lg-4">
                <a href="#" class="header-nav-link header-nav-link-active">Giới Thiệu</a>
                <a href="#" class="header-nav-link">Sản Phẩm</a>
                <a href="#" class="header-nav-link">Dinh Dưỡng</a>
                <a href="#" class="header-nav-link">Đặt Hàng</a>
            </nav>

            <div id="header-search-container" class="header-search d-none align-items-center flex-grow-1 gap-2">
                <div class="flex-shrink-0">
                    <img src="{{ asset('icons/search.png') }}" alt="search" class="icon-16">
                </div>
                <input id="header-search-input" type="text" class="flex-grow-1" placeholder="Tìm kiếm...">
                <button id="header-search-close" type="button" class="header-icon-btn fw-semibold text-uppercase">
                    x
                </button>
            </div>

            <div class="d-none d-lg-flex align-items-center gap-3">
                <button id="header-search-toggle" type="button" class="header-icon-btn d-lg-inline-flex" aria-label="Search">
                    <img src="{{ asset('icons/search.png') }}" alt="search" class="icon-16">
                </button>
                <div class="header-locale">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" />
                    </svg>
                    <select id="header-language-select" class="language-select">
                        <option value="vi" selected>Tiếng Việt</option>
                        <option value="en">English</option>
                    </select>
                </div>
            </div>
        </div>

        <button id="header-menu-toggle" type="button" class="header-menu-toggle d-inline-flex align-items-center justify-content-center d-lg-none" aria-controls="header-mobile-menu" aria-expanded="false">
            <span class="visually-hidden">Mở menu</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16M4 12h16M4 17h16" />
            </svg>
        </button>
    </div>

    <div id="header-mobile-menu" class="header-mobile-menu d-none d-lg-none px-3 pb-4">
        <nav id="header-mobile-nav" class="d-flex flex-column gap-3 pt-3 text-uppercase">
            <a href="#" class="header-nav-link">Giới Thiệu</a>
            <a href="#" class="header-nav-link">Sản Phẩm</a>
            <a href="#" class="header-nav-link">Dinh Dưỡng</a>
            <a href="#" class="header-nav-link">Đặt Hàng</a>
        </nav>

        <div class="d-flex flex-column gap-4 pt-4 mt-4 border-top border-white-soft">
            <div class="search-wrapper d-flex align-items-center gap-2">
                <img src="{{ asset('icons/search.png') }}" alt="search" class="icon-16">
                <input id="header-mobile-search-input" type="text" class="flex-grow-1" placeholder="Tìm kiếm...">
            </div>
            <div class="d-flex align-items-center gap-2 text-white">
                <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" />
                </svg>
                <select class="language-select text-uppercase">
                    <option value="vi" selected>Tiếng Việt</option>
                    <option value="en">English</option>
                </select>
            </div>
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

        desktopSearchToggle?.addEventListener('click', showDesktopSearch);
        desktopSearchClose?.addEventListener('click', hideDesktopSearch);

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                hideDesktopSearch();
            }
        });

        const menuToggle = document.getElementById('header-menu-toggle');
        const mobileMenu = document.getElementById('header-mobile-menu');

        if (menuToggle && mobileMenu) {
            menuToggle.addEventListener('click', function () {
                const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
                menuToggle.setAttribute('aria-expanded', (!isExpanded).toString());
                mobileMenu.classList.toggle('d-none');
            });
        }
    });
</script>
