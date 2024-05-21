@extends('layouts\frontend\frontendmaster')
@section('content')


    <div class="container">
        <div class="breadcrumb-area">
            <div class="row justify-content-center">
                <div class="col-md-12">
					<h1 class="theme-breacrumb-title">News Details Page</h1>
				</div>
            </div>
        </div>
    </div>

    <!-- blog-area start -->
    <div class="blog-area pd-top-100 pd-bottom-100">
        <div class="container">
            <div class="row">


                {{-- news info  --}}
                    @include('layouts\frontend\grid\single_news')
                {{-- news info  --}}


                <div class="col-lg-4">
                    <div class="side-area">
                        <div class="widget widget_search">
                            <h5 class="widget-title">
                                Search
                            </h5>
                            <div class="subscribe-inner">
                                <input type="text">
                                <button class="btn">Search</button>
                            </div>
                        </div>
                        <div class="widget widget_list mt-5">
                            <h4 class="widget-title">Categories</h4>
                            @foreach ($categories as $category)
                            <ul class="list-inner">
                                <li><a href="#">{{ $category->category_name }}</a></li>
                            </ul>
                            @endforeach
                        </div>
                        <div class="ad-area pt-3">
                            <a href="#">
                                <img src="assets/img/ad/add.png" alt="img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog-area end -->

@endsection
