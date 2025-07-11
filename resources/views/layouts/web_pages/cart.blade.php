@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
@endpush

@section('content')
<main class="content-wrapper">

    <!-- Breadcrumb -->
    <nav class="container pt-3 my-3 my-md-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
        </ol>
    </nav>


    <!-- Items in the cart + Order summary -->
    <section class="container pb-5 mb-2 mb-md-3 mb-lg-4 mb-xl-5">
        <h1 class="h3 mb-4">Shopping cart</h1>
        <div class="row">

            <!-- Items list -->
            <div class="col-lg-8">
                <div class="pe-lg-2 pe-xl-3 me-xl-3">
                    <p class="fs-sm">Buy <span class="text-dark-emphasis fw-semibold">$183</span> more to get <span class="text-dark-emphasis fw-semibold">Free Shipping</span></p>
                    <div class="progress w-100 overflow-visible mb-4" role="progressbar" aria-label="Free shipping progress" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                        <div class="progress-bar bg-warning rounded-pill position-relative overflow-visible" style="width: 75%; height: 4px">
                            <div class="position-absolute top-50 end-0 d-flex align-items-center justify-content-center translate-middle-y bg-body border border-warning rounded-circle me-n1" style="width: 1.5rem; height: 1.5rem">
                                <i class="ci-star-filled text-warning"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Table of items -->
                    <table class="table position-relative z-2 mb-4">
                        <thead>
                            <tr>
                                <th scope="col" class="fs-sm fw-normal py-3 ps-0"><span class="text-body">Product</span></th>
                                <th scope="col" class="text-body fs-sm fw-normal py-3 d-none d-xl-table-cell"><span class="text-body">Price</span></th>
                                <th scope="col" class="text-body fs-sm fw-normal py-3 d-none d-md-table-cell"><span class="text-body">Quantity</span></th>
                                <th scope="col" class="text-body fs-sm fw-normal py-3 d-none d-md-table-cell"><span class="text-body">Total</span></th>
                                <th scope="col" class="py-0 px-0">
                                    <div class="nav justify-content-end">
                                        <button type="button" class="nav-link d-inline-block text-decoration-underline text-nowrap py-3 px-0">Clear cart</button>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">

                            <!-- Item -->
                            <tr>
                                <td class="py-3 ps-0">
                                    <div class="d-flex align-items-center">
                                        <a class="flex-shrink-0" href="shop-product-general-electronics.html">
                                            <img src="assets/img/shop/electronics/thumbs/08.png" width="110" alt="iPhone 14">
                                        </a>
                                        <div class="w-100 min-w-0 ps-2 ps-xl-3">
                                            <h5 class="d-flex animate-underline mb-2">
                                                <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-general-electronics.html">Apple iPhone 14 128GB</a>
                                            </h5>
                                            <ul class="list-unstyled gap-1 fs-xs mb-0">
                                                <li><span class="text-body-secondary">Color:</span> <span class="text-dark-emphasis fw-medium">White</span></li>
                                                <li><span class="text-body-secondary">Model:</span> <span class="text-dark-emphasis fw-medium">128GB</span></li>
                                                <li class="d-xl-none"><span class="text-body-secondary">Price:</span> <span class="text-dark-emphasis fw-medium">$899.00</span></li>
                                            </ul>
                                            <div class="count-input rounded-2 d-md-none mt-3">
                                                <button type="button" class="btn btn-sm btn-icon" data-decrement="" aria-label="Decrement quantity">
                                                    <i class="ci-minus"></i>
                                                </button>
                                                <input type="number" class="form-control form-control-sm" value="1" readonly="">
                                                <button type="button" class="btn btn-sm btn-icon" data-increment="" aria-label="Increment quantity">
                                                    <i class="ci-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="h6 py-3 d-none d-xl-table-cell">$899.00</td>
                                <td class="py-3 d-none d-md-table-cell">
                                    <div class="count-input">
                                        <button type="button" class="btn btn-icon" data-decrement="" aria-label="Decrement quantity">
                                            <i class="ci-minus"></i>
                                        </button>
                                        <input type="number" class="form-control" value="1" readonly="">
                                        <button type="button" class="btn btn-icon" data-increment="" aria-label="Increment quantity">
                                            <i class="ci-plus"></i>
                                        </button>
                                    </div>
                                </td>
                                <td class="h6 py-3 d-none d-md-table-cell">$899.00</td>
                                <td class="text-end py-3 px-0">
                                    <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
                                </td>
                            </tr>

                            <!-- Item -->
                            <tr>
                                <td class="py-3 ps-0">
                                    <div class="d-flex align-items-center">
                                        <a class="position-relative flex-shrink-0" href="shop-product-general-electronics.html">
                                            <span class="badge text-bg-danger position-absolute top-0 start-0">-10%</span>
                                            <img src="assets/img/shop/electronics/thumbs/09.png" width="110" alt="iPad Pro">
                                        </a>
                                        <div class="w-100 min-w-0 ps-2 ps-xl-3">
                                            <h5 class="d-flex animate-underline mb-2">
                                                <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-general-electronics.html">Tablet Apple iPad Pro M2</a>
                                            </h5>
                                            <ul class="list-unstyled gap-1 fs-xs mb-0">
                                                <li><span class="text-body-secondary">Color:</span> <span class="text-dark-emphasis fw-medium">Black</span></li>
                                                <li><span class="text-body-secondary">Model:</span> <span class="text-dark-emphasis fw-medium">256GB</span></li>
                                                <li class="d-xl-none"><span class="text-body-secondary">Price:</span> <span class="text-dark-emphasis fw-medium">$989.00 <del class="text-body-tertiary fw-normal">$1,099.00</del></span></li>
                                            </ul>
                                            <div class="count-input rounded-2 d-md-none mt-3">
                                                <button type="button" class="btn btn-sm btn-icon" data-decrement="" aria-label="Decrement quantity">
                                                    <i class="ci-minus"></i>
                                                </button>
                                                <input type="number" class="form-control form-control-sm" value="1" readonly="">
                                                <button type="button" class="btn btn-sm btn-icon" data-increment="" aria-label="Increment quantity">
                                                    <i class="ci-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="h6 py-3 d-none d-xl-table-cell">$989.00 <del class="text-body-tertiary fs-xs fw-normal">$1,099.00</del></td>
                                <td class="py-3 d-none d-md-table-cell">
                                    <div class="count-input">
                                        <button type="button" class="btn btn-icon" data-decrement="" aria-label="Decrement quantity">
                                            <i class="ci-minus"></i>
                                        </button>
                                        <input type="number" class="form-control" value="1" readonly="">
                                        <button type="button" class="btn btn-icon" data-increment="" aria-label="Increment quantity">
                                            <i class="ci-plus"></i>
                                        </button>
                                    </div>
                                </td>
                                <td class="h6 py-3 d-none d-md-table-cell">$989.00</td>
                                <td class="text-end py-3 px-0">
                                    <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
                                </td>
                            </tr>

                            <!-- Item -->
                            <tr>
                                <td class="py-3 ps-0">
                                    <div class="d-flex align-items-center">
                                        <a class="flex-shrink-0" href="shop-product-general-electronics.html">
                                            <img src="assets/img/shop/electronics/thumbs/01.png" width="110" alt="Smart Watch">
                                        </a>
                                        <div class="w-100 min-w-0 ps-2 ps-xl-3">
                                            <h5 class="d-flex animate-underline mb-2">
                                                <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-general-electronics.html">Smart Watch Series 7</a>
                                            </h5>
                                            <ul class="list-unstyled gap-1 fs-xs mb-0">
                                                <li><span class="text-body-secondary">Color:</span> <span class="text-dark-emphasis fw-medium">White</span></li>
                                                <li><span class="text-body-secondary">Model:</span> <span class="text-dark-emphasis fw-medium">44 mm</span></li>
                                                <li class="d-xl-none"><span class="text-body-secondary">Price:</span> <span class="text-dark-emphasis fw-medium">$429.00</span></li>
                                            </ul>
                                            <div class="count-input rounded-2 d-md-none mt-3">
                                                <button type="button" class="btn btn-sm btn-icon" data-decrement="" aria-label="Decrement quantity">
                                                    <i class="ci-minus"></i>
                                                </button>
                                                <input type="number" class="form-control form-control-sm" value="1" readonly="">
                                                <button type="button" class="btn btn-sm btn-icon" data-increment="" aria-label="Increment quantity">
                                                    <i class="ci-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="h6 py-3 d-none d-xl-table-cell">$429.00</td>
                                <td class="py-3 d-none d-md-table-cell">
                                    <div class="count-input">
                                        <button type="button" class="btn btn-icon" data-decrement="" aria-label="Decrement quantity">
                                            <i class="ci-minus"></i>
                                        </button>
                                        <input type="number" class="form-control" value="1" readonly="">
                                        <button type="button" class="btn btn-icon" data-increment="" aria-label="Increment quantity">
                                            <i class="ci-plus"></i>
                                        </button>
                                    </div>
                                </td>
                                <td class="h6 py-3 d-none d-md-table-cell">$429.00</td>
                                <td class="text-end py-3 px-0">
                                    <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="nav position-relative z-2 mb-4 mb-lg-0">
                        <a class="nav-link animate-underline px-0" href="shop-catalog-electronics.html">
                            <i class="ci-chevron-left fs-lg me-1"></i>
                            <span class="animate-target">Continue shopping</span>
                        </a>
                    </div>
                </div>
            </div>


            <!-- Order summary (sticky sidebar) -->
            <aside class="col-lg-4" style="margin-top: -100px">
                <div class="position-sticky top-0" style="padding-top: 100px">
                    <div class="bg-body-tertiary rounded-5 p-4 mb-3">
                        <div class="p-sm-2 p-lg-0 p-xl-2">
                            <h5 class="border-bottom pb-4 mb-4">Order summary</h5>
                            <ul class="list-unstyled fs-sm gap-3 mb-0">
                                <li class="d-flex justify-content-between">
                                    Subtotal (3 items):
                                    <span class="text-dark-emphasis fw-medium">$2,427.00</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    Saving:
                                    <span class="text-danger fw-medium">-$110.00</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    Tax collected:
                                    <span class="text-dark-emphasis fw-medium">$73.40</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    Shipping:
                                    <span class="text-dark-emphasis fw-medium">Calculated at checkout</span>
                                </li>
                            </ul>
                            <div class="border-top pt-4 mt-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <span class="fs-sm">Estimated total:</span>
                                    <span class="h5 mb-0">$2,390.40</span>
                                </div>
                                <a class="btn btn-lg btn-primary w-100" href="checkout-v1-delivery-1.html">
                                    Proceed to checkout
                                    <i class="ci-chevron-right fs-lg ms-1 me-n1"></i>
                                </a>
                                <div class="nav justify-content-center fs-sm mt-3">
                                    <a class="nav-link text-decoration-underline p-0 me-1" href="#authForm" data-bs-toggle="offcanvas" role="button">Create an account</a>
                                    and get
                                    <span class="text-dark-emphasis fw-medium ms-1">239 bonuses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion bg-body-tertiary rounded-5 p-4">
                        <div class="accordion-item border-0">
                            <h3 class="accordion-header" id="promoCodeHeading">
                                <button type="button" class="accordion-button animate-underline collapsed py-0 ps-sm-2 ps-lg-0 ps-xl-2" data-bs-toggle="collapse" data-bs-target="#promoCode" aria-expanded="false" aria-controls="promoCode">
                                    <i class="ci-percent fs-xl me-2"></i>
                                    <span class="animate-target me-2">Apply promo code</span>
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="promoCode" aria-labelledby="promoCodeHeading">
                                <div class="accordion-body pt-3 pb-2 ps-sm-2 px-lg-0 px-xl-2">
                                    <form class="needs-validation d-flex gap-2" novalidate="">
                                        <div class="position-relative w-100">
                                            <input type="text" class="form-control" placeholder="Enter promo code" required="">
                                            <div class="invalid-tooltip bg-transparent py-0">Enter a valid promo code!</div>
                                        </div>
                                        <button type="submit" class="btn btn-dark">Apply</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </section>


    <!-- Trending products (Carousel) -->
    <section class="container pb-4 pb-md-5 mb-2 mb-sm-0 mb-lg-2 mb-xl-4">
        <h2 class="h3 border-bottom pb-4 mb-0">Trending products</h2>

        <!-- Product carousel -->
        <div class="position-relative mx-md-1">

            <!-- External slider prev/next buttons visible on screens > 500px wide (sm breakpoint) -->
            <button type="button" class="trending-prev btn btn-prev btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start position-absolute top-50 start-0 z-2 translate-middle-y ms-n1 d-none d-sm-inline-flex" aria-label="Prev">
                <i class="ci-chevron-left fs-lg animate-target"></i>
            </button>
            <button type="button" class="trending-next btn btn-next btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end position-absolute top-50 end-0 z-2 translate-middle-y me-n1 d-none d-sm-inline-flex" aria-label="Next">
                <i class="ci-chevron-right fs-lg animate-target"></i>
            </button>

            <!-- Slider -->
            <div class="swiper py-4 px-sm-3" data-swiper="{
      &quot;slidesPerView&quot;: 2,
      &quot;spaceBetween&quot;: 24,
      &quot;loop&quot;: true,
      &quot;navigation&quot;: {
        &quot;prevEl&quot;: &quot;.trending-prev&quot;,
        &quot;nextEl&quot;: &quot;.trending-next&quot;
      },
      &quot;breakpoints&quot;: {
        &quot;768&quot;: {
          &quot;slidesPerView&quot;: 3
        },
        &quot;992&quot;: {
          &quot;slidesPerView&quot;: 4
        }
      }
    }">
                <div class="swiper-wrapper">

                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                            <div class="position-relative">
                                <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                                    <div class="d-flex flex-column gap-2">
                                        <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                                            <i class="ci-heart fs-base animate-target"></i>
                                        </button>
                                        <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                                            <i class="ci-refresh-cw fs-base animate-target"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                                    <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                                        <i class="ci-more-vertical fs-lg"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                                        <li>
                                            <a class="dropdown-item" href="#!">
                                                <i class="ci-heart fs-sm ms-n1 me-2"></i>
                                                Add to Wishlist
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#!">
                                                <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                                                Compare
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics.html">
                                    <span class="badge bg-danger position-absolute top-0 start-0 mt-2 ms-2 mt-lg-3 ms-lg-3">-21%</span>
                                    <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                                        <img src="assets/img/shop/electronics/01.png" alt="VR Glasses">
                                    </div>
                                </a>
                            </div>
                            <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div class="d-flex gap-1 fs-xs">
                                        <i class="ci-star-filled text-warning"></i>
                                        <i class="ci-star-filled text-warning"></i>
                                        <i class="ci-star-filled text-warning"></i>
                                        <i class="ci-star-filled text-warning"></i>
                                        <i class="ci-star text-body-tertiary opacity-75"></i>
                                    </div>
                                    <span class="text-body-tertiary fs-xs">(123)</span>
                                </div>
                                <h3 class="pb-1 mb-2">
                                    <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics.html">
                                        <span class="animate-target">VRB01 Virtual Reality Glasses</span>
                                    </a>
                                </h3>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="h5 lh-1 mb-0">$340.99 <del class="text-body-tertiary fs-sm fw-normal">$430.00</del></div>
                                    <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                                        <i class="ci-shopping-cart fs-base animate-target"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                            <div class="position-relative">
                                <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                                    <div class="d-flex flex-column gap-2">
                                        <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                                            <i class="ci-heart fs-base animate-target"></i>
                                        </button>
                                        <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                                            <i class="ci-refresh-cw fs-base animate-target"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                                    <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                                        <i class="ci-more-vertical fs-lg"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                                        <li>
                                            <a class="dropdown-item" href="#!">
                                                <i class="ci-heart fs-sm ms-n1 me-2"></i>
                                                Add to Wishlist
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#!">
                                                <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                                                Compare
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics.html">
                                    <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                                        <img src="assets/img/shop/electronics/14.png" alt="iPhone 14">
                                    </div>
                                </a>
                            </div>
                            <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div class="d-flex gap-1 fs-xs">
                                        <i class="ci-star-filled text-warning"></i>
                                        <i class="ci-star-filled text-warning"></i>
                                        <i class="ci-star-filled text-warning"></i>
                                        <i class="ci-star-filled text-warning"></i>
                                        <i class="ci-star-half text-warning"></i>
                                    </div>
                                    <span class="text-body-tertiary fs-xs">(142)</span>
                                </div>
                                <h3 class="pb-1 mb-2">
                                    <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics.html">
                                        <span class="animate-target">Apple iPhone 14 128GB Blue</span>
                                    </a>
                                </h3>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="h5 lh-1 mb-0">$899.00</div>
                                    <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                                        <i class="ci-shopping-cart fs-base animate-target"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                            <div class="position-relative">
                                <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                                    <div class="d-flex flex-column gap-2">
                                        <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                                            <i class="ci-heart fs-base animate-target"></i>
                                        </button>
                                        <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                                            <i class="ci-refresh-cw fs-base animate-target"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                                    <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                                        <i class="ci-more-vertical fs-lg"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                                        <li>
                                            <a class="dropdown-item" href="#!">
                                                <i class="ci-heart fs-sm ms-n1 me-2"></i>
                                                Add to Wishlist
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#!">
                                                <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                                                Compare
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics.html">
                                    <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                                        <img src="assets/img/shop/electronics/13.png" alt="Dualsense Edge">
                                    </div>
                                </a>
                            </div>
                            <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div class="d-flex gap-1 fs-xs">
                                        <i class="ci-star-filled text-warning"></i>
                                        <i class="ci-star-filled text-warning"></i>
                                        <i class="ci-star-filled text-warning"></i>
                                        <i class="ci-star-filled text-warning"></i>
                                        <i class="ci-star-filled text-warning"></i>
                                    </div>
                                    <span class="text-body-tertiary fs-xs">(187)</span>
                                </div>
                                <h3 class="pb-1 mb-2">
                                    <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics.html">
                                        <span class="animate-target">Sony Dualsense Edge Controller</span>
                                    </a>
                                </h3>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="h5 lh-1 mb-0">$200.00</div>
                                    <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                                        <i class="ci-shopping-cart fs-base animate-target"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                            <div class="position-relative">
                                <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                                    <div class="d-flex flex-column gap-2">
                                        <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                                            <i class="ci-heart fs-base animate-target"></i>
                                        </button>
                                        <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                                            <i class="ci-refresh-cw fs-base animate-target"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                                    <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                                        <i class="ci-more-vertical fs-lg"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                                        <li>
                                            <a class="dropdown-item" href="#!">
                                                <i class="ci-heart fs-sm ms-n1 me-2"></i>
                                                Add to Wishlist
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#!">
                                                <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                                                Compare
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics.html">
                                    <span class="badge bg-info position-absolute top-0 start-0 mt-2 ms-2 mt-lg-3 ms-lg-3">New</span>
                                    <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                                        <img src="assets/img/shop/electronics/04.png" alt="MacBook">
                                    </div>
                                </a>
                            </div>
                            <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div class="d-flex gap-1 fs-xs">
                                        <i class="ci-star-filled text-warning"></i>
                                        <i class="ci-star-filled text-warning"></i>
                                        <i class="ci-star-filled text-warning"></i>
                                        <i class="ci-star-filled text-warning"></i>
                                        <i class="ci-star-half text-warning"></i>
                                    </div>
                                    <span class="text-body-tertiary fs-xs">(51)</span>
                                </div>
                                <h3 class="pb-1 mb-2">
                                    <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics.html">
                                        <span class="animate-target">Laptop Apple MacBook Pro 13 M2</span>
                                    </a>
                                </h3>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="h5 lh-1 mb-0">$1,200.00</div>
                                    <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                                        <i class="ci-shopping-cart fs-base animate-target"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                            <div class="posittion-relative">
                                <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                                    <div class="d-flex flex-column gap-2">
                                        <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                                            <i class="ci-heart fs-base animate-target"></i>
                                        </button>
                                        <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                                            <i class="ci-refresh-cw fs-base animate-target"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                                    <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                                        <i class="ci-more-vertical fs-lg"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                                        <li>
                                            <a class="dropdown-item" href="#!">
                                                <i class="ci-heart fs-sm ms-n1 me-2"></i>
                                                Add to Wishlist
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#!">
                                                <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                                                Compare
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics.html">
                                    <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                                        <img src="assets/img/shop/electronics/08.png" alt="Bluetooth Headphones">
                                    </div>
                                </a>
                            </div>
                            <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div class="d-flex gap-1 fs-xs">
                                        <i class="ci-star-filled text-warning"></i>
                                        <i class="ci-star-filled text-warning"></i>
                                        <i class="ci-star-filled text-warning"></i>
                                        <i class="ci-star-half text-warning"></i>
                                        <i class="ci-star text-body-tertiary opacity-75"></i>
                                    </div>
                                    <span class="text-body-tertiary fs-xs">(136)</span>
                                </div>
                                <h3 class="pb-1 mb-2">
                                    <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics.html">
                                        <span class="animate-target">Wireless Bluetooth Headphones Sony</span>
                                    </a>
                                </h3>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="h5 lh-1 mb-0">$299.00</div>
                                    <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                                        <i class="ci-shopping-cart fs-base animate-target"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- External slider prev/next buttons visible on screens < 500px wide (sm breakpoint) -->
            <div class="d-flex justify-content-center gap-2 mt-n2 mb-3 pb-1 d-sm-none">
                <button type="button" class="trending-prev btn btn-prev btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start me-1" aria-label="Prev">
                    <i class="ci-chevron-left fs-lg animate-target"></i>
                </button>
                <button type="button" class="trending-next btn btn-next btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end" aria-label="Next">
                    <i class="ci-chevron-right fs-lg animate-target"></i>
                </button>
            </div>
        </div>
    </section>


    <!-- Subscription form + Vlog -->
    <section class="bg-body-tertiary py-5">
        <div class="container pt-sm-2 pt-md-3 pt-lg-4 pt-xl-5">
            <div class="row">
                <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
                    <h2 class="h4 mb-2">Sign up to our newsletter</h2>
                    <p class="text-body pb-2 pb-ms-3">Receive our latest updates about our products &amp; promotions</p>
                    <form class="d-flex needs-validation pb-1 pb-sm-2 pb-md-3 pb-lg-0 mb-4 mb-lg-5" novalidate="">
                        <div class="position-relative w-100 me-2">
                            <input type="email" class="form-control form-control-lg" placeholder="Your email" required="">
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary">Subscribe</button>
                    </form>
                    <div class="d-flex gap-3">
                        <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Instagram">
                            <i class="ci-instagram fs-base"></i>
                        </a>
                        <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Facebook">
                            <i class="ci-facebook fs-base"></i>
                        </a>
                        <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="YouTube">
                            <i class="ci-youtube fs-base"></i>
                        </a>
                        <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Telegram">
                            <i class="ci-telegram fs-base"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1 offset-xl-2">
                    <ul class="list-unstyled d-flex flex-column gap-4 ps-md-4 ps-lg-0 mb-3">
                        <li class="nav flex-nowrap align-items-center position-relative">
                            <img src="assets/img/home/electronics/vlog/01.jpg" class="rounded" width="140" alt="Video cover">
                            <div class="ps-3">
                                <div class="fs-xs text-body-secondary lh-sm mb-2">6:16</div>
                                <a class="nav-link fs-sm hover-effect-underline stretched-link p-0" href="#!">5 New Cool Gadgets You Must See on Cartzilla - Cheap Budget</a>
                            </div>
                        </li>
                        <li class="nav flex-nowrap align-items-center position-relative">
                            <img src="assets/img/home/electronics/vlog/02.jpg" class="rounded" width="140" alt="Video cover">
                            <div class="ps-3">
                                <div class="fs-xs text-body-secondary lh-sm mb-2">10:20</div>
                                <a class="nav-link fs-sm hover-effect-underline stretched-link p-0" href="#!">5 Super Useful Gadgets on Cartzilla You Must Have in 2023</a>
                            </div>
                        </li>
                        <li class="nav flex-nowrap align-items-center position-relative">
                            <img src="assets/img/home/electronics/vlog/03.jpg" class="rounded" width="140" alt="Video cover">
                            <div class="ps-3">
                                <div class="fs-xs text-body-secondary lh-sm mb-2">8:40</div>
                                <a class="nav-link fs-sm hover-effect-underline stretched-link p-0" href="#!">Top 5 New Amazing Gadgets on Cartzilla You Must See</a>
                            </div>
                        </li>
                    </ul>
                    <div class="nav ps-md-4 ps-lg-0">
                        <a class="btn nav-link animate-underline text-decoration-none px-0" href="#!">
                            <span class="animate-target">View all</span>
                            <i class="ci-chevron-right fs-base ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection