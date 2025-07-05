<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">
<!-- Mirrored from cartzilla-html.createx.studio/home-electronics.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Jun 2025 11:35:10 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <base href="{{ asset('') }}">
  <meta charset="utf-8">

  <!-- Viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

  <!-- SEO Meta Tags -->
  <title>Tech Commerce</title>
  <meta name="description" content="Cartzilla - Multipurpose E-Commerce Bootstrap HTML Template">
  <meta name="keywords" content="online shop, e-commerce, online store, market, multipurpose, product landing, cart, checkout, ui kit, light and dark mode, bootstrap, html5, css3, javascript, gallery, slider, mobile, pwa">
  <meta name="author" content="Createx Studio">

  <!-- Webmanifest + Favicon / App icons -->
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="manifest" href="manifest.json">
  <link rel="icon" type="image/svg+xml" href="assets/custom-icons/dark-logo-techcommerece.svg">
  <link rel="apple-touch-icon" href="assets/custom-icons/dark-logo-techcommerece.svg">

  <!-- Theme switcher (color modes) -->
  <script src="assets/js/theme-switcher.js"></script>

  <!-- Preloaded local web font (Inter) -->
  <link rel="preload" href="assets/fonts/inter-variable-latin.woff2" as="font" type="font/woff2" crossorigin="">

  <!-- Font icons -->
  <link rel="preload" href="assets/icons/cartzilla-icons.woff2" as="font" type="font/woff2" crossorigin="">
  <link rel="stylesheet" href="assets/icons/cartzilla-icons.min.css">

  <!-- Vendor styles -->
  @stack('styles')
  <!-- Bootstrap + Theme styles -->
  <link rel="preload" href="assets/css/theme.min.css" as="style">
  <link rel="preload" href="assets/css/theme.rtl.min.css" as="style">
  <link rel="stylesheet" href="assets/css/theme.min.css" id="theme-styles">

  <!-- Custom styles -->
  <link rel="stylesheet" href="assets/custom-css/app.css">

  <!-- Customizer -->
  <script src="assets/js/customizer.min.js"></script>
</head>


<!-- Body -->

<body>

  <!-- Customizer offcanvas -->
  <div class="offcanvas offcanvas-end" id="customizer" tabindex="-1">
    <div class="offcanvas-header border-bottom">
      <h4 class="h5 offcanvas-title">Customize theme</h4>
      <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

      <!-- Customizer settings -->
      <div class="customizer-collapse collapse show" id="customizerSettings">

        <!-- Colors -->
        <div class="pb-4 mb-2">
          <div class="d-flex align-items-center mb-3">
            <i class="ci-paint text-body-tertiary fs-5 me-2"></i>
            <h5 class="fs-lg mb-0">Colors</h5>
          </div>
          <div class="row row-cols-2 g-3" id="theme-colors">
            <div class="col">
              <h6 class="fs-sm mb-2">Primary</h6>
              <div class="color-swatch d-flex border rounded gap-3 p-2" id="theme-primary" data-color-labels="[&quot;theme-primary&quot;, &quot;primary&quot;, &quot;primary-rgb&quot;]">
                <input type="text" class="form-control bg-transparent border-0 rounded-0 p-1" value="#f55266">
                <label for="primary" class="ratio ratio-1x1 flex-shrink-0 w-100 cursor-pointer rounded-circle" style="max-width: 38px; background-color: #f55266"></label>
                <input type="color" class="visually-hidden" id="primary" value="#f55266">
              </div>
            </div>
            <div class="col">
              <h6 class="fs-sm mb-2">Success</h6>
              <div class="color-swatch d-flex border rounded gap-3 p-2" id="theme-success" data-color-labels="[&quot;theme-success&quot;, &quot;success&quot;, &quot;success-rgb&quot;]">
                <input type="text" class="form-control bg-transparent border-0 rounded-0 p-1" value="#33b36b">
                <label for="success" class="ratio ratio-1x1 flex-shrink-0 w-100 cursor-pointer rounded-circle" style="max-width: 38px; background-color: #33b36b"></label>
                <input type="color" class="visually-hidden" id="success" value="#33b36b">
              </div>
            </div>
            <div class="col">
              <h6 class="fs-sm mb-2">Warning</h6>
              <div class="color-swatch d-flex border rounded gap-3 p-2" id="theme-warning" data-color-labels="[&quot;theme-warning&quot;, &quot;warning&quot;, &quot;warning-rgb&quot;]">
                <input type="text" class="form-control bg-transparent border-0 rounded-0 p-1" value="#fc9231">
                <label for="warning" class="ratio ratio-1x1 flex-shrink-0 w-100 cursor-pointer rounded-circle" style="max-width: 38px; background-color: #fc9231"></label>
                <input type="color" class="visually-hidden" id="warning" value="#fc9231">
              </div>
            </div>
            <div class="col">
              <h6 class="fs-sm mb-2">Danger</h6>
              <div class="color-swatch d-flex border rounded gap-2 p-2" id="theme-danger" data-color-labels="[&quot;theme-danger&quot;, &quot;danger&quot;, &quot;danger-rgb&quot;]">
                <input type="text" class="form-control bg-transparent border-0 rounded-0 p-1" value="#f03d3d">
                <label for="danger" class="ratio ratio-1x1 flex-shrink-0 w-100 cursor-pointer rounded-circle" style="max-width: 38px; background-color: #f03d3d"></label>
                <input type="color" class="visually-hidden" id="danger" value="#f03d3d">
              </div>
            </div>
            <div class="col">
              <h6 class="fs-sm mb-2">Info</h6>
              <div class="color-swatch d-flex border rounded gap-2 p-2" id="theme-info" data-color-labels="[&quot;theme-info&quot;, &quot;info&quot;, &quot;info-rgb&quot;]">
                <input type="text" class="form-control bg-transparent border-0 rounded-0 p-1" value="#2f6ed5">
                <label for="info" class="ratio ratio-1x1 flex-shrink-0 w-100 cursor-pointer rounded-circle" style="max-width: 38px; background-color: #2f6ed5"></label>
                <input type="color" class="visually-hidden" id="info" value="#2f6ed5">
              </div>
            </div>
          </div>
        </div>

        <!-- Direction -->
        <div class="pb-4 mb-2">
          <div class="d-flex align-items-center pb-1 mb-2">
            <i class="ci-sort text-body-tertiary fs-lg me-2" style="transform: rotate(90deg)"></i>
            <h5 class="fs-lg mb-0">Direction</h5>
          </div>
          <div class="d-flex align-items-center justify-content-between border rounded p-3">
            <div class="me-3">
              <h6 class="mb-1">RTL</h6>
              <p class="fs-sm mb-0">Change text direction</p>
            </div>
            <div class="form-check form-switch m-0">
              <input type="checkbox" class="form-check-input" role="switch" id="rtl-switch">
            </div>
          </div>
          <div class="alert alert-info p-2 mt-2 mb-0">
            <div class="d-flex text-body-emphasis fs-xs py-1 pe-1">
              <i class="ci-info text-info fs-lg mb-2 mb-sm-0" style="margin-top: .125rem"></i>
              <div class="ps-2">To switch the text direction of your webpage from LTR to RTL, please consult the detailed instructions provided in the relevant section of our documentation.</div>
            </div>
          </div>
        </div>

        <!-- Border width -->
        <div class="pb-4 mb-2">
          <div class="d-flex align-items-center pb-1 mb-2">
            <i class="ci-menu text-body-tertiary fs-lg me-2"></i>
            <h5 class="fs-lg mb-0">Border width, px</h5>
          </div>
          <div class="slider-input d-flex align-items-center gap-3 border rounded p-3" id="border-input">
            <input type="range" class="form-range" min="0" max="10" step="1" value="1">
            <input type="number" class="form-control" id="border-width" min="0" max="10" value="1" style="max-width: 5.5rem">
          </div>
        </div>

        <!-- Rounding -->
        <div class="d-flex align-items-center pb-1 mb-2">
          <i class="ci-maximize text-body-tertiary fs-lg me-2"></i>
          <h5 class="fs-lg mb-0">Rounding, rem</h5>
        </div>
        <div class="slider-input d-flex align-items-center gap-3 border rounded p-3">
          <input type="range" class="form-range" min="0" max="5" step=".05" value="0.5">
          <input type="number" class="form-control" id="border-radius" min="0" max="5" step=".05" value="0.5" style="max-width: 5.5rem">
        </div>
      </div>

      <!-- Customizer code -->
      <div class="customizer-collapse collapse" id="customizerCode">
        <div class="nav mb-3">
          <a class="nav-link animate-underline fs-base p-0" href=".html" data-bs-toggle="collapse" aria-expanded="true" aria-controls="customizerSettings customizerCode">
            <i class="ci-chevron-left fs-lg ms-n1 me-1"></i>
            <span class="animate-target">Back to settings</span>
          </a>
        </div>
        <p class="fs-sm pb-1">To apply the provided styles to your webpage, enclose them within a <code>&lt;style&gt;</code> tag and insert this tag into the <code>&lt;head&gt;</code> section of your HTML document after the following link to the main stylesheet:<br><code>&lt;link href="assets/css/theme.min.css"&gt;</code></p>
        <div class="position-relative bg-body-tertiary rounded overflow-hidden pt-3">
          <div class="position-absolute top-0 start-0 w-100 p-3">
            <button type="button" class="btn btn-sm btn-outline-dark w-100" data-copy-text-from="#generated-styles" data-done-label="Code copied">
              <i class="ci-copy fs-sm me-1"></i>
              Copy code
            </button>
          </div>
          <pre class="text-wrap bg-transparent border-0 fs-xs text-body-emphasis p-4 pt-5" id="generated-styles"></pre>
        </div>
      </div>
    </div>

    <!-- Offcanvas footer (Action buttons) -->
    <div class="offcanvas-header border-top gap-3 d-none" id="customizer-btns">
      <button type="button" class="btn btn-lg btn-secondary w-100 fs-sm" id="customizer-reset">
        <i class="ci-trash fs-lg me-2 ms-n1"></i>
        Reset
      </button>
      <button class="btn btn-lg btn-primary hiding-collapse-toggle w-100 fs-sm collapsed" type="button" data-bs-toggle="collapse" data-bs-target=".customizer-collapse" aria-expanded="false" aria-controls="customizerSettings customizerCode">
        <i class="ci-code fs-lg me-2 ms-n1"></i>
        Show code
      </button>
    </div>
  </div>


  <!-- Shopping cart offcanvas -->
  <div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="shoppingCart" tabindex="-1" aria-labelledby="shoppingCartLabel" style="width: 500px">

    <!-- Header -->
    <div class="offcanvas-header flex-column align-items-start py-3 pt-lg-4">
      <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-lg-4">
        <h4 class="offcanvas-title" id="shoppingCartLabel">Shopping cart</h4>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <p class="fs-sm">Buy <span class="text-dark-emphasis fw-semibold">$183</span> more to get <span class="text-dark-emphasis fw-semibold">Free Shipping</span></p>
      <div class="progress w-100" role="progressbar" aria-label="Free shipping progress" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
        <div class="progress-bar bg-warning rounded-pill" style="width: 75%"></div>
      </div>
    </div>

    <!-- Items -->
    <div class="offcanvas-body d-flex flex-column gap-4 pt-2">

      <!-- Item -->
      <div class="d-flex align-items-center">
        <a class="flex-shrink-0" href="shop-product-general-electronics.html">
          <img src="assets/img/shop/electronics/thumbs/08.png" width="110" alt="iPhone 14">
        </a>
        <div class="w-100 min-w-0 ps-2 ps-sm-3">
          <h5 class="d-flex animate-underline mb-2">
            <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-general-electronics.html">Apple iPhone 14 128GB White</a>
          </h5>
          <div class="h6 pb-1 mb-2">$899.00</div>
          <div class="d-flex align-items-center justify-content-between">
            <div class="count-input rounded-2">
              <button type="button" class="btn btn-icon btn-sm" data-decrement="" aria-label="Decrement quantity">
                <i class="ci-minus"></i>
              </button>
              <input type="number" class="form-control form-control-sm" value="1" readonly="">
              <button type="button" class="btn btn-icon btn-sm" data-increment="" aria-label="Increment quantity">
                <i class="ci-plus"></i>
              </button>
            </div>
            <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
          </div>
        </div>
      </div>

      <!-- Item -->
      <div class="d-flex align-items-center">
        <a class="position-relative flex-shrink-0" href="shop-product-general-electronics.html">
          <span class="badge text-bg-danger position-absolute top-0 start-0">-10%</span>
          <img src="assets/img/shop/electronics/thumbs/09.png" width="110" alt="iPad Pro">
        </a>
        <div class="w-100 min-w-0 ps-2 ps-sm-3">
          <h5 class="d-flex animate-underline mb-2">
            <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-general-electronics.html">Tablet Apple iPad Pro M2</a>
          </h5>
          <div class="h6 pb-1 mb-2">$989.00 <del class="text-body-tertiary fs-xs fw-normal">$1,099.00</del></div>
          <div class="d-flex align-items-center justify-content-between">
            <div class="count-input rounded-2">
              <button type="button" class="btn btn-icon btn-sm" data-decrement="" aria-label="Decrement quantity">
                <i class="ci-minus"></i>
              </button>
              <input type="number" class="form-control form-control-sm" value="1" readonly="">
              <button type="button" class="btn btn-icon btn-sm" data-increment="" aria-label="Increment quantity">
                <i class="ci-plus"></i>
              </button>
            </div>
            <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
          </div>
        </div>
      </div>

      <!-- Item -->
      <div class="d-flex align-items-center">
        <a class="flex-shrink-0" href="shop-product-general-electronics.html">
          <img src="assets/img/shop/electronics/thumbs/01.png" width="110" alt="Smart Watch">
        </a>
        <div class="w-100 min-w-0 ps-2 ps-sm-3">
          <h5 class="d-flex animate-underline mb-2">
            <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-general-electronics.html">Smart Watch Series 7, White</a>
          </h5>
          <div class="h6 pb-1 mb-2">$429.00</div>
          <div class="d-flex align-items-center justify-content-between">
            <div class="count-input rounded-2">
              <button type="button" class="btn btn-icon btn-sm" data-decrement="" aria-label="Decrement quantity">
                <i class="ci-minus"></i>
              </button>
              <input type="number" class="form-control form-control-sm" value="1" readonly="">
              <button type="button" class="btn btn-icon btn-sm" data-increment="" aria-label="Increment quantity">
                <i class="ci-plus"></i>
              </button>
            </div>
            <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="offcanvas-header flex-column align-items-start">
      <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-md-4">
        <span class="text-light-emphasis">Subtotal:</span>
        <span class="h6 mb-0">$2,317.00</span>
      </div>
      <div class="d-flex w-100 gap-3">
        <a class="btn btn-lg btn-secondary w-100" href="checkout-v1-cart.html">View cart</a>
        <a class="btn btn-lg btn-primary w-100" href="checkout-v1-delivery-1.html">Checkout</a>
      </div>
    </div>
  </div>


  <!-- Navigation bar (Page header) -->
  @include('layouts.web_partials.navbar')


  <!-- Page content -->
  @yield('content')


  <!-- Page footer -->
  <footer class="footer position-relative bg-dark">
    <span class="position-absolute top-0 start-0 w-100 h-100 bg-body d-none d-block-dark"></span>
    <div class="container position-relative z-1 pt-sm-2 pt-md-3 pt-lg-4" data-bs-theme="dark">

      <!-- Columns with links that are turned into accordion on screens < 500px wide (sm breakpoint) -->
      <div class="accordion py-5" id="footerLinks">
        <div class="row">
          <div class="col-md-4 d-sm-flex flex-md-column align-items-center align-items-md-start pb-3 mb-sm-4">
            <h4 class="mb-sm-0 mb-md-4 me-4">
              <a class="text-dark-emphasis text-decoration-none" href="index.html">Tech Commerce</a>
            </h4>
            <p class="text-body fs-sm text-sm-end text-md-start mb-sm-0 mb-md-3 ms-0 ms-sm-auto ms-md-0 me-4">Got questions? Contact us 24/7</p>
            <div class="dropdown" style="max-width: 250px">
              <button type="button" class="btn btn-secondary dropdown-toggle justify-content-between w-100" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Help and consultation
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#!">Help center &amp; FAQ</a></li>
                <li><a class="dropdown-item" href="#!">Support chat</a></li>
                <li><a class="dropdown-item" href="#!">Open support ticket</a></li>
                <li><a class="dropdown-item" href="#!">Call center</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-8">
            <div class="row row-cols-1 row-cols-sm-3 gx-3 gx-md-4">
              <div class="accordion-item col border-0">
                <h6 class="accordion-header" id="companyHeading">
                  <span class="text-dark-emphasis d-none d-sm-block">Company</span>
                  <button type="button" class="accordion-button collapsed py-3 d-sm-none" data-bs-toggle="collapse" data-bs-target="#companyLinks" aria-expanded="false" aria-controls="companyLinks">Company</button>
                </h6>
                <div class="accordion-collapse collapse d-sm-block" id="companyLinks" aria-labelledby="companyHeading" data-bs-parent="#footerLinks">
                  <ul class="nav flex-column gap-2 pt-sm-3 pb-3 mt-n1 mb-1">
                    <li class="d-flex w-100 pt-1">
                      <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">About company</a>
                    </li>
                    <li class="d-flex w-100 pt-1">
                      <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Our team</a>
                    </li>
                    <li class="d-flex w-100 pt-1">
                      <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Careers</a>
                    </li>
                    <li class="d-flex w-100 pt-1">
                      <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Contact us</a>
                    </li>
                    <li class="d-flex w-100 pt-1">
                      <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">News</a>
                    </li>
                  </ul>
                </div>
                <hr class="d-sm-none my-0">
              </div>
              <div class="accordion-item col border-0">
                <h6 class="accordion-header" id="accountHeading">
                  <span class="text-dark-emphasis d-none d-sm-block">Account</span>
                  <button type="button" class="accordion-button collapsed py-3 d-sm-none" data-bs-toggle="collapse" data-bs-target="#accountLinks" aria-expanded="false" aria-controls="accountLinks">Account</button>
                </h6>
                <div class="accordion-collapse collapse d-sm-block" id="accountLinks" aria-labelledby="accountHeading" data-bs-parent="#footerLinks">
                  <ul class="nav flex-column gap-2 pt-sm-3 pb-3 mt-n1 mb-1">
                    <li class="d-flex w-100 pt-1">
                      <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Your account</a>
                    </li>
                    <li class="d-flex w-100 pt-1">
                      <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Shipping rates &amp; policies</a>
                    </li>
                    <li class="d-flex w-100 pt-1">
                      <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Refunds &amp; replacements</a>
                    </li>
                    <li class="d-flex w-100 pt-1">
                      <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Delivery info</a>
                    </li>
                    <li class="d-flex w-100 pt-1">
                      <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Order tracking</a>
                    </li>
                    <li class="d-flex w-100 pt-1">
                      <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Taxes &amp; fees</a>
                    </li>
                  </ul>
                </div>
                <hr class="d-sm-none my-0">
              </div>
              <div class="accordion-item col border-0">
                <h6 class="accordion-header" id="customerHeading">
                  <span class="text-dark-emphasis d-none d-sm-block">Customer service</span>
                  <button type="button" class="accordion-button collapsed py-3 d-sm-none" data-bs-toggle="collapse" data-bs-target="#customerLinks" aria-expanded="false" aria-controls="customerLinks">Customer service</button>
                </h6>
                <div class="accordion-collapse collapse d-sm-block" id="customerLinks" aria-labelledby="customerHeading" data-bs-parent="#footerLinks">
                  <ul class="nav flex-column gap-2 pt-sm-3 pb-3 mt-n1 mb-1">
                    <li class="d-flex w-100 pt-1">
                      <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Payment methods</a>
                    </li>
                    <li class="d-flex w-100 pt-1">
                      <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Money back guarantee</a>
                    </li>
                    <li class="d-flex w-100 pt-1">
                      <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Product returns</a>
                    </li>
                    <li class="d-flex w-100 pt-1">
                      <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Support center</a>
                    </li>
                    <li class="d-flex w-100 pt-1">
                      <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Shipping</a>
                    </li>
                    <li class="d-flex w-100 pt-1">
                      <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Terms &amp; conditions</a>
                    </li>
                  </ul>
                </div>
                <hr class="d-sm-none my-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Category / tag links -->
      <div class="d-flex flex-column gap-3 pb-3 pb-md-4 pb-lg-5 mt-n2 mt-sm-n4 mt-lg-0 mb-4">
        <ul class="nav align-items-center text-body-tertiary gap-2">
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">Computers</a>
          </li>
          <li class="px-1">/</li>
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">Smartphones</a>
          </li>
          <li class="px-1">/</li>
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">TV, Video</a>
          </li>
          <li class="px-1">/</li>
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">Speakers</a>
          </li>
          <li class="px-1">/</li>
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">Cameras</a>
          </li>
          <li class="px-1">/</li>
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">Printers</a>
          </li>
          <li class="px-1">/</li>
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">Video Games</a>
          </li>
          <li class="px-1">/</li>
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">Headphones</a>
          </li>
          <li class="px-1">/</li>
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">Wearable</a>
          </li>
          <li class="px-1">/</li>
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">HDD/SSD</a>
          </li>
          <li class="px-1">/</li>
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">Smart Home</a>
          </li>
          <li class="px-1">/</li>
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">Apple Devices</a>
          </li>
          <li class="px-1">/</li>
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">Tablets</a>
          </li>
        </ul>
        <ul class="nav align-items-center text-body-tertiary gap-2">
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">Monitors</a>
          </li>
          <li class="px-1">/</li>
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">Scanners</a>
          </li>
          <li class="px-1">/</li>
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">Servers</a>
          </li>
          <li class="px-1">/</li>
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">Heating and Cooling</a>
          </li>
          <li class="px-1">/</li>
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">E-readers</a>
          </li>
          <li class="px-1">/</li>
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">Data Storage</a>
          </li>
          <li class="px-1">/</li>
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">Networking</a>
          </li>
          <li class="px-1">/</li>
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">Power Strips</a>
          </li>
          <li class="px-1">/</li>
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">Plugs and Outlets</a>
          </li>
          <li class="px-1">/</li>
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">Detectors and Sensors</a>
          </li>
          <li class="px-1">/</li>
          <li class="animate-underline">
            <a class="nav-link fw-normal p-0 animate-target" href="#!">Accessories</a>
          </li>
        </ul>
      </div>

      <!-- Copyright + Payment methods -->
      <div class="d-md-flex align-items-center border-top py-4">
        <div class="d-flex gap-2 gap-sm-3 justify-content-center ms-md-auto mb-4 mb-md-0 order-md-2">
          <div>
            <img src="assets/img/payment-methods/visa-dark-mode.svg" alt="Visa">
          </div>
          <div>
            <img src="assets/img/payment-methods/mastercard.svg" alt="Mastercard">
          </div>
          <div>
            <img src="assets/img/payment-methods/paypal-dark-mode.svg" alt="PayPal">
          </div>
          <div>
            <img src="assets/img/payment-methods/google-pay-dark-mode.svg" alt="Google Pay">
          </div>
          <div>
            <img src="assets/img/payment-methods/apple-pay-dark-mode.svg" alt="Apple Pay">
          </div>
        </div>
        <p class="text-body fs-xs text-center text-md-start mb-0 me-4 order-md-1">© All rights reserved 2025 Tech Commerce</p>
      </div>
    </div>
  </footer>


  <!-- Back to top button -->
  {{-- <div class="floating-buttons position-fixed top-50 end-0 z-sticky me-3 me-xl-4 pb-4">
      <a class="btn-scroll-top btn btn-sm bg-body border-0 rounded-pill shadow animate-slide-end" href="#top">
        Top
        <i class="ci-arrow-right fs-base ms-1 me-n1 animate-target"></i>
        <span class="position-absolute top-0 start-0 w-100 h-100 border rounded-pill z-0"></span>
        <svg class="position-absolute top-0 start-0 w-100 h-100 z-1" viewBox="0 0 62 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x=".75" y=".75" width="60.5" height="30.5" rx="15.25" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></rect>
        </svg>
      </a>
      <a class="btn btn-sm btn-outline-secondary text-uppercase bg-body rounded-pill shadow animate-rotate ms-2 me-n5" href="#customizer" style="font-size: .625rem; letter-spacing: .05rem;" data-bs-toggle="offcanvas" role="button" aria-controls="customizer">
        Customize<i class="ci-settings fs-base ms-1 me-n2 animate-target"></i>
      </a>
    </div> --}}


  <!-- Vendor scripts -->
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Bootstrap + Theme scripts -->
  <script src="assets/js/theme.min.js"></script>


</body>
<!-- Mirrored from cartzilla-html.createx.studio/home-electronics.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Jun 2025 11:37:27 GMT -->

</html>