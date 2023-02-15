<header class="header-default">
    <nav class="navbar navbar-expand-lg">
        <div class="container-xl">
            <!-- site logo -->
            <a class="navbar-brand" href="index.html"><img src="{{ asset('katenTheme/images/logo.svg') }}" alt="logo" /></a> 

            <div class="collapse navbar-collapse">
                <!-- menus -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('katen.home') }}">Home</a>
                    </li>
                    @foreach ($blog_categories as $category)
                    <li class="nav-item">
                        <a class="nav-link" href="category.html">{{ $category->title }}</a>
                    </li>
                    @endforeach
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index.html">Home</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.html">Magazine</a></li>
                            <li><a class="dropdown-item" href="personal.html">Personal</a></li>
                            <li><a class="dropdown-item" href="personal-alt.html">Personal Alt</a></li>
                            <li><a class="dropdown-item" href="minimal.html">Minimal</a></li>
                            <li><a class="dropdown-item" href="classic.html">Classic</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </div>

            <!-- header right section -->
            <div class="header-right">
                <!-- social icons -->
                {{-- <ul class="social-icons list-unstyled list-inline mb-0">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul> --}}
                <!-- header buttons -->
                <div class="header-buttons">
                    {{-- <button class="search icon-button">
                        <i class="icon-magnifier"></i>
                    </button> --}}
                    <button class="burger-menu icon-button">
                        <span class="burger-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- canvas menu -->
<div class="canvas-menu d-flex align-items-end flex-column">
	<!-- close button -->
	<button type="button" class="btn-close" aria-label="Close"></button>

	<!-- logo -->
	<div class="logo">
		<img src="{{ asset('katenTheme/images/logo.svg') }}" alt="Katen" />
	</div>

	<!-- menu -->
	<nav>
		<ul class="vertical-menu">
			<li class="active">
				<a href="index.html">Home</a>
				<ul class="submenu">
					<li><a href="index.html">Magazine</a></li>
					<li><a href="personal.html">Personal</a></li>
					<li><a href="personal-alt.html">Personal Alt</a></li>
					<li><a href="minimal.html">Minimal</a></li>
					<li><a href="classic.html">Classic</a></li>
				</ul>
			</li>
			<li><a href="category.html">Lifestyle</a></li>
			<li><a href="category.html">Inspiration</a></li>
			<li>
				<a href="#">Pages</a>
				<ul class="submenu">
					<li><a href="category.html">Category</a></li>
					<li><a href="blog-single.html">Blog Single</a></li>
					<li><a href="blog-single-alt.html">Blog Single Alt</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
	</nav>

	<!-- social icons -->
	<ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
		<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
	</ul>
</div>
