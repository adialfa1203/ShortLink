<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('template/themesbrand.com/steex/layouts/assets/images/logo-sm.png') }}"
                                alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('template/themesbrand.com/steex/layouts/assets/images/logo-dark.png') }}"
                                alt="" height="22">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('template/themesbrand.com/steex/layouts/assets/images/logo-sm.png') }}"
                                alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('template/themesbrand.com/steex/layouts/assets/images/logo-light.png') }}"
                                alt="" height="22">
                        </span>
                    </a>
                </div>

                <button type="button"
                    class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none"
                    id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>


            </div>

            <div class="d-flex align-items-center">
                <div class="dropdown topbar-head-dropdown ms-1 header-item">
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle"
                        data-toggle="fullscreen">
                        <i class='bi bi-arrows-fullscreen fs-lg'></i>
                    </button>
                </div>

                <div class="dropdown topbar-head-dropdown ms-1 header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle mode-layout"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-sun align-middle fs-3xl"></i>
                    </button>
                    <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                        <a href="#!" class="dropdown-item" data-mode="light"><i
                                class="bi bi-sun align-middle me-2"></i> Terang</a>
                        <a href="#!" class="dropdown-item" data-mode="dark"><i
                                class="bi bi-moon align-middle me-2"></i> Gelap</a>
                        <a href="#!" class="dropdown-item" data-mode="auto"><i
                                class="bi bi-moon-stars align-middle me-2"></i> Auto (default sistem)</a>
                    </div>
                </div>

                <div class="dropdown topbar-head-dropdown ms-1 header-item"><a href="/subscribe-product-user" type="button"
                        class="btn btn-danger"><i class="bi bi-fire"></i>
                        <span>Berlangganan</span></a>
                </div>

                
            </div>
        </div>
    </div>
</header>

@section('script')
<script>
    const hamburgerButton = document.getElementById('topnav-hamburger-icon');
    const contentDiv = document.querySelector('.text-start');

    hamburgerButton.addEventListener('click', function() {
        contentDiv.classList.toggle('hamburger-icon-open');
    });
</script>
@endsection
