@extends('layouts.master')
@section('content')
<section id="content-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                
                <!-- Posts-block -->
                <!-- End Posts-block -->
                
                <!-- Posts-block -->
                <!-- End Posts-block -->

                <!-- Advertisement -->
                {{-- <div class="advertisement">
                    <a href="#"><img src="{{asset('client/upload/addsense/620x80grey.jpg')}}" alt=""></a>
                </div> --}}
                <!-- End Advertisement -->
                
                <!-- Posts-block -->
          @include('layouts.partials.post-block');
                <!-- End Posts-block -->
                
                <!-- Posts-block -->
                <div class="posts-block articles-box">
                    <div class="title-section">
                        <h1>BẢN TIN TRONG TUẦN</h1>
                    </div>
                    @foreach($data as $p)
                    {{-- @php dd($p); @endphp --}}
                    <div class="news-post article-post">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="post-image">
                                    <a href="single-post-2.html">
                                        <img src="{{asset('client/upload/blog/'.$p->thumbnail)}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <h2><a href="single-post.html">{{$p->title}}</a></h2>
                                <ul class="post-tags">
                                    <li><i class="lnr lnr-user"></i>by <a href="#">{{$p->author}}</a></li>
                                    <li><a href="#"><i class="lnr lnr-book"></i><span>{{$p->comment}} bình luận</span></a></li>
                                    <li><i class="lnr lnr-eye"></i>{{$p->view}} lượt xem</li>
                                </ul>
                                <p>{{$p->descrtiption_short}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <ul class="pagination-list">
                        <li><a href="#">Prev</a></li>
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>

                </div>
                <!-- End Posts-block -->

            </div>

            <div class="col-lg-4 sidebar-sticky">
                
                <!-- Sidebar -->
               @include('layouts.partials.slidebar');

            </div>
        </div>

        <!-- Advertisement -->
        {{-- <div class="advertisement">
            <a href="#"><img src="{{asset('client/upload/addsense/620x80grey.jpg')}}" alt=""></a>
        </div> --}}
        <!-- End Advertisement -->

        <!-- more from news box -->
        <div class="more-from-news">
            <h1>Weekly Top News</h1>
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="{{asset('client/upload/blog/s1.jpg')}}" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="{{asset('client/upload/blog/s3.jpg')}}" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="{{asset('client/upload/blog/s6.jpg')}}" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="{{asset('client/upload/blog/s8.jpg')}}" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="{{asset('client/upload/blog/s9.jpg')}}" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="{{asset('client/upload/blog/s10.jpg')}}" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="{{asset('client/upload/blog/s12.jpg')}}" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="{{asset('client/upload/blog/s15.jpg')}}" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="{{asset('client/upload/blog/s16.jpg')}}" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="{{asset('client/upload/blog/s18.jpg')}}" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="{{asset('client/upload/blog/s23.jpg')}}" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="{{asset('client/upload/blog/s24.jpg')}}" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- end more from news box -->
    </div>
</section>
@endsection