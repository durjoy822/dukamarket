@include('admin.layout.head')
<div class="section-authentication-cover">
    <div class="">
        <div class="row g-0">

            <div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex bg-primary">

                <div class="card rounded-0 mb-0 border-0 bg-transparent">
                    <div class="card-body">
                        <img src="assets/images/boxed-login.png" class="img-fluid auth-img-cover-login" width="650"
                             alt="">
                    </div>
                </div>

            </div>

            <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
                <div class="card rounded-0 m-3 mb-0 border-0">
                    <div class="card-body p-sm-5">
                        <img src="assets/images/logo-icon.png" class="mb-4" width="45" alt="">
                        <h4 class="fw-bold">Get Started Now</h4>
                        <p class="mb-0">Enter your credentials to login your account</p>
                        <div class="separator section-padding">
                            <div class="line"></div>
                            <p class="mb-0 fw-bold"><i class="fa-solid fa-ellipsis" style="font-size: 24px"></i></p>
                            <div class="line"></div>
                        </div>

                        <div class="form-body mt-4">
                            <form action="{{route('admin.auth')}}" method="post" class="row g-3">
                                @csrf
                                <div class="col-12">
                                    <label for="inputEmailAddress" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control  border-3" id="inputEmailAddress" placeholder="jhon@example.com">
                                </div>
                                <div class="col-12">
                                    <label for="inputChoosePassword" class="form-label">Password</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input type="password" name="password" class="form-control border-end-0  border-3" id="inputChoosePassword" value="12345678" placeholder="Enter Password">
                                        <a href="javascript:;" class="input-group-text bg-transparent  border-3"><i class="fa-solid fa-eye-slash"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-switch  border-3">
                                        <input class="form-check-input" name="remember" type="checkbox" id="flexSwitchCheckChecked">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">	<a href="{{route('admin.forgot')}}">Forgot Password ?</a>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn  border-3 btn-primary">Login</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-start">
                                        <p class="mb-0">Don't have an account yet? <a href="{{URL::to('/admin/register')}}">Sign up here</a>
                                        </p>
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

