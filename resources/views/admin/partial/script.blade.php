<!-- Bootstrap bundle JS -->
<script src="{{ asset('dashboard/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins-->
<script src="{{ asset('dashboard/js/jquery.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('dashboard/plugins/notifications/js/lobibox.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/notifications/js/notifications.min.js') }}"></script>
<script src="{{ asset('dashboard/js/pace.min.js') }}"></script>

@hasSection('tagsinput')
    <script src="{{ asset('dashboard/plugins/input-tags/js/tagsinput.js') }}"></script>
@endif

@yield('script')

<!--app-->
<script src="{{ asset('dashboard/js/app.js') }}"></script>