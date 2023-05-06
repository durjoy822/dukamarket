<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from wphix.com/template/dukamarket/dukamarket/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Apr 2023 12:12:33 GMT -->
@include('home.layout.head')

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

{{--Preloader--}}
@include('home.layout.preloader')


<!-- back to top start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- back to top end -->

{{--Header--}}
@include('home.layout.header')


<!-- offcanvas area start -->
<div class="offcanvas__area">
    <div class="offcanvas__wrapper">
        <div class="offcanvas__close">
            <button class="offcanvas__close-btn" id="offcanvas__close-btn">
                <i class="fal fa-times"></i>
            </button>
        </div>
        <div class="offcanvas__content">
            <div class="offcanvas__logo mb-40">
                <a href="index.html">
                    <img src="{{'frontend'}}/assets/img/logo/logo-white.png" alt="logo">
                </a>
            </div>
            <div class="offcanvas__search mb-25">
                <form action="#">
                    <input type="text" placeholder="What are you searching for?">
                    <button type="submit" ><i class="far fa-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu fix"></div>
            <div class="offcanvas__action">

            </div>
        </div>
    </div>
</div>
<!-- offcanvas area end -->
<div class="body-overlay"></div>
<!-- offcanvas area end -->

<main>
    @yield('body')

{{--Shop-modal --}}
    @include('home.layout.shop-modal')

</main>
{{--Footer --}}
@include('home.layout.footer')
{{--Script--}}
@include('home.layout.script')

</body>

</html>


