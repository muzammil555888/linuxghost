<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Katen - Minimal Blog & Magazine</title>
    <meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('katenTheme/images/favicon.png') }}">

    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('katenTheme/css/bootstrap.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('katenTheme/css/all.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('katenTheme/css/slick.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('katenTheme/css/simple-line-icons.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('katenTheme/css/style.css') }}" type="text/css" media="all">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- preloader -->
    {{-- <div id="preloader">
	<div class="book">
		<div class="inner">
			<div class="left"></div>
			<div class="middle"></div>
			<div class="right"></div>
		</div>
		<ul>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</div> --}}

    <!-- site wrapper -->
    <div class="site-wrapper">

        <div class="main-overlay"></div>

        @include('katen::partial.navbar')

        @include('katen::partial.hero')

        <section class="main-content">
            @yield('content')
        </section>

        @include('katen::partial.footer')

    </div><!-- end site wrapper -->

    <!-- JAVA SCRIPTS -->
    <script src="{{ asset('katenTheme/js/jquery.min.js') }}"></script>
    <script src="{{ asset('katenTheme/js/popper.min.js') }}"></script>
    <script src="{{ asset('katenTheme/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('katenTheme/js/slick.min.js') }}"></script>
    <script src="{{ asset('katenTheme/js/jquery.sticky-sidebar.min.js') }}"></script>
    <script src="{{ asset('katenTheme/js/custom.js') }}"></script>

</body>

</html>
