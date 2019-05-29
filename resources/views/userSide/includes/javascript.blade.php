<script src="{{asset('userSide/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('userSide/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('userSide/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('userSide/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('userSide/plugins/easing/easing.js')}}"></script>
<script src="{{ asset('js/toastr.js') }}"></script>

<script>
    toastr.options.closeButton = true;
    @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}");
    @endif

    @if(Session::has('info'))
    toastr.info("{{Session::get('info')}}");
    @endif

    @if(Session::has('error'))
    toastr.error("{{Session::get('error')}}");
    @endif

    @if(Session::has('warning'))
    toastr.info("{{Session::get('warning')}}");
    @endif

</script>
@yield('scripts')