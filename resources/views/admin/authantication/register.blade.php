@include('admin.layout.head')
<div class="section-authentication-cover">
    <div class="">
        <div class="row g-0">

            <div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex bg-primary">

                <div class="card rounded-0 mb-0 border-0 bg-transparent">
                    <div class="card-body">
                        <img src="assets/images/boxed-register.png" class="img-fluid auth-img-cover-login" width="650"
                             alt="">
                    </div>
                </div>

            </div>

            <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
                <div class="card rounded-0 m-3 border-0">
                    <div class="card-body p-sm-5">
                        <img src="assets/images/logo-icon.png" class="mb-4" width="45" alt="">
                        <h4 class="fw-bold">Get Started Now</h4>
                        <p class="mb-0">Enter your credentials to create your account</p>

                        <div class="row g-3 my-4">
                            <div class="col-12 col-lg-6">
                                <button class="btn btn-light py-2 border-3 font-text1 fw-bold d-flex align-items-center justify-content-center w-100"><img src="assets/images/icons/google-2.png" width="18" class="me-2" alt="">Sign Up with Google</button>
                            </div>
                            <div class="col col-lg-6">
                                <button class="btn btn-light py-2 border-3 font-text1 fw-bold d-flex align-items-center justify-content-center w-100"><img src="assets/images/icons/apple-logo.png" width="18" class="me-2" alt="">Sign Up with Apple</button>
                            </div>
                        </div>

                        <div class="separator section-padding">
                            <div class="line"></div>
                            <p class="mb-0 fw-bold">OR</p>
                            <div class="line"></div>
                        </div>

                        <div class="form-body mt-4">
                            <form  action="{{route('admin.new')}}" method="post" class="row g-3">@csrf
                                <div class="col-12">
                                    <label for="inputUsername" class="form-label">Username</label>
                                    <input type="text" class="form-control border-3" name="name" id="inputUsername" placeholder="User name">
                                    <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                </div>
                                <div class="col-12">
                                    <label for="inputEmailAddress" class="form-label">Email Address</label>
                                    <input type="email"  name="email" class="form-control border-3" id="inputEmailAddress" placeholder="example@user.com">
                                    <span class="text-danger">@error('email'){{$message}}@enderror</span>

                                </div>
                                <div class="col-12">
                                    <label for="inputChoosePassword" class="form-label">Password</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input type="password" name="password" class="form-control border-end-0 border-3" id="inputChoosePassword" value="12345678" placeholder="Enter Password">
                                        <a href="javascript:;" class="input-group-text bg-transparent border-3"><i class="bi bi-eye-slash-fill"></i></a>
                                    </div>
                                    <div class="text-danger">@error('password'){{$message}}@enderror</div>
                                </div>
{{--                                <div class="col-12">--}}
{{--                                    <div class="form-check form-switch border-3">--}}
{{--                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">--}}
{{--                                        <label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms &amp; Conditions</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary border-3">Register</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-start">
                                        <p class="mb-0">Already have an account? <a href="{{route('admin.login')}}">Sign in here</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!--end row-->
    </div>
</div>
@include('admin.layout.script')
