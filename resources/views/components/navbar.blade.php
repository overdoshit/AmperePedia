<!-- Header START -->
<header class="header-absolute"> <!-- Can add header-sticky -->
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand me-0" href="/">
                <img class="light-mode-item navbar-brand-item" src="assets/images/logo-dark.png" alt="AmperePedia">
                <img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.png" alt="AmperePedia">
            </a>
            <!-- Logo END -->

            <!-- Main navbar START -->
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-nav-scroll dropdown-hover mx-auto">
                    <!-- Nav item -->
                    <li class="nav-item"> <a class="nav-link" href="/#bayar">Home</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="/#layanan">Layanan</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="/#faq">FAQ</a> </li>

                    <!-- Masuk button -->
                    <li class="nav-item d-block d-sm-none text-center">
                        <button class="btn btn-sm btn-outline-primary mb-0 w-100" data-bs-toggle="modal"
                            data-bs-target="#loginModal">Masuk</button>
                    </li>
                    <!-- Daftar button -->
                    <li class="nav-item d-block d-sm-none text-center">
                        <button class="btn btn-sm btn-primary mb-0 w-100" data-bs-toggle="modal"
                            data-bs-target="#registerModal">Daftar</button>
                    </li>

                    <!-- Bayar button -->
                    <li class="nav-item d-block d-sm-none text-center">
                        <a href="#" class="btn btn-sm btn-outline-primary mb-0 w-100">Bayar</a>
                    </li>
                    <!-- Profile button -->
                    <li class="nav-item dropdown d-block d-sm-none">
                        <div class="profile btn btn-primary px-2 d-flex justify-content-between align-items-center mb-0"
                            role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false" style="border-radius: 28px;">
                            <img src="assets/images/users/default.jpg" alt="Profile"
                                style="width: 25px; height: 25px; object-fit: cover; border-radius: 50%;"
                                class="rounded-circle">
                            <i class="fa-solid fa-bars mx-2 fs-7"></i>
                        </div>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <!-- Dropdown submenu -->
                            <li>
                                <a class="dropdown-item {{ Request::is('profile') ? 'active' : '' }}" href="/profile">
                                    <i class="fa-regular fa-user fa-fw me-2"></i>
                                    My profile
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ Request::is('orders') ? 'active' : '' }}" href="/orders">
                                    <i class="fa-regular fa-cart-shopping fa-fw me-2"></i>
                                    Order history
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item text-danger" href="#">
                                    <i class="fas fa-sign-out-alt fa-fw me-2"></i>
                                    Sign Out
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Main navbar END -->

            <!-- Buttons -->
            <ul class="nav align-items-center dropdown-hover ms-sm-2">
                <!-- Dark mode option START -->
                <li class="nav-item dropdown dropdown-animation" data-bs-toggle="tooltip" data-bs-title="Change Theme">
                    <button class="btn btn-link mb-0 px-2 lh-1" id="bd-theme" type="button" aria-expanded="false"
                        data-bs-toggle="dropdown" data-bs-display="static">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            class="bi bi-circle-half theme-icon-active fill-mode fa-fw" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                            <use href="#"></use>
                        </svg>

                    </button>

                    <ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
                        <li class="mb-1">
                            <button type="button" class="dropdown-item d-flex align-items-center"
                                data-bs-theme-value="light">
                                <svg width="16" height="16" fill="currentColor"
                                    class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
                                    <path
                                        d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                                    <use href="#"></use>
                                </svg>Light
                            </button>
                        </li>
                        <li class="mb-1">
                            <button type="button" class="dropdown-item d-flex align-items-center"
                                data-bs-theme-value="dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                                    <path
                                        d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                                    <use href="#"></use>
                                </svg>Dark
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center active"
                                data-bs-theme-value="auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-circle-half fa-fw mode-switch me-1"
                                    viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                                    <use href="#"></use>
                                </svg>Auto
                            </button>
                        </li>
                    </ul>
                </li>
                <!-- Dark mode option END -->

                <!-- Masuk button -->
                <li class="nav-item me-2 d-none d-sm-block">
                    <button class="btn btn-sm btn-outline-primary mb-0" data-bs-toggle="modal"
                        data-bs-target="#loginModal">Masuk</button>
                </li>
                <!-- Daftar button -->
                <li class="nav-item d-none d-sm-block">
                    <button class="btn btn-sm btn-primary mb-0" data-bs-toggle="modal"
                        data-bs-target="#registerModal">Daftar</button>
                </li>

                <!-- Bayar button -->
                <li class="nav-item me-2 d-none d-sm-block">
                    <a href="#" class="btn btn-sm btn-outline-primary mb-0">Bayar</a>
                </li>

                <!-- Profile button -->
                <li class="nav-item dropdown d-none d-sm-block">
                    <div class="profile btn btn-primary px-2 d-flex justify-content-between align-items-center mb-0"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                        aria-expanded="false" style="border-radius: 28px;">
                        <img src="assets/images/users/default.jpg" alt="Profile"
                            style="width: 25px; height: 25px; object-fit: cover; border-radius: 50%;"
                            class="rounded-circle">
                        <i class="fa-solid fa-bars mx-2 fs-7"></i>
                    </div>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <!-- Dropdown submenu -->
                        <li>
                            <a class="dropdown-item {{ Request::is('profile') ? 'active' : '' }}" href="/profile">
                                <i class="fa-regular fa-user fa-fw me-2"></i>
                                My profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ Request::is('orders') ? 'active' : '' }}" href="/orders">
                                <i class="fa-regular fa-cart-shopping fa-fw me-2"></i>
                                Order history
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item text-danger" href="#">
                                <i class="fas fa-sign-out-alt fa-fw me-2"></i>
                                Sign Out
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Responsive navbar toggler -->
                <li class="nav-item">
                    <button class="navbar-toggler ms-sm-3 p-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-animation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </li>
            </ul>

        </div>
    </nav>
</header>
<!-- Header END -->
