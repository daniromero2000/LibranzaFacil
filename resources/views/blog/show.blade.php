@extends('libranza.front.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('modules/blog/public/css/show/app.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('modules/blog/public/css/app.css') }}">
@endsection
@section('content')

    <body data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0">
        <div class="site-wrap">
            <section class="site-section py-lg">
                <div class="container-show-blow">
                    <nav aria-label="breadcrumb bg-white">
                        <ol class="breadcrumb bg-white">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('blog') }}">Blogs</a>
                            </li>
                        </ol>
                    </nav>
                    <div class="row blog-entries element-animate">
                        <div class="col-md-9 main-content">
                            <h1 class="title">{{ $post->title ? $post->title : 'title' }}</h1>
                            <h5 style="color: gray">{{ $post->publish_date->toFormattedDateString() }}</h5>
                            <div class="post-content-body container-text-blog">
                                {!! $post->content !!}
                            </div>
                        </div>
                        <div class="col-md-3 sidebar">
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
                                    <div class="row">
                                        @foreach ($post->tags as $tagsPost)
                                            @foreach ($tagsPost->posts->take(10) as $item)
                                                <div class="col-10 col-md-12">
                                                    <a href="{{ route('blog.show', $item->slug) }}" class="d-flex content-post">
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
                                                </div>
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-box">
                                <h3 class="heading">Tags</h3>
                                <ul class="tags">
                                    <li><a href="{{ route('blog') }}">Ver Todo</a>
                                    </li>
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
            <div class="site-section bg-lightx">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-10 col-md-6">
                            <div class="subscribe-1">
                                <h2>¿Te gustó este contenido?</h2>
                                <p class="mb-5">Suscríbete a nuestro newsletter para que puedas recibir consejos financieros
                                    todos los meses.</p>
                                <form action="" class="d-flex">
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
