<div class="col-lg-8">
                    <div class="media-post-wrap mb-0">
                        <div class="thumb mb-4">
                            <img class="w-100" src="{{ asset('uploads/news_photo') }}/{{$makenewses->news_thamnil }}" alt="img">
                        </div>
                        <div class="media-body pt-1 ms-0">
                            <a class="tag top-right tag-pest" href="#">{{ $makenewses->category->category_name }}</a>
                            <h1>In the news: {{$makenewses->news_title }}</h1>
                        </div>
                        <div class="meta d-flex">
                            <div class="author">
                                <div class="thumb">
                                    <img src="{{ asset('uploads/profile_photo') }}/{{ auth()->user()->profile_photo }}" alt="img">
                                </div>
                                <a href="#">{{ auth()->user()->name }}</a>
                            </div>
                            <div class="date">
                                <i class="fa fa-clock-o"></i>
                                    {{$makenewses->news_time_date }}
                            </div>
                        </div>
                        <p class="mb-3">{{$makenewses->description }}</p>

                        <div class="blog-tag-area mt-4">
                            <h4>Tags:</h4>
                            @foreach ($inventories as $inventory)
                                <a href="#">{{ $inventory->newstag->news_tag }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
