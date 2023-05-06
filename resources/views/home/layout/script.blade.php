<!-- JS here -->
<script src="{{asset('frontend')}}/assets/js/vendor/jquery.js"></script>
<script src="{{asset('frontend')}}/assets/js/vendor/waypoints.js"></script>
<script src="{{asset('frontend')}}/assets/js/bootstrap-bundle.js"></script>
<script src="{{asset('frontend')}}/assets/js/meanmenu.js"></script>
<script src="{{asset('frontend')}}/assets/js/swiper-bundle.js"></script>
<script src="{{asset('frontend')}}/assets/js/tweenmax.js"></script>
<script src="{{asset('frontend')}}/assets/js/owl-carousel.js"></script>
<script src="{{asset('frontend')}}/assets/js/magnific-popup.js"></script>
<script src="{{asset('frontend')}}/assets/js/parallax.js"></script>
<script src="{{asset('frontend')}}/assets/js/backtotop.js"></script>
<script src="{{asset('frontend')}}/assets/js/nice-select.js"></script>
<script src="{{asset('frontend')}}/assets/js/countdown.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/counterup.js"></script>
<script src="{{asset('frontend')}}/assets/js/wow.js"></script>
<script src="{{asset('frontend')}}/assets/js/isotope-pkgd.js"></script>
<script src="{{asset('frontend')}}/assets/js/imagesloaded-pkgd.js"></script>
<script src="{{asset('frontend')}}/assets/js/ajax-form.js"></script>
<script src="{{asset('frontend')}}/assets/js/main.js"></script>
{{--toster--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    @if(Session::has('success'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session('success') }}");
    @endif
        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.warning("{{ session('warning') }}");
    @endif
</script>

