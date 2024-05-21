@extends('layouts\frontend\frontendmaster')

@section('content')

<div class="container">
        <div class="braking-news-area">
            <div class="row">

                @foreach ($breakingnewses as $breakingnews)
                    <div class="col-lg-12">
                        <div class="braking-news-wrap">
                            <span>Braking News</span>
                            <div class="marquee">
                                <p>In the news: {{ $breakingnews->breaking_title }} .</p>
                                <div class="breaking-news-post-date">{{ $breakingnews->breaking_date }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
               
            </div>
        </div>
    </div>

    <!-- post-banner start -->
    <div class="post-banner-area pd-top-30">
        <div class="container">
            <div class="row">
                @foreach ($newses as $news)
                    @include('layouts\frontend\grid\news_grid')
                @endforeach
            </div>
        </div>
    </div>
    <!-- post-banner end -->

    <div class="top-news-area pd-top-84 pd-bottom-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title pb-0">
                        <h4 class="title left-line">Business</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="media-post-wrap">
                                <div class="thumb mb-4">
                                    <img src="{{ asset('frontend_assets') }}/assets/img/blog/business-people.jpg" alt="img">
                                </div>
                                <div class="media-body ms-0">
                                    <a class="tag top-right tag-pest" href="#">Business</a>
                                    <h4><a href="blog-category.html">In the news: small businesses for expect revenue growth in 2022.</a></h4>
                                </div>
                                <div class="meta d-flex">
                                    <div class="author">
                                        <div class="thumb">
                                            <img src="{{ asset('frontend_assets') }}/assets/img/banner/user.jpg" alt="img">
                                        </div>
                                        <a href="#">Stiven Jackson</a>
                                    </div>
                                    <div class="date ms-auto">
                                        <i class="fa fa-clock-o"></i>
                                            Mar 16, 2022
                                    </div>
                                    <div class="comment ms-auto">
                                        0
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="media-post-wrap">
                                <div class="thumb mb-4">
                                    <img src="{{ asset('frontend_assets') }}/assets/img/blog/planning.jpg" alt="img">
                                </div>
                                <div class="media-body ms-0">
                                    <a class="tag top-right tag-purple" href="#">Marketing</a>
                                    <h4><a href="blog-category.html">B2B cmos plan 2022 spending that rise, influencer marketing’s.</a></h4>
                                </div>
                                <div class="meta d-flex">
                                    <div class="author">
                                        <div class="thumb">
                                            <img src="{{ asset('frontend_assets') }}/assets/img/banner/user.jpg" alt="img">
                                        </div>
                                        <a href="#">Stiven Jackson</a>
                                    </div>
                                    <div class="date ms-auto">
                                        <i class="fa fa-clock-o"></i>
                                            Mar 16, 2022
                                    </div>
                                    <div class="comment ms-auto">
                                        0
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="media-post-wrap">
                                <div class="thumb mb-4">
                                    <img src="{{ asset('frontend_assets') }}/assets/img/blog/rich-man.jpg" alt="img">
                                </div>
                                <div class="media-body ms-0">
                                    <a class="tag top-right tag-yellow" href="#">Technology</a>
                                    <h4><a href="blog-category.html">International breweries applicate from young entrepreneurs.</a></h4>
                                </div>
                                <div class="meta d-flex">
                                    <div class="author">
                                        <div class="thumb">
                                            <img src="{{ asset('frontend_assets') }}/assets/img/banner/user.jpg" alt="img">
                                        </div>
                                        <a href="#">Stiven Jackson</a>
                                    </div>
                                    <div class="date ms-auto">
                                        <i class="fa fa-clock-o"></i>
                                            Mar 16, 2022
                                    </div>
                                    <div class="comment ms-auto">
                                        0
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="media-post-wrap">
                                <div class="thumb mb-4">
                                    <img src="{{ asset('frontend_assets') }}/assets/img/blog/advertisement.jpg" alt="img">
                                </div>
                                <div class="media-body ms-0">
                                    <a class="tag top-right tag-green" href="#">Travel</a>
                                    <h4><a href="blog-category.html">Elf programmatic advertising our trends going on 2022.</a></h4>
                                </div>
                                <div class="meta d-flex">
                                    <div class="author">
                                        <div class="thumb">
                                            <img src="{{ asset('frontend_assets') }}/assets/img/banner/user.jpg" alt="img">
                                        </div>
                                        <a href="#">Stiven Jackson</a>
                                    </div>
                                    <div class="date ms-auto">
                                        <i class="fa fa-clock-o"></i>
                                            Mar 16, 2022
                                    </div>
                                    <div class="comment ms-auto">
                                        0
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section-title pb-0">
                        <h4 class="title left-line">Featured Posts</h4>
                    </div>
                    <div class="media-post-wrap-3 media">
                        <div class="thumb">
                            <img src="{{ asset('frontend_assets') }}/assets/img/blog/obama.jpg" alt="img">
                        </div>
                        <div class="media-body">
                            <h6><a href="blog-category.html">Obama avoids crowds outside Edinburgh charity dinner.</a></h6>
                            <div class="meta d-flex">
                                <div class="tag"><a href="#">Politics</a></div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    July 12, 2021
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media-post-wrap-3 media">
                        <div class="thumb">
                            <img src="{{ asset('frontend_assets') }}/assets/img/blog/parliament-img.jpg" alt="img">
                        </div>
                        <div class="media-body">
                            <h6><a href="blog-category.html">Imagination is more important than knowledge buildup.</a></h6>
                            <div class="meta d-flex">
                                <div class="tag"><a href="#">Politics</a></div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    July 12, 2021
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media-post-wrap-3 media">
                        <div class="thumb">
                            <img src="{{ asset('frontend_assets') }}/assets/img/blog/paper-thumb.jpg" alt="img">
                        </div>
                        <div class="media-body">
                            <h6><a href="blog-category.html">Apollo astronauts harmed by a the deep space radiation.</a></h6>
                            <div class="meta d-flex">
                                <div class="tag"><a href="#">Politics</a></div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    July 12, 2021
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media-post-wrap-3 media">
                        <div class="thumb">
                            <img src="{{ asset('frontend_assets') }}/assets/img/blog/neon-light.jpg" alt="img">
                        </div>
                        <div class="media-body">
                            <h6><a href="blog-category.html">The golden rules of midlife fitness and things getting wrong.</a></h6>
                            <div class="meta d-flex">
                                <div class="tag"><a href="#">Politics</a></div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    July 12, 2021
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-list-small-wrapper">
                        <div class="section-title pb-0">
                            <h4 class="title">Weekly Post</h4>
                        </div>
                        <div class="post-grid-slider owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('frontend_assets') }}/assets/img/blog/1.jpg" alt="img">
                                </div>
                                <div class="details">
                                    <p>When working remotely and having to manage your own time, it is not uncommon for breaks to be overlooked.</p>
                                    <div class="meta d-flex">
                                        <div class="author">
                                            <div class="thumb">
                                                <img src="{{ asset('frontend_assets') }}/assets/img/banner/user.jpg" alt="img">
                                            </div>
                                            <a href="#">Stiven Jackson</a>
                                        </div>
                                        <div class="date">
                                            <i class="fa fa-clock-o"></i>
                                                Mar 16, 2022
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('frontend_assets') }}/assets/img/blog/2.png" alt="img">
                                </div>
                                <div class="details">
                                    <p>When working remotely and having to manage your own time, it is not uncommon for breaks to be overlooked.</p>
                                    <div class="meta d-flex">
                                        <div class="author">
                                            <div class="thumb">
                                                <img src="{{ asset('frontend_assets') }}/assets/img/banner/user.jpg" alt="img">
                                            </div>
                                            <a href="#">Stiven Jackson</a>
                                        </div>
                                        <div class="date">
                                            <i class="fa fa-clock-o"></i>
                                                Mar 16, 2022
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('frontend_assets') }}/assets/img/blog/3.png" alt="img">
                                </div>
                                <div class="details">
                                    <p>When working remotely and having to manage your own time, it is not uncommon for breaks to be overlooked.</p>
                                    <div class="meta d-flex">
                                        <div class="author">
                                            <div class="thumb">
                                                <img src="{{ asset('frontend_assets') }}/assets/img/banner/user.jpg" alt="img">
                                            </div>
                                            <a href="#">Stiven Jackson</a>
                                        </div>
                                        <div class="date">
                                            <i class="fa fa-clock-o"></i>
                                                Mar 16, 2022
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('frontend_assets') }}/assets/img/blog/4.png" alt="img">
                                </div>
                                <div class="details">
                                    <p>When working remotely and having to manage your own time, it is not uncommon for breaks to be overlooked.</p>
                                    <div class="meta d-flex">
                                        <div class="author">
                                            <div class="thumb">
                                                <img src="{{ asset('frontend_assets') }}/assets/img/banner/user.jpg" alt="img">
                                            </div>
                                            <a href="#">Stiven Jackson</a>
                                        </div>
                                        <div class="date">
                                            <i class="fa fa-clock-o"></i>
                                                Mar 16, 2022
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ad-area pd-bottom-40">
        <div class="container">
            <a class="w-100" href="#"><img src="{{ asset('frontend_assets') }}/assets/img/ad/kiante-ads.png" alt="img"></a>
        </div>
    </div>

    <div class="top-news-area pd-top-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title pb-0">
                        <h4 class="title left-line">Business</h4>
                    </div>
                    <div class="media-post-wrap mg-bottom-40">
                        <div class="thumb mb-4">
                            <img class="w-100" src="{{ asset('frontend_assets') }}/assets/img/blog/country-parliament.jpg" alt="img">
                        </div>
                        <div class="media-body ms-0">
                            <a class="tag top-right tag-purple" href="#">Politics</a>
                            <h2><a href="blog-category.html">Julian Assange charged in US, court document for an accidentally reveals changing the technology.</a></h2>
                        </div>
                        <div class="meta d-flex">
                            <div class="author">
                                <div class="thumb">
                                    <img src="{{ asset('frontend_assets') }}/assets/img/banner/user.jpg" alt="img">
                                </div>
                                <a href="#">Stiven Jackson</a>
                            </div>
                            <div class="date">
                                <i class="fa fa-clock-o"></i>
                                    Mar 16, 2022
                            </div>
                            <div class="comment">
                                0
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="media-post-wrap-3 media">
                                <div class="thumb">
                                    <img src="{{ asset('frontend_assets') }}/assets/img/blog/techboy.jpg" alt="img">
                                </div>
                                <div class="media-body">
                                    <h6><a href="blog-category.html">Intel’s horseshoe bend concept is a look at the future of foldable.</a></h6>
                                    <div class="meta d-flex">
                                        <div class="tag"><a href="#">Technology</a></div>
                                        <div class="date">
                                            <i class="fa fa-clock-o"></i>
                                            July 12, 2021
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="media-post-wrap-3 media">
                                <div class="thumb">
                                    <img src="{{ asset('frontend_assets') }}/assets/img/blog/social-cut.png" alt="img">
                                </div>
                                <div class="media-body">
                                    <h6><a href="blog-category.html">The golden rules of midlife fitness and things getting wrong.</a></h6>
                                    <div class="meta d-flex">
                                        <div class="tag"><a href="#">Technology</a></div>
                                        <div class="date">
                                            <i class="fa fa-clock-o"></i>
                                            July 12, 2021
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="media-post-wrap-3 media">
                                <div class="thumb">
                                    <img src="{{ asset('frontend_assets') }}/assets/img/blog/richman.png" alt="img">
                                </div>
                                <div class="media-body">
                                    <h6><a href="blog-category.html">International breweries applicate from young entrepreneurs.</a></h6>
                                    <div class="meta d-flex">
                                        <div class="tag"><a href="#">Technology</a></div>
                                        <div class="date">
                                            <i class="fa fa-clock-o"></i>
                                            July 12, 2021
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="media-post-wrap-3 media">
                                <div class="thumb">
                                    <img src="{{ asset('frontend_assets') }}/assets/img/blog/business.png" alt="img">
                                </div>
                                <div class="media-body">
                                    <h6><a href="blog-category.html">In the news: small businesses for expect revenue growth in 2022.</a></h6>
                                    <div class="meta d-flex">
                                        <div class="tag"><a href="#">Business</a></div>
                                        <div class="date">
                                            <i class="fa fa-clock-o"></i>
                                            July 12, 2021
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-title pb-0 pd-top-80">
                        <h4 class="title left-line">Videos</h4>
                    </div>
                    <div class="video-area">
                        <div class="top-post-wrap">
                            <div class="thumb">
                                <img src="{{ asset('frontend_assets') }}/assets/img/blog/nature.jpg" alt="img" style="opacity: 1;">
                                <a class="video-play-btn" href="#" data-effect="mfp-zoom-in"><img src="{{ asset('frontend_assets') }}/assets/img/icon/play.png" alt="img"></a>
                            </div>
                            <div class="top-post-details">
                                <a class="tag top-right tag-green" href="#">Travel</a>
                                <h2><a href="blog-category.html">I find that the harder I work, the more luck I seem to have.</a></h2>
                                <div class="meta mt-2">
                                    <div class="user">
                                        <div class="thumb">
                                            <img src="{{ asset('frontend_assets') }}/assets/img/banner/user.jpg" alt="img" style="opacity: 1;">
                                        </div>
                                        <a href="#">Stiven Jackson</a>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i>
                                            Mar 16, 2022
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="top-post-wrap mb-0">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend_assets') }}/assets/img/blog/protest.jpg" alt="img" style="opacity: 1;">
                                        <a class="video-play-btn" href="#" data-effect="mfp-zoom-in"><img src="{{ asset('frontend_assets') }}/assets/img/icon/play.png" alt="img"></a>
                                    </div>
                                    <div class="top-post-details">
                                        <a class="tag top-right tag-purple" href="#">Politics</a>
                                        <h4><a href="blog-category.html">Huge glacier collapses in Arge.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="top-post-wrap mb-0">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend_assets') }}/assets/img/blog/footballer.jpg" alt="img" style="opacity: 1;">
                                        <a class="video-play-btn" href="#" data-effect="mfp-zoom-in"><img src="{{ asset('frontend_assets') }}/assets/img/icon/play.png" alt="img"></a>
                                    </div>
                                    <div class="top-post-details">
                                        <a class="tag top-right tag-blue" href="#">Sports</a>
                                        <h4><a href="blog-category.html">Madrid Hope To Beat Malaga.</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section-title pb-0">
                        <h4 class="title left-line">Social Media</h4>
                    </div>
                    <ul class="social-wrap">
                        <li class="ms-0"><a href="#"><img src="{{ asset('frontend_assets') }}/assets/img/icon/facebook.svg" alt="img"></a></li>
                        <li class="me-0"><a href="#"><img src="{{ asset('frontend_assets') }}/assets/img/icon/twitter.svg" alt="img"></a></li>
                        <li class="ms-0"><a href="#"><img src="{{ asset('frontend_assets') }}/assets/img/icon/instagram.svg" alt="img"></a></li>
                        <li class="me-0"><a href="#"><img src="{{ asset('frontend_assets') }}/assets/img/icon/pinterestsvg.svg" alt="img"></a></li>
                    </ul>
                    <div class="section-title pb-0">
                        <h4 class="title left-line">Popular Posts</h4>
                    </div>
                    <div class="media-post-wrap-3 media">
                        <div class="thumb">
                            <img src="{{ asset('frontend_assets') }}/assets/img/blog/techboy.jpg" alt="img">
                        </div>
                        <div class="media-body">
                            <h6><a href="blog-category.html">Intel’s horseshoe bend concept is a look at the future of foldable.</a></h6>
                            <div class="meta d-flex">
                                <div class="tag"><a href="#">Technology</a></div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    July 12, 2021
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media-post-wrap-3 media">
                        <div class="thumb">
                            <img src="{{ asset('frontend_assets') }}/assets/img/blog/obama.jpg" alt="img">
                        </div>
                        <div class="media-body">
                            <h6><a href="blog-category.html">Obama avoids crowds outside Edinburgh charity dinner.</a></h6>
                            <div class="meta d-flex">
                                <div class="tag"><a href="#">Politics</a></div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    July 12, 2021
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media-post-wrap-3 media">
                        <div class="thumb">
                            <img src="{{ asset('frontend_assets') }}/assets/img/blog/paper-thumb.jpg" alt="img">
                        </div>
                        <div class="media-body">
                            <h6><a href="blog-category.html">Apollo astronauts harmed by a the deep space radiation.</a></h6>
                            <div class="meta d-flex">
                                <div class="tag"><a href="#">Politics</a></div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    July 12, 2021
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media-post-wrap-3 media">
                        <div class="thumb">
                            <img src="{{ asset('frontend_assets') }}/assets/img/blog/social-cut.png" alt="img">
                        </div>
                        <div class="media-body">
                            <h6><a href="blog-category.html">The golden rules of midlife fitness and things getting wrong.</a></h6>
                            <div class="meta d-flex">
                                <div class="tag"><a href="#">Technology</a></div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    July 12, 2021
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget_tags mt-5">
                        <div class="section-title pb-0">
                            <h4 class="title left-line widget-title">Tags</h4>
                        </div>
                        <div class="tagcloud">
                            @foreach ($news_tags as $news_tag)
                            <a href="#">{{ $news_tag->news_tag }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="ad-area pd-top-90">
                        <a href="#">
                            <img src="{{ asset('frontend_assets') }}/assets/img/ad/add.png" alt="img">
                        </a>
                    </div>
                    <div class="widget widget_list mt-5">
                        <div class="section-title pb-0">
                            <h4 class="title left-line widget-title">Category list</h4>
                        </div>
                        <ul class="list-inner">
                            @foreach ($categories as $category)

                            <li><a href="#">{{ $category->category_name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pd-top-70 pd-bottom-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4 class="title left-line">Don't Miss</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="media-post-wrap">
                        <div class="thumb mb-4">
                            <img src="{{ asset('frontend_assets') }}/assets/img/blog/social-1.png" alt="img">
                        </div>
                        <div class="media-body ms-0">
                            <a class="tag top-right tag-yellow" href="#">Technology</a>
                            <h4><a href="blog-category.html">The golden rules of midlife fitness and things getting wrong.</a></h4>
                        </div>
                        <div class="meta d-flex">
                            <div class="author">
                                <div class="thumb">
                                    <img src="{{ asset('frontend_assets') }}/assets/img/banner/user.jpg" alt="img">
                                </div>
                                <a href="#">Stiven Jackson</a>
                            </div>
                            <div class="date ms-auto">
                                <i class="fa fa-clock-o"></i>
                                    Mar 16, 2022
                            </div>
                            <div class="comment ms-auto">
                                0
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="media-post-wrap">
                        <div class="thumb mb-4">
                            <img src="{{ asset('frontend_assets') }}/assets/img/blog/playing-2.jpg" alt="img">
                        </div>
                        <div class="media-body ms-0">
                            <a class="tag top-right tag-blue" href="#">Sports</a>
                            <h4><a href="blog-category.html">The golden rules of midlife fitness and things getting wrong.</a></h4>
                        </div>
                        <div class="meta d-flex">
                            <div class="author">
                                <div class="thumb">
                                    <img src="{{ asset('frontend_assets') }}/assets/img/banner/user.jpg" alt="img">
                                </div>
                                <a href="#">Stiven Jackson</a>
                            </div>
                            <div class="date ms-auto">
                                <i class="fa fa-clock-o"></i>
                                    Mar 16, 2022
                            </div>
                            <div class="comment ms-auto">
                                0
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="media-post-wrap">
                        <div class="thumb mb-4">
                            <img src="{{ asset('frontend_assets') }}/assets/img/blog/neon-light-1.jpg" alt="img">
                        </div>
                        <div class="media-body ms-0">
                            <a class="tag top-right tag-red" href="#">Motivation</a>
                            <h4><a href="blog-category.html">The golden rules of midlife fitness and things getting wrong.</a></h4>
                        </div>
                        <div class="meta d-flex">
                            <div class="author">
                                <div class="thumb">
                                    <img src="{{ asset('frontend_assets') }}/assets/img/banner/user.jpg" alt="img">
                                </div>
                                <a href="#">Stiven Jackson</a>
                            </div>
                            <div class="date ms-auto">
                                <i class="fa fa-clock-o"></i>
                                    Mar 16, 2022
                            </div>
                            <div class="comment ms-auto">
                                0
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
