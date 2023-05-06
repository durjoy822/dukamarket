@include('home.layout.head')
@include('home.layout.header')
<main>
    <div class="card border">
        <div class="card-headert  mt-2">
            <h2 class="text-center">Login/Regiester</h2>
            <hr>
            <div class="card-body">
                <div class="container">
                    <div class="row offset-1" >
                        <div class="col-lg-5">
                            <div class="basic-login mb-50">
                                <h5>Login</h5>
                                <form action="{{route('buyer.login.auth')}}" method="post">@csrf
                                    <label for="email"> email address  <span>*</span></label>
                                    <input id="email" name="email" type="text" placeholder="Enter Username">
                                    <div class="text-danger">@error('email'){{$message}} @enderror </div>
                                    <label for="pass">Password <span>*</span></label>
                                    <input id="pass" name="password" type="password" placeholder="Enter password...">
                                    <div class="text-danger">@error('password'){{$message}} @enderror </div>
                                    <div class="login-action mb-10 fix">
                                    <span class="log-rem f-left">
                                       <input id="remember" type="checkbox">
                                       <label for="remember">Remember me</label>
                                    </span>
                                        <span class="forgot-login f-right">
                                       <a href="#">Lost your password?</a>
                                    </span>
                                    </div>
                                    <button type="submit" class="tp-in-btn w-100">log in</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="basic-login">
                                <h5>Register</h5>
                                <form action="{{route('buyer.store')}}" method="post">@csrf
                                    <label for="username">Username <span>*</span></label>
                                    <input style="margin-bottom: 0px" id="username" name="name" type="text" placeholder="Enter Username">
                                    <div class="text-danger">@error('name'){{$message}} @enderror </div>
                                    <label for="email-id">Email Address <span>*</span></label>
                                    <input style="margin-bottom: 0px" id="email-id" name="email" type="text" placeholder="Email address...">
                                    <div class="text-danger">@error('email'){{$message}} @enderror </div>
                                    <label for="userpass">Password <span>*</span></label>
                                    <input id="userpass" style="margin-bottom: 0px" name="password" type="password" placeholder="Enter password...">
                                    <div class="text-danger">@error('password'){{$message}} @enderror </div><br>
                                    <button type="submit"  class="tp-in-btn w-100">Register</button>
                                </form>
                            </div>
                        </div>
                    </div >
                </div>
            </div>
        </div>
    </div>
</main>
@include('home.layout.footer')
@include('home.layout.script')
