@extends('layouts\frontend\frontendmaster')

@section('content')



<div class="container">
    <div class="breadcrumb-area">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="theme-breacrumb-title">Contact</h1>
            </div>
        </div>
    </div>
</div>

<!-- about-area start -->
<div class="about-area pd-top-100 pd-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="media-post-wrap mb-0">
                    <div class="thumb mb-5">
                        <img class="w-100" src="{{ asset('frontend_assets') }}/assets/img/blog/contact.jpg" alt="img">
                    </div>
                    <h3>
                        Say Hello
                    </h3>
                    <p>Nec nascetur mus vicolor rhoncus augue quisque parturient etiam imperdet sit nisi tellus faucibus
                        orcimperdiet venena nullam rhoncus curabitur monteante. Vestibulum sed gravida nibh. Suscipito
                        econgue lorem, id tempor ipsum molestie sit amet. Nulla ultricies vitae erat in tincidunt.
                        Maecenas tempus quam et ipsum elementum, a efficitur lectus tincidunt.</p>
                    <p class="mb-5">Cras id ligula consequat, sagittis nulla at, sollicitudin lorem. Orci varius natoque
                        penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus eleifend, dolor vel
                        condimentum imperdiet.</p>
                    <h3 class="mt-5">Send Us a Message</h3>
                    <p>Your email address will not be published. All the fields are required.</p>
                    <form class="comment-form mt-5" action="{{ route('message') }}" method="POST">
                        @csrf
                        {{-- all error part  --}}
                        @if($errors->all())
                        <div class="col-lg-12">
                            <div class="alert alert-danger solid alert-dismissible fade show">
                                @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        {{-- all error part  --}}
                        {{-- Breaking  News info success msg  --}}
                        <div class="col-lg-12">
                            @if(session('success'))
                            <div class="alert alert-success solid alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                </svg>
                                <strong>Success!</strong> {{session('success')}}
                            </div>
                            @endif
                        </div>
                        {{-- Breaking  News info success msg  --}}
                        <div class="row">
                            <div class="col-md-6">
                                <label class="mb-3">Your Name</label>
                                <div class="single-input-wrap">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-3">Your Number</label>
                                <div class="single-input-wrap">
                                    <input type="tel" class="form-control" name="number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-3">Your Email</label>
                                <div class="single-input-wrap">
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="mb-3">Message</label>
                                <div class="single-input-wrap single-textarea-wrap">
                                    <textarea rows="6" name="message"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-main">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="section-title pb-0">
                    <h4 class="title left-line">Popular Posts</h4>
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
                        <h6><a href="blog-category.html">Apollo astronauts harmed by a the deep space radiation.</a>
                        </h6>
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
                        <h6><a href="blog-category.html">The golden rules of midlife fitness and things getting
                                wrong.</a></h6>
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
                        <img src="{{ asset('frontend_assets') }}/assets/img/blog/protest-1.jpg" alt="img">
                    </div>
                    <div class="media-body">
                        <h6><a href="blog-category.html">Huge glacier collapses in Arge.</a></h6>
                        <div class="meta d-flex">
                            <div class="tag"><a href="#">Politics</a></div>
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
                        <a href="#">Business</a>
                        <a href="#">Digital Marketing</a>
                        <a href="#">Lifestyle</a>
                        <a href="#">Sports</a>
                        <a href="#">Technology</a>
                        <a href="#">Travel</a>
                        <a href="#">Trendy</a>
                        <a href="#">World</a>
                    </div>
                </div>
                <div class="ad-area">
                    <a href="#">
                        <img src="{{ asset('frontend_assets') }}/assets/img/ad/add.png" alt="img">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about-area end -->

@endsection
