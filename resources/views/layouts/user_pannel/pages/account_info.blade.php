@extends('layouts.user_pannel.account')

@section('user_pannel_content')
<div class="col-lg-9">
    <div class="ps-lg-3 ps-xl-0">

        <!-- Page title -->
        <h1 class="h2 mb-1 mb-sm-2">Personal info</h1>

        <!-- Basic info -->
        <div class="border-bottom py-4">
            <div class="nav flex-nowrap align-items-center justify-content-between pb-1 mb-3">
                <h2 class="h6 mb-0">Basic info</h2>
                <a class="nav-link hiding-collapse-toggle text-decoration-underline p-0 collapsed" href="-4.html" data-bs-toggle="collapse" aria-expanded="false" aria-controls="basicInfoPreview basicInfoEdit">Edit</a>
            </div>
            <div class="collapse basic-info show" id="basicInfoPreview">
                <ul class="list-unstyled fs-sm m-0">
                    <li>Susan Gardner</li>
                    <li>May 12, 1996</li>
                    <li>English</li>
                </ul>
            </div>
            <div class="collapse basic-info" id="basicInfoEdit">
                <form class="row g-3 g-sm-4 needs-validation" novalidate="">
                    <div class="col-sm-6">
                        <label for="fn" class="form-label">First name</label>
                        <div class="position-relative">
                            <input type="text" class="form-control" id="fn" value="Susan" required="">
                            <div class="invalid-feedback">Please enter your first name!</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="ln" class="form-label">Last name</label>
                        <div class="position-relative">
                            <input type="text" class="form-control" id="ln" value="Gardner" required="">
                            <div class="invalid-feedback">Please enter your last name!</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="birthdate" class="form-label">Date of birth</label>
                        <div class="position-relative">
                            <input type="text" class="form-control form-icon-end" id="birthdate" data-datepicker="{
                          &quot;dateFormat&quot;: &quot;F j, Y&quot;,
                          &quot;defaultDate&quot;: &quot;May 15, 1996&quot;
                        }" placeholder="Choose date">
                            <i class="ci-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label">Language</label>
                        <select class="form-select" data-select="{
                        &quot;placeholderValue&quot;: &quot;Select language&quot;,
                        &quot;choices&quot;: [
                          {
                            &quot;value&quot;: &quot;&quot;,
                            &quot;label&quot;: &quot;Select language&quot;,
                            &quot;placeholder&quot;: true
                          },
                          {
                            &quot;value&quot;: &quot;English&quot;,
                            &quot;label&quot;: &quot;<div class=\&quot;d-flex align-items-center\&quot;><img src=_assets/img/flags/en-us.png/_.html class=\&quot;flex-shrink-0 me-2\&quot; width=\&quot;20\&quot; alt=\&quot;English\&quot;> English</div>&quot;,
                            &quot;selected&quot;: true
                          },
                          {
                            &quot;value&quot;: &quot;Français&quot;,
                            &quot;label&quot;: &quot;<div class=\&quot;d-flex align-items-center\&quot;><img src=_assets/img/flags/fr.png/_.html class=\&quot;flex-shrink-0 me-2\&quot; width=\&quot;20\&quot; alt=\&quot;Français\&quot;> Français</div>&quot;
                          },
                          {
                            &quot;value&quot;: &quot;Deutsch&quot;,
                            &quot;label&quot;: &quot;<div class=\&quot;d-flex align-items-center\&quot;><img src=_assets/img/flags/de.png/_.html class=\&quot;flex-shrink-0 me-2\&quot; width=\&quot;20\&quot; alt=\&quot;Deutsch\&quot;> Deutsch</div>&quot;
                          },
                          {
                            &quot;value&quot;: &quot;Italiano&quot;,
                            &quot;label&quot;: &quot;<div class=\&quot;d-flex align-items-center\&quot;><img src=_assets/img/flags/it.png/_.html class=\&quot;flex-shrink-0 me-2\&quot; width=\&quot;20\&quot; alt=\&quot;Italiano\&quot;> Italiano</div>&quot;
                          }
                        ]
                      }" data-select-template="true"></select>
                    </div>
                    <div class="col-12">
                        <div class="d-flex gap-3 pt-2 pt-sm-0">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="collapse" data-bs-target=".basic-info" aria-expanded="true" aria-controls="basicInfoPreview basicInfoEdit">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Contact -->
        <div class="border-bottom py-4">
            <div class="nav flex-nowrap align-items-center justify-content-between pb-1 mb-3">
                <div class="d-flex align-items-center gap-3 me-4">
                    <h2 class="h6 mb-0">Contact</h2>
                </div>
                <a class="nav-link hiding-collapse-toggle text-decoration-underline p-0 collapsed" href="-5.html" data-bs-toggle="collapse" aria-expanded="false" aria-controls="contactInfoPreview contactInfoEdit">Edit</a>
            </div>
            <div class="collapse contact-info show" id="contactInfoPreview">
                <ul class="list-unstyled fs-sm m-0">
                    <li class="mb-1">susan.gardner@email.com</li>
                    <li>+1 (805) 348 95 72 <span class="text-success ms-1">Verified</span></li>
                </ul>
            </div>
            <div class="collapse contact-info" id="contactInfoEdit">
                <form class="row g-3 g-sm-4 needs-validation" novalidate="">
                    <div class="col-sm-6">
                        <label for="email" class="form-label">Email address</label>
                        <div class="position-relative">
                            <input type="email" class="form-control" id="email" value="susan.gardner@email.com" required="">
                            <div class="invalid-feedback">Please enter a valid email address!</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="phone" class="form-label">Phone number</label>
                        <div class="position-relative">
                            <input type="text" class="form-control" id="phone" data-input-format="{&quot;numericOnly&quot;: true, &quot;delimiters&quot;: [&quot;+1 (&quot;, &quot;)&quot;, &quot; &quot;], &quot;blocks&quot;: [0, 3, 0, 3, 2, 2]}" placeholder="+1 (___) ___ __ __" value="+1 (805) 348 95 72" required="">
                            <div class="invalid-feedback">Please enter your phone number!</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex gap-3 pt-2 pt-sm-0">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="collapse" data-bs-target=".contact-info" aria-expanded="true" aria-controls="contactInfoPreview contactInfoEdit">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Password -->
        <div class="border-bottom py-4">
            <div class="nav flex-nowrap align-items-center justify-content-between pb-1 mb-3">
                <div class="d-flex align-items-center gap-3 me-4">
                    <h2 class="h6 mb-0">Password</h2>
                </div>
                <a class="nav-link hiding-collapse-toggle text-decoration-underline p-0 collapsed" href="-6.html" data-bs-toggle="collapse" aria-expanded="false" aria-controls="passChangePreview passChangeEdit">Edit</a>
            </div>
            <div class="collapse password-change show" id="passChangePreview">
                <ul class="list-unstyled fs-sm m-0">
                    <li>**************</li>
                </ul>
            </div>
            <div class="collapse password-change" id="passChangeEdit">
                <form class="row g-3 g-sm-4 needs-validation" novalidate="">
                    <div class="col-sm-6">
                        <label for="current-password" class="form-label">Current password</label>
                        <div class="password-toggle">
                            <input type="password" class="form-control" id="current-password" placeholder="Enter your current password" required="">
                            <label class="password-toggle-button" aria-label="Show/hide password">
                                <input type="checkbox" class="btn-check">
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="new-password" class="form-label">New password</label>
                        <div class="password-toggle">
                            <input type="password" class="form-control" id="new-password" placeholder="Create new password" required="">
                            <label class="password-toggle-button" aria-label="Show/hide password">
                                <input type="checkbox" class="btn-check">
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex gap-3 pt-2 pt-sm-0">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="collapse" data-bs-target=".password-change" aria-expanded="true" aria-controls="passChangePreview passChangeEdit">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Delete account -->
        <div class="pt-3 mt-2 mt-sm-3">
            <h2 class="h6">Delete account</h2>
            <p class="fs-sm">When you delete your account, your public profile will be deactivated immediately. If you change your mind before the 14 days are up, sign in with your email and password, and we'll send you a link to reactivate your account.</p>
            <a class="text-danger fs-sm fw-medium" href="#!">Delete account</a>
        </div>
    </div>
</div>
@endsection