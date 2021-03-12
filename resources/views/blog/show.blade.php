@extends('libranza.front.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('modules/blog/public/css/show/app.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('modules/blog/public/css/app.css') }}">
@endsection
@section('content')

    <body data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0">
        <div class="site-wrap">
            <section class="site-section py-lg">
                <div class="container">
                    <nav aria-label="breadcrumb bg-white">
                        <ol class="breadcrumb bg-white">
                            <li class="breadcrumb-item"><a href="">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{route('blog')}}">Blogs</a></li>
                        </ol>
                    </nav>
                    <div class="row blog-entries element-animate">
                        <div class="col-md-12 col-lg-9 main-content">
                            <h1 class="title">{{ $post->title ? $post->title : 'title' }}</h1>
                            <h5>{{ $post->publish_date->toFormattedDateString() }}</h5>
                            <div class="post-content-body container-text-blog">
                                {!! $post->content !!}
                            </div>
                            <div>
                                <p>Tags:
                                    @foreach ($post->tags as $tag)
                                        <a href="{{ route('blog.tag.show', $tag->slug) }}">#{{ $tag->name }}</a>
                                    @endforeach
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-3 sidebar">
                            <div class="sidebar-box search-form-wrap">
                                <form action="https://preview.colorlib.com/theme/miniblog/single.html#" class="search-form">
                                    <div class="form-group">
                                        <span class="icon fa fa-search"></span>
                                        <input type="text" class="form-control" id="s"
                                            placeholder="Type a keyword and hit enter">
                                    </div>
                                </form>
                            </div>

                            <div class="sidebar-box">
                                <h3 class="heading">Lee También</h3>
                                <div class="post-entry-sidebar">
                                    <ul>
                                        @foreach ($post->tags as $tagsPost)
                                            @foreach ($tagsPost->posts->take(10) as $item)
                                                <li>
                                                    <a href="{{ route('blog.show', $item->slug) }}">
                                                        <img src="{{ asset($item->featured_image) }}"
                                                            alt="Image placeholder" class="mr-4">
                                                        <div class="text">
                                                            <h4>{{ $item->title }}</h4>
                                                            <div class="post-meta">
                                                                <span
                                                                    class="mr-2">{{ $item->publish_date->toFormattedDateString() }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endforeach
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-box">
                                <h3 class="heading">Tags</h3>
                                <ul class="tags">
                                    @foreach ($tags as $tag)
                                        <li><a href="{{ route('blog.tag.show', $tag->slug) }}">{{ $tag->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            {{-- <div class="site-section bg-light">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12">
                            <h2>More Related Posts</h2>
                        </div>
                    </div>
                    <div class="row align-items-stretch retro-layout">
                        <div class="col-md-5 order-md-2">
                            <a href="https://preview.colorlib.com/theme/miniblog/single.html"
                                class="hentry img-1 h-100 gradient"
                                style="background-image: url(&#39;images/img_4.jpg&#39;);">
                                <span class="post-category text-white bg-danger">Travel</span>
                                <div class="text">
                                    <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                                    <span>February 12, 2019</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="https://preview.colorlib.com/theme/miniblog/single.html"
                                class="hentry img-2 v-height mb30 gradient"
                                style="background-image: url(&#39;images/img_1.jpg&#39;);">
                                <span class="post-category text-white bg-success">Nature</span>
                                <div class="text text-sm">
                                    <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                                    <span>February 12, 2019</span>
                                </div>
                            </a>
                            <div class="two-col d-block d-md-flex">
                                <a href="https://preview.colorlib.com/theme/miniblog/single.html"
                                    class="hentry v-height img-2 gradient"
                                    style="background-image: url(&#39;images/img_2.jpg&#39;);">
                                    <span class="post-category text-white bg-primary">Sports</span>
                                    <div class="text text-sm">
                                        <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                                        <span>February 12, 2019</span>
                                    </div>
                                </a>
                                <a href="https://preview.colorlib.com/theme/miniblog/single.html"
                                    class="hentry v-height img-2 ml-auto gradient"
                                    style="background-image: url(&#39;images/img_3.jpg&#39;);">
                                    <span class="post-category text-white bg-warning">Lifestyle</span>
                                    <div class="text text-sm">
                                        <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                                        <span>February 12, 2019</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="site-section bg-lightx">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-md-5">
                            <div class="subscribe-1 ">
                                <h2>Subscribe to our newsletter</h2>
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error
                                    illum a explicabo, ipsam nostrum.</p>
                                <form action="https://preview.colorlib.com/theme/miniblog/single.html#" class="d-flex">
                                    <input type="text" class="form-control" placeholder="Enter your email address">
                                    <input type="submit" class="btn btn-primary" value="Subscribe">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection

</html>
