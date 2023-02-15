<section id="hero">
    <div class="container-xl">
        <div class="row gy-4">
            <div class="col-lg-8">
                <!-- featured post large -->
                @isset($featured_post)
                <div class="post featured-post-lg">
                    <div class="details clearfix">
                        <a href="category.html" class="category-badge">Inspiration</a>
                        <h2 class="post-title"><a href="blog-single.html">{{ $featured_post->title }}</a></h2>
                        <ul class="meta list-inline mb-0">
                            <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                            <li class="list-inline-item">{{ $featured_post->created_at->diffForHumans() }}</li>
                        </ul>
                    </div>
                    <a href="blog-single.html">
                        <div class="thumb rounded">
                            <div class="inner data-bg-image"
                                data-bg-image="{{ asset('katenTheme/images/posts/featured-lg.jpg') }}"></div>
                        </div>
                    </a>
                </div>
                @endisset
            </div>

            <div class="col-lg-4">
                <!-- post tabs -->
                <div class="widget rounded">
                    <div class="widget-header text-center">
                        <h3 class="widget-title">Latest Posts</h3>
                    </div>
                    <div class="widget-content">
                        @foreach ($latest_posts as $post)
                        <div class="post post-list-sm circle">
                            <div class="thumb circle">
                                <a href="blog-single.html">
                                    <div class="inner">
                                        <img src="{{ asset('katenTheme/images/posts/tabs-1.jpg') }}" alt="post-title" />
                                    </div>
                                </a>
                            </div>
                            <div class="details clearfix">
                                <h6 class="post-title my-0"><a href="blog-single.html">{{ $post->title }}</a></h6>
                                <ul class="meta list-inline mt-1 mb-0">
                                    <li class="list-inline-item">{{ $featured_post->created_at->diffForHumans() }}</li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>