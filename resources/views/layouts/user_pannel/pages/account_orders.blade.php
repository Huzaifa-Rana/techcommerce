@extends('layouts.user_pannel.account')

@section('user_pannel_content')
<div class="col-lg-9">
    <div class="ps-lg-3 ps-xl-0">

        <!-- Page title + Sorting selects -->
        <div class="row align-items-center pb-3 pb-md-4 mb-md-1 mb-lg-2">
            <div class="col-md-4 col-xl-6 mb-3 mb-md-0">
                <h1 class="h2 me-3 mb-0">Orders</h1>
            </div>
            <div class="col-md-8 col-xl-6">
                <div class="row row-cols-1 row-cols-sm-2 g-3 g-xxl-4">
                    <div class="col">
                        <select class="form-select" data-select="{
                        &quot;placeholderValue&quot;: &quot;Select status&quot;,
                        &quot;choices&quot;: [
                          {
                            &quot;value&quot;: &quot;&quot;,
                            &quot;label&quot;: &quot;Select status&quot;,
                            &quot;placeholder&quot;: true
                          },
                          {
                            &quot;value&quot;: &quot;inprogress&quot;,
                            &quot;label&quot;: &quot;<div class=\&quot;d-flex align-items-center text-nowrap\&quot;><span class=\&quot;bg-info rounded-circle p-1 me-2\&quot;></span>In progress</div>&quot;
                          },
                          {
                            &quot;value&quot;: &quot;delivered&quot;,
                            &quot;label&quot;: &quot;<div class=\&quot;d-flex align-items-center text-nowrap\&quot;><span class=\&quot;bg-success rounded-circle p-1 me-2\&quot;></span>Delivered</div>&quot;
                          },
                          {
                            &quot;value&quot;: &quot;canceled&quot;,
                            &quot;label&quot;: &quot;<div class=\&quot;d-flex align-items-center text-nowrap\&quot;><span class=\&quot;bg-danger rounded-circle p-1 me-2\&quot;></span>Canceled</div>&quot;
                          },
                          {
                            &quot;value&quot;: &quot;delayed&quot;,
                            &quot;label&quot;: &quot;<div class=\&quot;d-flex align-items-center text-nowrap\&quot;><span class=\&quot;bg-warning rounded-circle p-1 me-2\&quot;></span>Delayed</div>&quot;
                          }
                        ]
                      }" data-select-template="true" aria-label="Status sorting"></select>
                    </div>
                    <div class="col">
                        <select class="form-select" data-select="{&quot;removeItemButton&quot;: false}" aria-label="Timeframe sorting">
                            <option value="all-time">For all time</option>
                            <option value="last-year">For last year</option>
                            <option value="last-3-months">For last 3 months</option>
                            <option value="last-30-days">For last 30 days</option>
                            <option value="last-week">For last week</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>


        <!-- Sortable orders table -->
        <div data-filter-list="{&quot;listClass&quot;: &quot;orders-list&quot;, &quot;sortClass&quot;: &quot;orders-sort&quot;, &quot;valueNames&quot;: [&quot;date&quot;, &quot;total&quot;]}">
            <table class="table align-middle fs-sm text-nowrap">
                <thead>
                    <tr>
                        <th scope="col" class="py-3 ps-0">
                            <span class="text-body fw-normal">Order <span class="d-none d-md-inline">#</span></span>
                        </th>
                        <th scope="col" class="py-3 d-none d-md-table-cell">
                            <button type="button" class="btn orders-sort fw-normal text-body p-0" data-sort="date">Order date</button>
                        </th>
                        <th scope="col" class="py-3 d-none d-md-table-cell">
                            <span class="text-body fw-normal">Status</span>
                        </th>
                        <th scope="col" class="py-3 d-none d-md-table-cell">
                            <button type="button" class="btn orders-sort fw-normal text-body p-0" data-sort="total">Total</button>
                        </th>
                        <th scope="col" class="py-3">&nbsp;</th>
                    </tr>
                </thead>
                <tbody class="text-body-emphasis orders-list">

                    <!-- Item -->
                    <tr>
                        <td class="fw-medium pt-2 pb-3 py-md-2 ps-0">
                            <a class="d-inline-block animate-underline text-body-emphasis text-decoration-none py-2" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                                <span class="animate-target">78A6431D409</span>
                            </a>
                            <ul class="list-unstyled fw-normal text-body m-0 d-md-none">
                                <li>Feb 6, 2025</li>
                                <li class="d-flex align-items-center">
                                    <span class="bg-info rounded-circle p-1 me-2"></span>
                                    In progress
                                </li>
                                <li class="fw-medium text-body-emphasis">$2,105.90</li>
                            </ul>
                        </td>
                        <td class="fw-medium py-3 d-none d-md-table-cell">
                            Feb 6, 2025
                            <span class="date d-none">25-02-06</span>
                        </td>
                        <td class="fw-medium py-3 d-none d-md-table-cell">
                            <span class="d-flex align-items-center">
                                <span class="bg-info rounded-circle p-1 me-2"></span>
                                In progress
                            </span>
                        </td>
                        <td class="fw-medium py-3 d-none d-md-table-cell">
                            $2,105.90
                            <span class="total d-none">210590</span>
                        </td>
                        <td class="py-3 pe-0">
                            <span class="d-flex align-items-center justify-content-end position-relative gap-1 gap-sm-2 ms-n2 ms-sm-0">
                                <span><img src="assets/img/shop/electronics/thumbs/20.png" width="64" alt="Thumbnail"></span>
                                <span><img src="assets/img/shop/electronics/thumbs/16.png" width="64" alt="Thumbnail"></span>
                                <span><img src="assets/img/shop/electronics/thumbs/15.png" width="64" alt="Thumbnail"></span>
                                <a class="btn btn-icon btn-ghost btn-secondary stretched-link border-0" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                                    <i class="ci-chevron-right fs-lg"></i>
                                </a>
                            </span>
                        </td>
                    </tr>

                    <!-- Item -->
                    <tr>
                        <td class="fw-medium pt-2 pb-3 py-md-2 ps-0">
                            <a class="d-inline-block animate-underline text-body-emphasis text-decoration-none py-2" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                                <span class="animate-target">47H76G09F33</span>
                            </a>
                            <ul class="list-unstyled fw-normal text-body m-0 d-md-none">
                                <li>Dec 12, 2024</li>
                                <li class="d-flex align-items-center">
                                    <span class="bg-success rounded-circle p-1 me-2"></span>
                                    Delivered
                                </li>
                                <li class="fw-medium text-body-emphasis">$360.75</li>
                            </ul>
                        </td>
                        <td class="fw-medium py-3 d-none d-md-table-cell">
                            Dec 12, 2024
                            <span class="date d-none">24-12-12</span>
                        </td>
                        <td class="fw-medium py-3 d-none d-md-table-cell">
                            <span class="d-flex align-items-center">
                                <span class="bg-success rounded-circle p-1 me-2"></span>
                                Delivered
                            </span>
                        </td>
                        <td class="fw-medium py-3 d-none d-md-table-cell">
                            $360.75
                            <span class="total d-none">36075</span>
                        </td>
                        <td class="py-3 pe-0">
                            <span class="d-flex align-items-center justify-content-end position-relative gap-1 gap-sm-2 ms-n2 ms-sm-0">
                                <span><img src="assets/img/shop/electronics/thumbs/14.png" width="64" alt="Thumbnail"></span>
                                <a class="btn btn-icon btn-ghost btn-secondary stretched-link border-0" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                                    <i class="ci-chevron-right fs-lg"></i>
                                </a>
                            </span>
                        </td>
                    </tr>

                    <!-- Item -->
                    <tr>
                        <td class="fw-medium pt-2 pb-3 py-md-2 ps-0">
                            <a class="d-inline-block animate-underline text-body-emphasis text-decoration-none py-2" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                                <span class="animate-target">502TR872W2</span>
                            </a>
                            <ul class="list-unstyled fw-normal text-body m-0 d-md-none">
                                <li>Nov 7, 2024</li>
                                <li class="d-flex align-items-center">
                                    <span class="bg-success rounded-circle p-1 me-2"></span>
                                    Delivered
                                </li>
                                <li class="fw-medium text-body-emphasis">$4,268.00</li>
                            </ul>
                        </td>
                        <td class="fw-medium py-3 d-none d-md-table-cell">
                            Nov 7, 2024
                            <span class="date d-none">24-11-07</span>
                        </td>
                        <td class="fw-medium py-3 d-none d-md-table-cell">
                            <span class="d-flex align-items-center">
                                <span class="bg-success rounded-circle p-1 me-2"></span>
                                Delivered
                            </span>
                        </td>
                        <td class="fw-medium py-3 d-none d-md-table-cell">
                            $4,268.00
                            <span class="total d-none">426800</span>
                        </td>
                        <td class="py-3 pe-0">
                            <span class="d-flex align-items-center justify-content-end position-relative gap-1 gap-sm-2 ms-n2 ms-sm-0">
                                <span><img src="assets/img/shop/electronics/thumbs/12.png" width="64" alt="Thumbnail"></span>
                                <span><img src="assets/img/shop/electronics/thumbs/13.png" width="64" alt="Thumbnail"></span>
                                <span><img src="assets/img/shop/electronics/thumbs/18.png" width="64" alt="Thumbnail"></span>
                                <span class="fw-medium me-1">+3</span>
                                <a class="btn btn-icon btn-ghost btn-secondary stretched-link border-0" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                                    <i class="ci-chevron-right fs-lg"></i>
                                </a>
                            </span>
                        </td>
                    </tr>

                    <!-- Item -->
                    <tr>
                        <td class="fw-medium pt-2 pb-3 py-md-2 ps-0">
                            <a class="d-inline-block animate-underline text-body-emphasis text-decoration-none py-2" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                                <span class="animate-target">34VB5540K83</span>
                            </a>
                            <ul class="list-unstyled fw-normal text-body m-0 d-md-none">
                                <li>Sep 15, 2024</li>
                                <li class="d-flex align-items-center">
                                    <span class="bg-danger rounded-circle p-1 me-2"></span>
                                    Canceled
                                </li>
                                <li class="fw-medium text-body-emphasis">$987.50</li>
                            </ul>
                        </td>
                        <td class="fw-medium py-3 d-none d-md-table-cell">
                            Sep 15, 2024
                            <span class="date d-none">24-09-15</span>
                        </td>
                        <td class="fw-medium py-3 d-none d-md-table-cell">
                            <span class="d-flex align-items-center">
                                <span class="bg-danger rounded-circle p-1 me-2"></span>
                                Canceled
                            </span>
                        </td>
                        <td class="fw-medium py-3 d-none d-md-table-cell">
                            $987.50
                            <span class="total d-none">98750</span>
                        </td>
                        <td class="py-3 pe-0">
                            <span class="d-flex align-items-center justify-content-end position-relative gap-1 gap-sm-2 ms-n2 ms-sm-0">
                                <span><img src="assets/img/shop/electronics/thumbs/21.png" width="64" alt="Thumbnail"></span>
                                <span><img src="assets/img/shop/electronics/thumbs/11.png" width="64" alt="Thumbnail"></span>
                                <a class="btn btn-icon btn-ghost btn-secondary stretched-link border-0" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                                    <i class="ci-chevron-right fs-lg"></i>
                                </a>
                            </span>
                        </td>
                    </tr>

                    <!-- Item -->
                    <tr>
                        <td class="fw-medium pt-2 pb-3 py-md-2 ps-0">
                            <a class="d-inline-block animate-underline text-body-emphasis text-decoration-none py-2" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                                <span class="animate-target">112P45A90V2</span>
                            </a>
                            <ul class="list-unstyled fw-normal text-body m-0 d-md-none">
                                <li>May 12, 2024</li>
                                <li class="d-flex align-items-center">
                                    <span class="bg-success rounded-circle p-1 me-2"></span>
                                    Delivered
                                </li>
                                <li class="fw-medium text-body-emphasis">$53.00</li>
                            </ul>
                        </td>
                        <td class="fw-medium py-3 d-none d-md-table-cell">
                            May 12, 2024
                            <span class="date d-none">24-05-12</span>
                        </td>
                        <td class="fw-medium py-3 d-none d-md-table-cell">
                            <span class="d-flex align-items-center">
                                <span class="bg-success rounded-circle p-1 me-2"></span>
                                Delivered
                            </span>
                        </td>
                        <td class="fw-medium py-3 d-none d-md-table-cell">
                            $53.00
                            <span class="total d-none">5300</span>
                        </td>
                        <td class="py-3 pe-0">
                            <span class="d-flex align-items-center justify-content-end position-relative gap-1 gap-sm-2 ms-n2 ms-sm-0">
                                <span><img src="assets/img/shop/electronics/thumbs/17.png" width="64" alt="Thumbnail"></span>
                                <a class="btn btn-icon btn-ghost btn-secondary stretched-link border-0" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                                    <i class="ci-chevron-right fs-lg"></i>
                                </a>
                            </span>
                        </td>
                    </tr>

                    <!-- Item -->
                    <tr>
                        <td class="fw-medium pt-2 pb-3 py-md-2 ps-0">
                            <a class="d-inline-block animate-underline text-body-emphasis text-decoration-none py-2" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                                <span class="animate-target">28BA67U0981</span>
                            </a>
                            <ul class="list-unstyled fw-normal text-body m-0 d-md-none">
                                <li>Apr 20, 2024</li>
                                <li class="d-flex align-items-center">
                                    <span class="bg-danger rounded-circle p-1 me-2"></span>
                                    Canceled
                                </li>
                                <li class="fw-medium text-body-emphasis">$1,029.50</li>
                            </ul>
                        </td>
                        <td class="fw-medium py-3 d-none d-md-table-cell">
                            Apr 20, 2024
                            <span class="date d-none">24-04-20</span>
                        </td>
                        <td class="fw-medium py-3 d-none d-md-table-cell">
                            <span class="d-flex align-items-center">
                                <span class="bg-danger rounded-circle p-1 me-2"></span>
                                Canceled
                            </span>
                        </td>
                        <td class="fw-medium py-3 d-none d-md-table-cell">
                            $1,029.50
                            <span class="total d-none">102950</span>
                        </td>
                        <td class="py-3 pe-0">
                            <span class="d-flex align-items-center justify-content-end position-relative gap-1 gap-sm-2 ms-n2 ms-sm-0">
                                <span><img src="assets/img/shop/electronics/thumbs/19.png" width="64" alt="Thumbnail"></span>
                                <span><img src="assets/img/shop/electronics/thumbs/22.png" width="64" alt="Thumbnail"></span>
                                <a class="btn btn-icon btn-ghost btn-secondary stretched-link border-0" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                                    <i class="ci-chevron-right fs-lg"></i>
                                </a>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


        <!-- Pagination -->
        <nav class="pt-3 pb-2 pb-sm-0 mt-2 mt-md-3" aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item active" aria-current="page">
                    <span class="page-link">
                        1
                        <span class="visually-hidden">(current)</span>
                    </span>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">4</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection

@section('helper')
<!-- Order details offcanvas -->
<div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="orderDetails" tabindex="-1" aria-labelledby="orderDetailsLabel" style="width: 500px">

    <!-- Header -->
    <div class="offcanvas-header align-items-start py-3 pt-lg-4">
        <div>
            <h4 class="offcanvas-title mb-1" id="orderDetailsLabel">Order # 78A6431D409</h4>
            <span class="d-flex align-items-center fs-sm fw-medium text-body-emphasis">
                <span class="bg-info rounded-circle p-1 me-2"></span>
                In progress
            </span>
        </div>
        <button type="button" class="btn-close mt-0" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <!-- Body -->
    <div class="offcanvas-body d-flex flex-column gap-4 pt-2 pb-3">

        <!-- Items -->
        <div class="d-flex flex-column gap-3">

            <!-- Item -->
            <div class="d-flex align-items-center">
                <a class="flex-shrink-0" href="shop-product-general-electronics.html">
                    <img src="assets/img/shop/electronics/thumbs/01.png" width="110" alt="Smart Watch">
                </a>
                <div class="w-100 min-w-0 ps-2 ps-sm-3">
                    <h5 class="d-flex animate-underline mb-2">
                        <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-general-electronics.html">Smart Watch Series 7, White</a>
                    </h5>
                    <div class="h6 mb-2">$429.00</div>
                    <div class="fs-xs">Qty: 1</div>
                </div>
            </div>

            <!-- Item -->
            <div class="d-flex align-items-center">
                <a class="flex-shrink-0" href="shop-product-general-electronics.html">
                    <img src="assets/img/shop/electronics/thumbs/08.png" width="110" alt="iPhone 14">
                </a>
                <div class="w-100 min-w-0 ps-2 ps-sm-3">
                    <h5 class="d-flex animate-underline mb-2">
                        <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-general-electronics.html">Apple iPhone 14 128GB White</a>
                    </h5>
                    <div class="h6 mb-2">$899.00</div>
                    <div class="fs-xs">Qty: 1</div>
                </div>
            </div>

            <!-- Item -->
            <div class="d-flex align-items-center">
                <a class="flex-shrink-0" href="shop-product-general-electronics.html">
                    <img src="assets/img/shop/electronics/thumbs/09.png" width="110" alt="iPad Pro">
                </a>
                <div class="w-100 min-w-0 ps-2 ps-sm-3">
                    <h5 class="d-flex animate-underline mb-2">
                        <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-general-electronics.html">Tablet Apple iPad Pro M2</a>
                    </h5>
                    <div class="h6 mb-2">$989.00</div>
                    <div class="fs-xs">Qty: 1</div>
                </div>
            </div>
        </div>


        <!-- Delivery + Payment info -->
        <div class="border-top pt-4">
            <h6>Delivery</h6>
            <ul class="list-unstyled fs-sm mb-4">
                <li class="d-flex justify-content-between mb-1">
                    Estimated delivery date:
                    <span class="text-body-emphasis fw-medium text-end ms-2">Feb 8, 2025 / 10:00 - 12:00</span>
                </li>
                <li class="d-flex justify-content-between mb-1">
                    Shipping method:
                    <span class="text-body-emphasis fw-medium text-end ms-2">Courier delivery</span>
                </li>
                <li class="d-flex justify-content-between">
                    Shipping address:
                    <span class="text-body-emphasis fw-medium text-end ms-2">567 Cherry Lane Apt B12,<br>Harrisburg</span>
                </li>
            </ul>
            <h6>Payment</h6>
            <ul class="list-unstyled fs-sm m-0">
                <li class="d-flex justify-content-between mb-1">
                    Payment method:
                    <span class="text-body-emphasis fw-medium text-end ms-2">Cash on delivery </span>
                </li>
                <li class="d-flex justify-content-between mb-1">
                    Tax collected:
                    <span class="text-body-emphasis fw-medium text-end ms-2">$12.40</span>
                </li>
                <li class="d-flex justify-content-between">
                    Shipping:
                    <span class="text-body-emphasis fw-medium text-end ms-2">$26.50</span>
                </li>
            </ul>
        </div>

        <!-- Total -->
        <div class="d-flex align-items-center justify-content-between fs-sm border-top pt-4">
            Estimated total:
            <span class="h5 text-end ms-2 mb-0">$2,105.90</span>
        </div>
    </div>

    <!-- Footer -->
    <div class="offcanvas-header">
        <a class="btn btn-lg btn-secondary w-100" href="#!">Change the delivery time</a>
    </div>
</div>
@endsection