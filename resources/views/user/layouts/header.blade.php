<header class="w-full text-white bg-[#00AE9F] px-8">
    <div class="flex items-center justify-between max-w-7xl py-3 mx-auto">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center gap-3 text-white">
            <img src="{{ asset('images/logo-light.png') }}" alt="Banh Viet" class="w-auto h-10">
        </a>

        <!-- Nav content -->
        <div class="flex items-center gap-4 lg:gap-6">
            <nav id="header-nav" class="items-center hidden gap-8 text-base tracking-wide lg:flex font-matahari">
                <a href="#" class="font-semibold transition-opacity hover:opacity-80">Giới Thiệu</a>
                <a href="#" class="transition-opacity hover:opacity-80">Sản Phẩm</a>
                <a href="#" class="transition-opacity hover:opacity-80">Dinh Dưỡng</a>
                <a href="#" class="transition-opacity hover:opacity-80">Đặt Hàng</a>
            </nav>

            <div id="header-search-container" class="items-center hidden w-full max-w-sm gap-2 rounded-full border border-white/40 bg-white/10 px-4 py-1.5">
                <div class="shrink-0">
                    <img src="{{ asset('icons/search.png') }}" alt="search" class="w-4 h-4">
                </div>
                <input id="header-search-input" type="text" class="w-full bg-transparent text-sm text-white placeholder-white/60 focus:outline-none" placeholder="Tìm kiếm...">
                <button id="header-search-close" type="button" class="text-sm font-semibold uppercase tracking-wide text-white">
                    x
                </button>
            </div>
    
            <div class="items-center hidden gap-4 lg:flex">
                <button id="header-search-toggle" type="button" class="transition-opacity hover:opacity-80" aria-label="Search">
                    <img src="{{ asset('icons/search.png') }}" alt="search" class="w-4 h-4">
                </button>
                <div class="flex items-center gap-2 text-white border border-white rounded-3xl py-1.5 px-3">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" />
                    </svg>
                    <select id="header-language-select" class="bg-transparent text-sm font-semibold tracking-wide text-white outline-none focus-visible:ring-2 focus-visible:ring-white/60">
                        <option value="vi" selected>Tiếng Việt</option>
                        <option value="en">English</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Menu toggle -->
        <button id="header-menu-toggle" type="button" class="inline-flex items-center justify-center w-10 h-10 transition-opacity border border-white/30 rounded-full lg:hidden hover:opacity-80" aria-controls="header-mobile-menu" aria-expanded="false">
            <span class="sr-only">Mở menu</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16M4 12h16M4 17h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile menu -->
    <div id="header-mobile-menu" class="hidden px-4 pb-4 border-t border-white/15 lg:hidden">
        <nav id="header-mobile-nav" class="flex flex-col gap-3 pt-3 text-base tracking-wide">
            <a href="#" class="font-semibold transition-opacity hover:opacity-80">Giới Thiệu</a>
            <a href="#" class="transition-opacity hover:opacity-80">Sản Phẩm</a>
            <a href="#" class="transition-opacity hover:opacity-80">Dinh Dưỡng</a>
            <a href="#" class="transition-opacity hover:opacity-80">Đặt Hàng</a>
        </nav>

        <div class="flex flex-col gap-4 pt-4 mt-4 border-t border-white/15">
            <div class="flex items-center gap-3 rounded-full border border-white/40 bg-white/10 px-3 py-1.5">
                <img src="{{ asset('icons/search.png') }}" alt="search" class="w-4 h-4">
                <input id="header-mobile-search-input" type="text" class="w-full bg-transparent text-sm text-white placeholder-white/60 focus:outline-none" placeholder="Tìm kiếm...">
            </div>
            <div class="flex items-center gap-2 text-white">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" />
                </svg>
                <select class="bg-transparent text-sm font-semibold uppercase tracking-wide text-white outline-none focus-visible:ring-2 focus-visible:ring-white/60">
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

            menuContainer.classList.add('lg:hidden');
            desktopSearchContainer.classList.remove('hidden');
            desktopSearchContainer.classList.add('flex');
            desktopSearchToggle?.classList.add('hidden');

            requestAnimationFrame(function () {
                desktopSearchInput?.focus();
            });
        }

        function hideDesktopSearch() {
            if (!desktopSearchContainer) {
                return;
            }

            menuContainer.classList.remove('lg:hidden');
            desktopSearchContainer.classList.add('hidden');
            desktopSearchContainer.classList.remove('flex');
            desktopSearchToggle?.classList.remove('hidden');
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
                mobileMenu.classList.toggle('hidden');
            });
        }
    });
</script>
