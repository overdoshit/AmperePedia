<!-- Sidebar -->
<div class="col-lg-4 col-xl-3">
    <!-- Responsive offcanvas body START -->
    <div class="offcanvas-lg offcanvas-start h-100" tabindex="-1" id="offcanvasSidebar">
        <!-- Offcanvas header -->
        <div class="offcanvas-header bg-light">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Profile Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar"
                aria-label="Close"></button>
        </div>
        <!-- Offcanvas body -->
        <div class="offcanvas-body p-0">
            <div class="card border p-3 w-100">
                <!-- Card header -->
                <div class="card-header text-center border-bottom">
                    <!-- Avatar -->
                    <div class="avatar avatar-xl position-relative mb-2">
                        <img class="avatar-img rounded-circle border-2 border-white shadow"
                            src="assets/images/users/default.jpg" alt="User" style="object-fit: cover;">
                    </div>
                    <h6 class="mb-0">John Doe</h6>
                    <a href="/profile" class="text-reset text-primary-hover small">@johndoe</a>
                </div>

                <!-- Card body START -->
                <div class="card-body p-0 mt-4">
                    <!-- Sidebar menu item START -->
                    <ul class="nav nav-pills-primary-border-start flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('profile') ? 'active' : '' }}" href="/profile">
                                <i class="fa-regular fa-user fa-fw me-2"></i>
                                My profile
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('orders') ? 'active' : '' }}" href="/orders">
                                <i class="fa-regular fa-cart-shopping fa-fw me-2"></i>
                                Order history
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="#">
                                <i class="fas fa-sign-out-alt fa-fw me-2"></i>
                                Sign Out
                            </a>
                        </li>
                    </ul>
                    <!-- Sidebar menu item END -->
                </div>
                <!-- Card body END -->
            </div>
        </div>
    </div>
</div>
