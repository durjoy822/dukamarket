@include('admin.layout.head')
<div class="mx-3 mx-lg-0">
    <div class="card my-5 col-xl-9 col-xxl-8 mx-auto rounded-4 overflow-hidden border-3 p-3">
        <div class="row g-3 align-items-center">
            <div class="col-lg-6 d-flex">
                <div class="card-body p-5 w-100">
                    <img src="{{asset('admin')}}/assets/images/logo-icon.png" class="mb-4" width="45" alt="">
                    <h4 class="fw-bold">Forgot Password?</h4>
                    <p class="mb-0">Enter your registered email ID to reset the password</p>

                    <div class="form-body mt-4">
                        <form class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Email id</label>
                                <input type="text" class="form-control" placeholder="example@user.com">
                            </div>
                            <div class="col-12">
                                <div class="d-grid gap-2">
                                    <button type="button" class="btn btn-primary">Send</button>
                                    <a href="auth-boxed-login.html" class="btn btn-light">Back to Login</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 d-lg-flex d-none">
                <div class="p-3 rounded-4 w-100 d-flex align-items-center justify-content-center border-3 bg-primary">
                    <img src="{{asset('admin')}}/assets/images/boxed-forgot-password.png" class="img-fluid" alt="">
                </div>
            </div>

        </div><!--end row-->
    </div>

</div>
@include('admin.layout.script')
