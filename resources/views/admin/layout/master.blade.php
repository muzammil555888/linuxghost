<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="semi-dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('dashboard/images/favicon-32x32.png') }}" type="image/png') }}" />

    @include('admin.partial.style ')

    <title>Admin Dashboard</title>
</head>

<body>
    <div class="wrapper">
        @include('admin.partial.top-header')

        @include('admin.partial.sidebar')

        <main class="page-content">

            @yield('content')
        </main>

        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
    </div>

    @include('admin.partial.script')

    @include('admin.partial.message')
</body>

</html>
