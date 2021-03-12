@extends('libranza.front.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('modules/blog/public/css/app.css') }}">
@endsection
@section('content')
    <div class="site-wrap">


        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <h2>{{ isset($origin) ? 'Blogs - ' . $origin->name : 'Blogs' }}</h2>
                    </div>
                </div>
                <ul class="nav nav-pills mb-4 justify-content-center">
                    <li class="nav-item mx-2">
                        <a class="nav-link btn-outline-primary" style=" border: 1px solid; " aria-current="page" href="{{route('blog')}}">Ver Todos</a>
                    </li>    
                    @foreach ($tags as $tag)
                    <li class="nav-item mx-2">
                        <a class="nav-link btn-outline-primary" style=" border: 1px solid; " aria-current="page" href="{{route('blog.tag.show', $tag->slug)}}">{{$tag->name}}</a>
                    </li>    
                    @endforeach
                </ul>
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-lg-4 mb-4">
                            <div class="entry2">
                                <a href="{{ route('blog.show', $post->slug) }}"><img alt="{{ $post->title }}"
                                        src="{{ asset($post->featured_image) }}" class="img-fluid rounded"></a>
                                <div class="excerpt">
                                    <h2><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                                    </h2>
                                    <div class="post-meta align-items-center text-left clearfix">
                                        <span> {{ $post->publish_date->toFormattedDateString() }}</span>
                                    </div>
                                    <p>{{ $post->excerpt }}</p>
                                    <p class="text-right"><a class="btn btn-primary ml-auto" style=" border-radius: 0.5vw; "
                                            href="{{ route('blog.show', $post->slug) }}">Leer más</a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row text-center pt-5 border-top">
                    <div class="col-md-12">
                        <div class="custom-pagination">
                            <span>1</span>
                            <a href="">2</a>
                            <a href="">3</a>
                            <a href="">4</a>
                            <span>...</span>
                            <a href="">15</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section bg-lightx">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-5">
                        <div class="subscribe-1 ">
                            <h2>Subscribe to our newsletter</h2>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error
                                illum a explicabo, ipsam nostrum.</p>
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
@endsection

</html>
