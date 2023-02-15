<!--plugins-->
<link href="{{ asset('dashboard/plugins/notifications/css/lobibox.min.css') }}" rel="stylesheet" />
<link href="{{ asset('dashboard/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
<link href="{{ asset('dashboard/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
<link href="{{ asset('dashboard/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />

@hasSection('tagsinput')
    <link href="{{ asset('dashboard/plugins/input-tags/css/tagsinput.css') }}" rel="stylesheet" />
@endif

@yield('style')

<!-- Bootstrap CSS -->
<link href="{{ asset('dashboard/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('dashboard/css/bootstrap-extended.css') }}" rel="stylesheet" />
<link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet" />
<link href="{{ asset('dashboard/css/icons.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

<!-- loader-->
<link href="{{ asset('dashboard/css/pace.min.css') }}" rel="stylesheet" />

<!--Theme Styles-->
<link href="{{ asset('dashboard/css/dark-theme.css') }}" rel="stylesheet" />
<link href="{{ asset('dashboard/css/light-theme.css') }}" rel="stylesheet" />
<link href="{{ asset('dashboard/css/semi-dark.css') }}" rel="stylesheet" />
<link href="{{ asset('dashboard/css/header-colors.css') }}" rel="stylesheet" />
