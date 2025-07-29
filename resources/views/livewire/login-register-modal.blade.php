<div class="modal fade" id="loginRegisterModal" tabindex="-1" role="dialog" wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content row row-cols-1 row-cols-lg-2 flex-row g-0 overflow-hidden">
            <div class="col order-lg-2">
                <div class="position-relative d-flex align-items-end h-100 pt-4 px-4 px-sm-5 px-lg-0">
                    <button type="button" class="btn-close position-absolute top-0 end-0 z-2 mt-3 me-3"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="ratio position-relative z-1" style="--cz-aspect-ratio: calc(1030 / 1032 * 100%)">
                        <img src="assets/img/account/cover.png" alt="Girl">
                    </div>
                    <span class="position-absolute top-0 start-0 w-100 h-100 d-none-dark"
                        style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)"></span>
                    <span class="position-absolute top-0 start-0 w-100 h-100 d-none d-block-dark"
                        style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)"></span>
                </div>
            </div>

            <div class="col d-flex flex-column order-lg-1">
                <div class="modal-header d-block border-0 pt-sm-5 px-sm-5 pb-2">
                  <ul class="nav nav-tabs mt-sm-n2" role="tablist">
    <li class="nav-item" role="presentation">
        <a href="#" class="nav-link text-nowrap @if($activeTab === 'login') active @endif"
           wire:click.prevent="$set('activeTab', 'login')">
            <i class="ci-log-in fs-base opacity-75 ms-n1 me-2"></i>
            Sign in
        </a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="#" class="nav-link text-nowrap @if($activeTab === 'signup') active @endif"
           wire:click.prevent="$set('activeTab', 'signup')">
            <i class="ci-user fs-base opacity-75 ms-n1 me-2"></i>
            Sign up
        </a>
    </li>
</ul>

                </div>

                <div class="modal-body tab-content px-sm-5 pb-sm-5">

                    <!-- Sign In Tab -->
                    <div class="tab-pane fade show @if($activeTab === 'login') show active @endif" id="signin" role="tabpanel">
                        <h2 class="h5 mb-4">Welcome back</h2>

                        @if (session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif

                        <form wire:submit.prevent="login">
                            <div class="position-relative mb-4">
                                <input type="email" class="form-control" placeholder="Email"
                                    wire:model.defer="login_email" required autofocus>
                                @error('login_email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <div class="password-toggle">
                                    <input type="password" class="form-control"
                                        placeholder="Password" wire:model.defer="login_password" required>
                                    <label class="password-toggle-button fs-lg" aria-label="Show/hide password">
                                        <input type="checkbox" class="btn-check">
                                    </label>
                                </div>
                                @error('login_password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-check mb-4">
                                <input type="checkbox" class="form-check-input" id="remember-30" wire:model="remember">
                                <label for="remember-30" class="form-check-label">Remember for 30 days</label>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Sign In</button>
                        </form>
                    </div>

                    <!-- Sign Up Tab -->
                    <div class="tab-pane fade @if($activeTab === 'signup') show active @endif" id="signup" role="tabpanel">
                        <h2 class="h5">Create an account</h2>

                        <form wire:submit.prevent="register">
                            <div class="position-relative mb-3">
                                <label for="register-name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="register-name"
                                    wire:model.defer="name" required>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="position-relative mb-3">
                                <label for="register-email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="register-email"
                                    wire:model.defer="email" required>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="register-password" class="form-label">Password</label>
                                <div class="password-toggle">
                                    <input type="password" class="form-control" id="register-password"
                                        wire:model.defer="password" minlength="8" placeholder="Minimum 8 characters"
                                        required>
                                    <label class="password-toggle-button fs-lg" aria-label="Show/hide password">
                                        <input type="checkbox" class="btn-check">
                                    </label>
                                </div>
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="register-password-confirm" class="form-label">Confirm Password</label>
                                <div class="password-toggle">
                                    <input type="password" class="form-control"
                                        id="register-password-confirm" wire:model.defer="password_confirmation"
                                        minlength="8" placeholder="Confirm password" required>
                                    <label class="password-toggle-button fs-lg" aria-label="Show/hide password">
                                        <input type="checkbox" class="btn-check">
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Create an account</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
