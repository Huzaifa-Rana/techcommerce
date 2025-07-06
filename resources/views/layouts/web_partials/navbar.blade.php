<header class="navbar navbar-expand-lg navbar-dark bg-dark d-block z-fixed p-0" data-sticky-navbar="{&quot;offset&quot;: 500}">
    <div class="container d-block py-1 py-lg-3" data-bs-theme="dark">
        <div class="navbar-stuck-hide pt-1"></div>
        <div class="row flex-nowrap align-items-center g-0">
            <div class="col col-lg-3 d-flex align-items-center">

                <!-- Mobile offcanvas menu toggler (Hamburger) -->
                <button type="button" class="navbar-toggler me-4 me-lg-0" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar brand (Logo) -->
                <a href="index.html" class="navbar-brand me-0">
                    <span class="d-none d-sm-flex flex-shrink-0 me-2">
                        <img src="assets/custom-icons/light-logo-techcommerece.svg" width="36" height="36" alt="Tech Commerce Logo">
                    </span>
                    Tech Commerce
                </a>
            </div>
            <div class="col col-lg-9 d-flex align-items-center justify-content-end">

                <!-- Search visible on screens > 991px wide (lg breakpoint) -->
                <div class="position-relative flex-fill d-none d-lg-block pe-4 pe-xl-5">
                    <i class="ci-search position-absolute top-50 translate-middle-y d-flex fs-lg text-white ms-3"></i>
                    <input type="search" class="form-control form-control-lg form-icon-start border-white rounded-pill" placeholder="Search the products">
                </div>

                <!-- Sale link visible on screens > 1200px wide (xl breakpoint) -->
                <!-- <a class="d-none d-xl-flex align-items-center text-decoration-none animate-shake navbar-stuck-hide me-3 me-xl-4 me-xxl-5" href="shop-catalog-electronics.html">
                    <div class="btn btn-icon btn-lg fs-lg text-primary bg-body-secondary bg-opacity-75 pe-none rounded-circle">
                        <i class="ci-percent animate-target"></i>
                    </div>
                    <div class="ps-2 text-nowrap">
                        <div class="fs-xs text-body">Only this month</div>
                        <div class="fw-medium text-white">Super Sale 20%</div>
                    </div>
                </a> -->

                <!-- Button group -->
                <div class="d-flex align-items-center">

                    <!-- Navbar stuck nav toggler -->
                    <button type="button" class="navbar-toggler d-none navbar-stuck-show me-3" data-bs-toggle="collapse" data-bs-target="#stuckNav" aria-controls="stuckNav" aria-expanded="false" aria-label="Toggle navigation in navbar stuck state">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Theme switcher (light/dark/auto) -->
                    <div class="dropdown">
                        <button type="button" class="theme-switcher btn btn-icon btn-lg btn-outline-secondary fs-lg border-0 rounded-circle animate-scale" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Toggle theme (light)">
                            <span class="theme-icon-active d-flex animate-target">
                                <i class="ci-sun"></i>
                            </span>
                        </button>
                        <ul class="dropdown-menu" style="--cz-dropdown-min-width: 9rem">
                            <li>
                                <button type="button" class="dropdown-item active" data-bs-theme-value="light" aria-pressed="true">
                                    <span class="theme-icon d-flex fs-base me-2">
                                        <i class="ci-sun"></i>
                                    </span>
                                    <span class="theme-label">Light</span>
                                    <i class="item-active-indicator ci-check ms-auto"></i>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item" data-bs-theme-value="dark" aria-pressed="false">
                                    <span class="theme-icon d-flex fs-base me-2">
                                        <i class="ci-moon"></i>
                                    </span>
                                    <span class="theme-label">Dark</span>
                                    <i class="item-active-indicator ci-check ms-auto"></i>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item" data-bs-theme-value="auto" aria-pressed="false">
                                    <span class="theme-icon d-flex fs-base me-2">
                                        <i class="ci-auto"></i>
                                    </span>
                                    <span class="theme-label">Auto</span>
                                    <i class="item-active-indicator ci-check ms-auto"></i>
                                </button>
                            </li>
                        </ul>
                    </div>

                    <!-- Search toggle button visible on screens < 992px wide (lg breakpoint) -->
                    <button type="button" class="btn btn-icon btn-lg fs-xl btn-outline-secondary border-0 rounded-circle animate-shake d-lg-none" data-bs-toggle="collapse" data-bs-target="#searchBar" aria-expanded="false" aria-controls="searchBar" aria-label="Toggle search bar">
                        <i class="ci-search animate-target"></i>
                    </button>

                    <!-- Account button visible on screens > 768px wide (md breakpoint) -->
                    <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake d-none d-md-inline-flex" href="{{ route('account') }}">
                        <i class="ci-user animate-target"></i>
                        <span class="visually-hidden">Account</span>
                    </a>

                    <!-- Wishlist button visible on screens > 768px wide (md breakpoint) -->
                    <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-pulse d-none d-md-inline-flex" href="{{ route('account.wishlist') }}">
                        <i class="ci-heart animate-target"></i>
                        <span class="visually-hidden">Wishlist</span>
                    </a>

                    <!-- Cart button -->
                    <button type="button" class="btn btn-icon btn-lg btn-secondary position-relative rounded-circle ms-2" data-bs-toggle="offcanvas" data-bs-target="#shoppingCart" aria-controls="shoppingCart" aria-label="Shopping cart">
                        <span class="position-absolute top-0 start-100 mt-n1 ms-n3 badge text-bg-success border border-3 border-dark rounded-pill" style="--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em">3</span>
                        <span class="position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 rounded-circle animate-slide-end fs-lg">
                            <i class="ci-shopping-cart animate-target ms-n1"></i>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="navbar-stuck-hide pb-1"></div>
    </div>

    <!-- Search visible on screens < 992px wide (lg breakpoint). It is hidden inside collapse by default -->
    <div class="collapse position-absolute top-100 z-2 w-100 bg-dark d-lg-none" id="searchBar">
        <div class="container position-relative my-3" data-bs-theme="dark">
            <i class="ci-search position-absolute top-50 translate-middle-y d-flex fs-lg text-white ms-3"></i>
            <input type="search" class="form-control form-icon-start border-white rounded-pill" placeholder="Search the products" data-autofocus="collapse">
        </div>
    </div>

    <!-- Main navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
    <div class="collapse navbar-stuck-hide" id="stuckNav">
        <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
            <div class="offcanvas-header py-3">
                <h5 class="offcanvas-title" id="navbarNavLabel">Browse Tech Commerce</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body py-3 py-lg-0">
                <div class="container px-0 px-lg-3">
                    <div class="row">
                        <!-- Navbar nav -->
                        <div class="col-lg-12 d-lg-flex pt-3 pt-lg-0 ps-lg-0 justify-content-center">
                            <ul class="navbar-nav position-relative">
                                <li class="nav-item me-lg-n2 me-xl-0">
                                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                                </li>
                                <!-- <li class="nav-item dropdown position-static me-lg-n1 me-xl-0">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Shop</a>
                                    <div class="dropdown-menu rounded-4 p-4">
                                        <div class="d-flex flex-column flex-lg-row gap-4">
                                            <div style="min-width: 190px">
                                                <div class="h6 mb-2">Electronics Store</div>
                                                <ul class="nav flex-column gap-2 mt-0">
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-categories-electronics.html">Categories Page</a>
                                                    </li>
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics.html">Catalog with Side Filters</a>
                                                    </li>
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-general-electronics.html">Product General Info</a>
                                                    </li>
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-details-electronics.html">Product Details</a>
                                                    </li>
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-reviews-electronics.html">Product Reviews</a>
                                                    </li>
                                                </ul>
                                                <div class="h6 pt-4 mb-2">Fashion Store</div>
                                                <ul class="nav flex-column gap-2 mt-0">
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Catalog with Side Filters</a>
                                                    </li>
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-fashion.html">Product Page</a>
                                                    </li>
                                                </ul>
                                                <div class="h6 pt-4 mb-2">Furniture Store</div>
                                                <ul class="nav flex-column gap-2 mt-0">
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-furniture.html">Catalog with Top Filters</a>
                                                    </li>
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-furniture.html">Product Page</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div style="min-width: 190px">
                                                <div class="h6 mb-2">Grocery Store</div>
                                                <ul class="nav flex-column gap-2 mt-0">
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Catalog with Side Filters</a>
                                                    </li>
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-grocery.html">Product Page</a>
                                                    </li>
                                                </ul>
                                                <div class="h6 pt-4 mb-2">Marketplace</div>
                                                <ul class="nav flex-column gap-2 mt-0">
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-marketplace.html">Catalog with Top Filters</a>
                                                    </li>
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-marketplace.html">Digital Product Page</a>
                                                    </li>
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-marketplace.html">Cart / Checkout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div style="min-width: 190px">
                                                <div class="h6 mb-2">Checkout v.1</div>
                                                <ul class="nav flex-column gap-2 mt-0">
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-cart.html">Shopping Cart</a>
                                                    </li>
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-delivery-1.html">Delivery Info (Step 1)</a>
                                                    </li>
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-delivery-2.html">Delivery Info (Step 2)</a>
                                                    </li>
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-shipping.html">Shipping Address</a>
                                                    </li>
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-payment.html">Payment</a>
                                                    </li>
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-thankyou.html">Thank You Page</a>
                                                    </li>
                                                </ul>
                                                <div class="h6 pt-4 mb-2">Checkout v.2</div>
                                                <ul class="nav flex-column gap-2 mt-0">
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-cart.html">Shopping Cart</a>
                                                    </li>
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-delivery.html">Delivery Info</a>
                                                    </li>
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-pickup.html">Pickup from Store</a>
                                                    </li>
                                                    <li class="d-flex w-100 pt-1">
                                                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-thankyou.html">Thank You Page</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li> -->
                                <li class="nav-item me-lg-n2 me-xl-0">
                                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>
                                </li>
                                <li class="nav-item me-lg-n2 me-xl-0">
                                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
                                </li>
                                <li class="nav-item me-lg-n2 me-xl-0">
                            </ul>
                            <hr class="d-lg-none my-3">
                            <ul class="navbar-nav ">
                                <li class="nav-item dropdown me-lg-n2 me-xl-n1">
                                    <a class="nav-link dropdown-toggle fs-sm px-3" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Eng</a>
                                    <ul class="dropdown-menu fs-sm" style="--cz-dropdown-min-width: 7.5rem; --cz-dropdown-spacer: .25rem">
                                        <li><a class="dropdown-item" href="#!">Français</a></li>
                                        <li><a class="dropdown-item" href="#!">Deutsch</a></li>
                                        <li><a class="dropdown-item" href="#!">Italiano</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown me-lg-n1">
                                    <a class="nav-link dropdown-toggle fs-sm px-3" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">USD ($)</a>
                                    <ul class="dropdown-menu dropdown-menu-end fs-sm" style="--cz-dropdown-min-width: 7rem; --cz-dropdown-spacer: .25rem">
                                        <li><a class="dropdown-item" href="#!">€ EUR</a></li>
                                        <li><a class="dropdown-item" href="#!">£ UKP</a></li>
                                        <li><a class="dropdown-item" href="#!">¥ JPY</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-header border-top px-0 py-3 mt-3 d-md-none">
                <div class="nav nav-justified w-100">
                    <a class="nav-link border-end" href="account-signin.html">
                        <i class="ci-user fs-lg opacity-60 me-2"></i>
                        Account
                    </a>
                    <a class="nav-link" href="account-wishlist.html">
                        <i class="ci-heart fs-lg opacity-60 me-2"></i>
                        Wishlist
                    </a>
                </div>
            </div>
        </nav>
    </div>
</header>