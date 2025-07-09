@extends('layouts.user_pannel.account')

@section('user_pannel_content')
<div class="col-lg-9">
    <div class="ps-lg-3 ps-xl-0">

        <!-- Page title -->
        <h1 class="h2 pb-2 pb-md-3">Payment methods</h1>

        <!-- Payment methods (Grid) -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 g-md-4 g-lg-3 g-xl-4">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body pb-3">
                        <div class="d-flex align-items-start justify-content-between mb-4">
                            <img src="assets/img/payment-methods/mastercard.svg" class="m-n3" width="100" alt="Mastercard">
                            <span class="badge text-bg-info rounded-pill">Primary</span>
                        </div>
                        <div class="h6 mb-1">**** **** **** 8341</div>
                        <div class="text-danger fs-xs">Expired 05/24</div>
                    </div>
                    <div class="card-footer d-flex gap-3 bg-transparent border-0 pt-0 pb-4">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Remove</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body pb-3">
                        <div class="d-flex align-items-start justify-content-between mb-4">
                            <img src="assets/img/payment-methods/visa-light-mode.svg" class="d-none-dark m-n3" width="100" alt="Visa">
                            <img src="assets/img/payment-methods/visa-dark-mode.svg" class="d-none d-block-dark m-n3" width="100" alt="Visa">
                            <div class="nav animate-underline">
                                <a class="nav-link animate-target fs-xs p-0" href="#!">Set as primary</a>
                            </div>
                        </div>
                        <div class="h6 mb-1">**** **** **** 1276</div>
                        <div class="text-body fs-xs">Expiration 01/27</div>
                    </div>
                    <div class="card-footer d-flex gap-3 bg-transparent border-0 pt-0 pb-4">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Remove</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 h-100">
                    <span class="position-absolute top-0 start-0 w-100 h-100 border border-dashed border-secondary border-opacity-25 rounded d-none-dark"></span>
                    <span class="position-absolute top-0 start-0 w-100 h-100 border border-dashed border-light border-opacity-25 rounded d-none d-block-dark"></span>
                    <div class="card-body position-relative z-2 nav align-items-center justify-content-center py-5">
                        <a class="nav-link animate-underline stretched-link min-w-0 fs-base px-0" href="#addPaymentModal" data-bs-toggle="modal">
                            <i class="ci-plus fs-lg ms-n2 me-2"></i>
                            <span class="animate-target text-truncate">Add payment method</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('helper')
<!-- Add payment method modal -->
<div class="modal fade" id="addPaymentModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="addPaymentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPaymentModalLabel">Add new payment method</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs mb-3" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" id="card-tab" data-bs-toggle="tab" data-bs-target="#card-tab-pane" role="tab" aria-controls="card-tab-pane" aria-selected="true">
                            <i class="ci-credit-card fs-base opacity-75 ms-n2 me-2"></i>
                            Card
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" id="paypal-tab" data-bs-toggle="tab" data-bs-target="#paypal-tab-pane" role="tab" aria-controls="paypal-tab-pane" aria-selected="false">
                            <img src="assets/img/payment-methods/paypal-icon.svg" class="me-2" width="14" alt="PayPal">
                            PayPal
                        </button>
                    </li>
                </ul>

                <div class="tab-content">

                    <!-- Card tab -->
                    <div class="tab-pane fade show active" id="card-tab-pane" role="tabpanel" aria-labelledby="card-tab">
                        <form class="needs-validation" novalidate="">
                            <div class="mb-3">
                                <label for="card-number" class="form-label">Card number</label>
                                <div class="position-relative" data-input-format="{&quot;creditCard&quot;: true}">
                                    <input type="text" class="form-control form-icon-end" id="card-number" style="background-image: none" placeholder="XXXX XXXX XXXX XXXX" required="">
                                    <span class="position-absolute d-flex top-50 end-0 translate-middle-y fs-5 text-body-tertiary me-3" data-card-icon=""></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="card-name" class="form-label">Name on card</label>
                                <input type="text" class="form-control" id="card-name" placeholder="Full name" required="">
                            </div>
                            <div class="row mb-4">
                                <div class="col-7">
                                    <label for="card-expiration" class="form-label">Expiration date</label>
                                    <input type="text" class="form-control" id="card-expiration" data-input-format="{&quot;date&quot;: true, &quot;datePattern&quot;: [&quot;m&quot;, &quot;y&quot;]}" placeholder="MM/YY" required="">
                                </div>
                                <div class="col-5">
                                    <label for="card-cvc" class="form-label">CVC</label>
                                    <input type="text" class="form-control" id="card-cvc" data-input-format="{&quot;numericOnly&quot;: true, &quot;blocks&quot;: [3]}" placeholder="XXX" required="">
                                </div>
                            </div>
                            <div class="d-flex gap-3">
                                <button type="reset" class="btn btn-secondary w-100" data-bs-dismiss="modal" data-bs-target="#addPaymentModal">Cancel</button>
                                <button type="submit" class="btn btn-primary w-100">Add card</button>
                            </div>
                        </form>
                    </div>

                    <!-- PayPal tab -->
                    <div class="tab-pane fade" id="paypal-tab-pane" role="tabpanel" aria-labelledby="paypal-tab">
                        <form class="needs-validation" novalidate="">
                            <div class="mb-4">
                                <label for="paypal-email" class="form-label">Email associated with PayPal</label>
                                <input type="email" class="form-control" id="paypal-email" placeholder="Email address" required="">
                                <div class="invalid-feedback">Please provide a valid email address!</div>
                            </div>
                            <div class="d-flex gap-3">
                                <button type="reset" class="btn btn-secondary w-100" data-bs-dismiss="modal" data-bs-target="#addPaymentModal">Cancel</button>
                                <button type="submit" class="btn btn-primary w-100">Continue</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection