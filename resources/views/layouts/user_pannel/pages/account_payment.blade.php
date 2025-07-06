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