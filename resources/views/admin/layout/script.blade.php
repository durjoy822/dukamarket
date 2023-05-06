<script src="{{asset('admin')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('admin')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="{{asset('admin')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="{{asset('admin')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{asset('admin')}}/assets/plugins/apex/apexcharts.min.js"></script>
<script src="{{asset('admin')}}/assets/js/index.js"></script>
<!--BS Scripts-->
<script src="{{asset('admin')}}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('admin')}}/assets/js/main.js"></script>
<!--data-table -->
<script src="{{asset('admin')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{asset('admin')}}/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
{{--toster--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Mirrored from wphix.com/template/dukamarket/dukamarket/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Apr 2023 12:12:56 GMT -->

{{--smart editor --}}
{{--<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>--}}
{{--<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>--}}

{{--toster code  --}}
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


{{--login-eye on off script--}}
<script>
    $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("fa-solid fa-eye-slash");
                $('#show_hide_password i').removeClass("bi-eye-fill");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("fa-solid fa-eye");
                $('#show_hide_password i').addClass("bi-eye-fill");
            }
        });
    });
</script>

