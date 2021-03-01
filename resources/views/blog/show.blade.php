@extends('libranza.front.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('modules/blog/public/css/app.css') }}">
@endsection
@section('content')
<body data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0">
    <div class="site-wrap">
        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body">
                <ul class="site-nav-wrap">
                    <li><a href="https://preview.colorlib.com/theme/miniblog/category.html">Home</a></li>
                    <li><a href="https://preview.colorlib.com/theme/miniblog/category.html">Politics</a></li>
                    <li><a href="https://preview.colorlib.com/theme/miniblog/category.html">Tech</a></li>
                    <li><a href="https://preview.colorlib.com/theme/miniblog/category.html">Entertainment</a></li>
                    <li><a href="https://preview.colorlib.com/theme/miniblog/category.html">Travel</a></li>
                    <li><a href="https://preview.colorlib.com/theme/miniblog/category.html">Sports</a></li>
                    <li class="d-none d-lg-inline-block"><a
                            href="https://preview.colorlib.com/theme/miniblog/single.html#"
                            class="js-search-toggle"><span class="icon-search"></span></a></li>
                </ul>
            </div>
        </div>
        <header class="site-navbar" role="banner">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-12 search-form-wrap js-search-form">
                        <form method="get" action="https://preview.colorlib.com/theme/miniblog/single.html#">
                            <input type="text" id="s" class="form-control" placeholder="Search...">
                            <button class="search-btn" type="submit"><span class="icon-search"></span></button>
                        </form>
                    </div>
                    <div class="col-4 site-logo">
                        <a href="https://preview.colorlib.com/theme/miniblog/index.html" class="text-black h2 mb-0">Mini
                            Blog</a>
                    </div>
                    <div class="col-8 text-right">
                        <nav class="site-navigation" role="navigation">
                            <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                                <li><a href="https://preview.colorlib.com/theme/miniblog/category.html">Home</a></li>
                                <li><a href="https://preview.colorlib.com/theme/miniblog/category.html">Politics</a>
                                </li>
                                <li><a href="https://preview.colorlib.com/theme/miniblog/category.html">Tech</a></li>
                                <li><a
                                        href="https://preview.colorlib.com/theme/miniblog/category.html">Entertainment</a>
                                </li>
                                <li><a href="https://preview.colorlib.com/theme/miniblog/category.html">Travel</a></li>
                                <li><a href="https://preview.colorlib.com/theme/miniblog/category.html">Sports</a></li>
                                <li class="d-none d-lg-inline-block"><a
                                        href="https://preview.colorlib.com/theme/miniblog/single.html#"
                                        class="js-search-toggle"><span class="icon-search"></span></a></li>
                            </ul>
                        </nav>
                        <a href="https://preview.colorlib.com/theme/miniblog/single.html#"
                            class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span
                                class="icon-menu h3"></span></a>
                    </div>
                </div>
            </div>
        </header>
        <div class="site-cover site-cover-sm same-height overlay single-page"
            style="background-image: url(&#39;images/img_2.jpg&#39;);">
            <div class="container">
                <div class="row same-height justify-content-center">
                    <div class="col-md-12 col-lg-10">
                        <div class="post-entry text-center">
                            <span class="post-category text-white bg-success mb-3">Nature</span>
                            <h1 class="mb-4"><a href="https://preview.colorlib.com/theme/miniblog/single.html#">The AI
                                    magically removes moving objects from videos.</a></h1>
                            <div class="post-meta align-items-center text-center">
                                <figure class="author-figure mb-0 mr-3 d-inline-block"><img
                                        src="./Mini Blog_files/person_1.jpg" alt="Image" class="img-fluid"></figure>
                                <span class="d-inline-block mt-1">By Carrol Atkinson</span>
                                <span>&nbsp;-&nbsp; February 10, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="site-section py-lg">
            <div class="container">
                <div class="row blog-entries element-animate">
                    <div class="col-md-12 col-lg-8 main-content">
                        <div class="post-content-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium nam quas inventore,
                                ut iure iste modi eos adipisci ad ea itaque labore earum autem nobis et numquam, minima
                                eius. Nam eius, non unde ut aut sunt eveniet rerum repellendus porro.</p>
                            <p>Sint ab voluptates itaque, ipsum porro qui obcaecati cumque quas sit vel. Voluptatum
                                provident id quis quo. Eveniet maiores perferendis officia veniam est laborum, expedita
                                fuga doloribus natus repellendus dolorem ab similique sint eius cupiditate
                                necessitatibus, magni nesciunt ex eos.</p>
                            <p>Quis eius aspernatur, eaque culpa cumque reiciendis, nobis at earum assumenda similique
                                ut? Aperiam vel aut, ex exercitationem eos consequuntur eaque culpa totam, deserunt,
                                aspernatur quae eveniet hic provident ullam tempora error repudiandae sapiente illum
                                rerum itaque voluptatem. Commodi, sequi.</p>
                            <div class="row mb-5 mt-5">
                                <div class="col-md-12 mb-4">
                                    <img src="./Mini Blog_files/img_1.jpg" alt="Image placeholder"
                                        class="img-fluid rounded">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <img src="./Mini Blog_files/img_2.jpg" alt="Image placeholder"
                                        class="img-fluid rounded">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <img src="./Mini Blog_files/img_3.jpg" alt="Image placeholder"
                                        class="img-fluid rounded">
                                </div>
                            </div>
                            <p>Quibusdam autem, quas molestias recusandae aperiam molestiae modi qui ipsam vel. Placeat
                                tenetur veritatis tempore quos impedit dicta, error autem, quae sint inventore ipsa
                                quidem. Quo voluptate quisquam reiciendis, minus, animi minima eum officia doloremque
                                repellat eos, odio doloribus cum.</p>
                            <p>Temporibus quo dolore veritatis doloribus delectus dolores perspiciatis recusandae
                                ducimus, nisi quod, incidunt ut quaerat, magnam cupiditate. Aut, laboriosam magnam,
                                nobis dolore fugiat impedit necessitatibus nisi cupiditate, quas repellat itaque
                                molestias sit libero voluptas eveniet omnis illo ullam dolorem minima.</p>
                            <p>Porro amet accusantium libero fugit totam, deserunt ipsa, dolorem, vero expedita illo
                                similique saepe nisi deleniti. Cumque, laboriosam, porro! Facilis voluptatem sequi nulla
                                quidem, provident eius quos pariatur maxime sapiente illo nostrum quibusdam aliquid
                                fugiat! Earum quod fuga id officia.</p>
                            <p>Illo magnam at dolore ad enim fugiat ut maxime facilis autem, nulla cumque quis commodi
                                eos nisi unde soluta, ipsa eius aspernatur sint atque! Nihil, eveniet illo ea, mollitia
                                fuga accusamus dolor dolorem perspiciatis rerum hic, consectetur error rem aspernatur!
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus magni explicabo id
                                molestiae, minima quas assumenda consectetur, nobis neque rem, incidunt quam tempore
                                perferendis provident obcaecati sapiente, animi vel expedita omnis quae ipsa! Obcaecati
                                eligendi sed odio labore vero reiciendis facere accusamus molestias eaque impedit,
                                consequuntur quae fuga vitae fugit?</p>
                        </div>
                        <div class="pt-5">
                            <p>Categories: <a href="https://preview.colorlib.com/theme/miniblog/single.html#">Food</a>,
                                <a href="https://preview.colorlib.com/theme/miniblog/single.html#">Travel</a> Tags: <a
                                    href="https://preview.colorlib.com/theme/miniblog/single.html#">#manila</a>, <a
                                    href="https://preview.colorlib.com/theme/miniblog/single.html#">#asia</a></p>
                        </div>
                        <div class="pt-5">
                            <h3 class="mb-5">6 Comments</h3>
                            <ul class="comment-list">
                                <li class="comment">
                                    <div class="vcard">
                                        <img src="./Mini Blog_files/person_1.jpg" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>Jean Doe</h3>
                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem
                                            laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe
                                            enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?
                                        </p>
                                        <p><a href="https://preview.colorlib.com/theme/miniblog/single.html#"
                                                class="reply rounded">Reply</a></p>
                                    </div>
                                </li>
                                <li class="comment">
                                    <div class="vcard">
                                        <img src="./Mini Blog_files/person_1.jpg" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>Jean Doe</h3>
                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem
                                            laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe
                                            enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?
                                        </p>
                                        <p><a href="https://preview.colorlib.com/theme/miniblog/single.html#"
                                                class="reply rounded">Reply</a></p>
                                    </div>
                                    <ul class="children">
                                        <li class="comment">
                                            <div class="vcard">
                                                <img src="./Mini Blog_files/person_1.jpg" alt="Image placeholder">
                                            </div>
                                            <div class="comment-body">
                                                <h3>Jean Doe</h3>
                                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur
                                                    quidem laborum necessitatibus, ipsam impedit vitae autem, eum
                                                    officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum
                                                    impedit necessitatibus, nihil?</p>
                                                <p><a href="https://preview.colorlib.com/theme/miniblog/single.html#"
                                                        class="reply rounded">Reply</a></p>
                                            </div>
                                            <ul class="children">
                                                <li class="comment">
                                                    <div class="vcard">
                                                        <img src="./Mini Blog_files/person_1.jpg"
                                                            alt="Image placeholder">
                                                    </div>
                                                    <div class="comment-body">
                                                        <h3>Jean Doe</h3>
                                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Pariatur quidem laborum necessitatibus, ipsam impedit vitae
                                                            autem, eum officia, fugiat saepe enim sapiente iste iure!
                                                            Quam voluptas earum impedit necessitatibus, nihil?</p>
                                                        <p><a href="https://preview.colorlib.com/theme/miniblog/single.html#"
                                                                class="reply rounded">Reply</a></p>
                                                    </div>
                                                    <ul class="children">
                                                        <li class="comment">
                                                            <div class="vcard">
                                                                <img src="./Mini Blog_files/person_1.jpg"
                                                                    alt="Image placeholder">
                                                            </div>
                                                            <div class="comment-body">
                                                                <h3>Jean Doe</h3>
                                                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Pariatur quidem laborum necessitatibus, ipsam
                                                                    impedit vitae autem, eum officia, fugiat saepe enim
                                                                    sapiente iste iure! Quam voluptas earum impedit
                                                                    necessitatibus, nihil?</p>
                                                                <p><a href="https://preview.colorlib.com/theme/miniblog/single.html#"
                                                                        class="reply rounded">Reply</a></p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="comment">
                                    <div class="vcard">
                                        <img src="./Mini Blog_files/person_1.jpg" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>Jean Doe</h3>
                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem
                                            laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe
                                            enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?
                                        </p>
                                        <p><a href="https://preview.colorlib.com/theme/miniblog/single.html#"
                                                class="reply rounded">Reply</a></p>
                                    </div>
                                </li>
                            </ul>

                            <div class="comment-form-wrap pt-5">
                                <h3 class="mb-5">Leave a comment</h3>
                                <form action="https://preview.colorlib.com/theme/miniblog/single.html#"
                                    class="p-5 bg-light">
                                    <div class="form-group">
                                        <label for="name">Name *</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="website">Website</label>
                                        <input type="url" class="form-control" id="website">
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea name="" id="message" cols="30" rows="10"
                                            class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Post Comment" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-4 sidebar">
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
                            <div class="bio text-center">
                                <img src="./Mini Blog_files/person_2.jpg" alt="Image Placeholder"
                                    class="img-fluid mb-5">
                                <div class="bio-body">
                                    <h2>Craig David</h2>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate
                                        nulla quo veniam fuga sit molestias minus.</p>
                                    <p><a href="https://preview.colorlib.com/theme/miniblog/single.html#"
                                            class="btn btn-primary btn-sm rounded px-4 py-2">Read my bio</a></p>
                                    <p class="social">
                                        <a href="https://preview.colorlib.com/theme/miniblog/single.html#"
                                            class="p-2"><span class="fa fa-facebook"></span></a>
                                        <a href="https://preview.colorlib.com/theme/miniblog/single.html#"
                                            class="p-2"><span class="fa fa-twitter"></span></a>
                                        <a href="https://preview.colorlib.com/theme/miniblog/single.html#"
                                            class="p-2"><span class="fa fa-instagram"></span></a>
                                        <a href="https://preview.colorlib.com/theme/miniblog/single.html#"
                                            class="p-2"><span class="fa fa-youtube-play"></span></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-box">
                            <h3 class="heading">Popular Posts</h3>
                            <div class="post-entry-sidebar">
                                <ul>
                                    <li>
                                        <a href="https://preview.colorlib.com/theme/miniblog/single.html">
                                            <img src="./Mini Blog_files/img_1.jpg" alt="Image placeholder" class="mr-4">
                                            <div class="text">
                                                <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">March 15, 2018 </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://preview.colorlib.com/theme/miniblog/single.html">
                                            <img src="./Mini Blog_files/img_2.jpg" alt="Image placeholder" class="mr-4">
                                            <div class="text">
                                                <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">March 15, 2018 </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://preview.colorlib.com/theme/miniblog/single.html">
                                            <img src="./Mini Blog_files/img_3.jpg" alt="Image placeholder" class="mr-4">
                                            <div class="text">
                                                <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">March 15, 2018 </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="sidebar-box">
                            <h3 class="heading">Categories</h3>
                            <ul class="categories">
                                <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Food
                                        <span>(12)</span></a></li>
                                <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Travel
                                        <span>(22)</span></a></li>
                                <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Lifestyle
                                        <span>(37)</span></a></li>
                                <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Business
                                        <span>(42)</span></a></li>
                                <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Adventure
                                        <span>(14)</span></a></li>
                            </ul>
                        </div>

                        <div class="sidebar-box">
                            <h3 class="heading">Tags</h3>
                            <ul class="tags">
                                <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Travel</a></li>
                                <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Adventure</a>
                                </li>
                                <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Food</a></li>
                                <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Lifestyle</a>
                                </li>
                                <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Business</a></li>
                                <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Freelancing</a>
                                </li>
                                <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Travel</a></li>
                                <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Adventure</a>
                                </li>
                                <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Food</a></li>
                                <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Lifestyle</a>
                                </li>
                                <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Business</a></li>
                                <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Freelancing</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <div class="site-section bg-light">
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
        </div>
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
        <div class="site-footer">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <h3 class="footer-heading mb-4">About Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit magnam
                            deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis obcaecati quae,
                            repellat eveniet omnis, voluptatem in. Soluta, eligendi, architecto.</p>
                    </div>
                    <div class="col-md-3 ml-auto">

                        <ul class="list-unstyled float-left mr-5">
                            <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">About Us</a></li>
                            <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Advertise</a></li>
                            <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Careers</a></li>
                            <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Subscribes</a></li>
                        </ul>
                        <ul class="list-unstyled float-left">
                            <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Travel</a></li>
                            <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Lifestyle</a></li>
                            <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Sports</a></li>
                            <li><a href="https://preview.colorlib.com/theme/miniblog/single.html#">Nature</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <h3 class="footer-heading mb-4">Connect With Us</h3>
                            <p>
                                <a href="https://preview.colorlib.com/theme/miniblog/single.html#"><span
                                        class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
                                <a href="https://preview.colorlib.com/theme/miniblog/single.html#"><span
                                        class="icon-twitter p-2"></span></a>
                                <a href="https://preview.colorlib.com/theme/miniblog/single.html#"><span
                                        class="icon-instagram p-2"></span></a>
                                <a href="https://preview.colorlib.com/theme/miniblog/single.html#"><span
                                        class="icon-rss p-2"></span></a>
                                <a href="https://preview.colorlib.com/theme/miniblog/single.html#"><span
                                        class="icon-envelope p-2"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <p>

                            Copyright © <script type="text/javascript" async=""
                                src="./Mini Blog_files/analytics.js.descarga"></script>
                            <script>
                                document.write(new Date().getFullYear());

                            </script>2021 All rights reserved | This template is made with <i
                                class="icon-heart text-danger" aria-hidden="true"></i> by <a
                                href="https://colorlib.com/" target="_blank">Colorlib</a>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
</html>
