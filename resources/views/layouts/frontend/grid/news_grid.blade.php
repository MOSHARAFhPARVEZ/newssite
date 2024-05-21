<div class="col-lg-6">
                    <div class="top-post-wrap">
                        <div class="thumb">
                            <img src="{{ asset('uploads/news_photo') }}/{{ $news->news_thamnil }}" alt="img">
                        </div>
                        <div class="top-post-details top-post-details-2">
                            <a class="tag top-right tag-purple" href="#">{{ $news->category->category_name }}</a>
                            <h3><a href="{{ route('makenewsdetails',$news->id) }}">{{ $news->news_title }}</a></h3>
                            <div class="meta mt-2">
                                <div class="user">
                                    <div class="thumb">
                                        <img src="{{ asset('uploads/profile_photo') }}/{{ auth()->user()->profile_photo }}" alt="img">
                                    </div>
                                    <a href="#">{{ auth()->user()->name }}</a>
                                </div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
						                {{ $news->news_time_date }}
                                </div>
                                <div class="comment">
                                    1
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
