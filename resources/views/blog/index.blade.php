@extends('libranza.front.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('modules/blog/public/css/app.css') }}">
@endsection
@section('content')
    <div class="site-wrap">
        {{-- <div class="site-section bg-light">
            <div class="container">
                <div class="row align-items-stretch retro-layout-2">
                    <div class="col-md-4">
                        <a href="https://preview.colorlib.com/theme/miniblog/single.html"
                            class="h-entry mb-30 v-height gradient"
                           >
                            <div class="text">
                                <h2>The AI magically removes moving objects from videos.</h2>
                                <span class="date">July 19, 2019</span>
                            </div>
                        </a>
                        <a href="https://preview.colorlib.com/theme/miniblog/single.html"
                            class="h-entry v-height gradient"
                           >
                            <div class="text">
                                <h2>The AI magically removes moving objects from videos.</h2>
                                <span class="date">July 19, 2019</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="https://preview.colorlib.com/theme/miniblog/single.html"
                            class="h-entry img-5 h-100 gradient"
                           >
                            <div class="text">
                                <div class="post-categories mb-3">
                                    <span class="post-category bg-danger">Travel</span>
                                    <span class="post-category bg-primary">Food</span>
                                </div>
                                <h2>The AI magically removes moving objects from videos.</h2>
                                <span class="date">July 19, 2019</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="https://preview.colorlib.com/theme/miniblog/single.html"
                            class="h-entry mb-30 v-height gradient"
                           >
                            <div class="text">
                                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                                <span class="date">July 19, 2019</span>
                            </div>
                        </a>
                        <a href="https://preview.colorlib.com/theme/miniblog/single.html"
                            class="h-entry v-height gradient"
                           >
                            <div class="text">
                                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                                <span class="date">July 19, 2019</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <h2>Recent Posts</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-lg-4 mb-4">
                            <div class="entry2">
                                <a href="{{route('blog.show', $post->slug)}}"><img alt="{{ $post->title }}"
                                        src="{{ asset($post->featured_image) }}" class="img-fluid rounded"></a>
                                <div class="excerpt">
                                    @foreach ($post->tags as $tag)
                                    <span class="post-category text-white bg-secondary mb-3">{{$tag->name}}</span>
                                    @endforeach
                                    <h2><a
                                            href="{{route('blog.show', $post->slug)}}">{{ $post->title }}</a>
                                    </h2>
                                    <div class="post-meta align-items-center text-left clearfix">
                                        <span> {{ $post->publish_date->toFormattedDateString() }}</span>
                                    </div>
                                    <p>{{ $post->excerpt }}</p>
                                    <p><a href="{{route('blog.show', $post->slug)}}">Read More</a></p>
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
