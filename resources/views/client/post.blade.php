@extends('layouts.master')
@section('content')
\
<section id="content-section">
    <div class="container">

        <div class="row">

            <div class="col-lg-4 sidebar-sticky">
                
                <!-- Sidebar -->
                @include('layouts.partials.slidebar');

            </div>
            <div class="col-lg-8">
                
                <!-- Posts-block -->
                <div class="posts-block standard-box">
                    <div class="title-section">
                        <h1>Category Layout 4</h1>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="news-post standart-post">
                                <div class="post-image">
                                    <a href="single-post-2.html">
                                        <img src="{{asset('client/upload/blog/s2.jpg')}}" alt="">
                                    </a>
                                    <a href="#" class="category category-tech">Tech</a>
                                </div>
                                <h2><a href="single-post.html">New alternatives are more productive</a></h2>
                                <ul class="post-tags">
                                    <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                    <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                    <li><i class="lnr lnr-eye"></i>872 Views</li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="news-post standart-post">
                                <div class="post-image">
                                    <a href="single-post-2.html">
                                        <img src="{{asset('client/upload/blog/s4.jpg')}}" alt="">
                                    </a>
                                    <a href="#" class="category category-food">Food</a>
                                </div>
                                <h2><a href="single-post.html">Traditional food</a></h2>
                                <ul class="post-tags">
                                    <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                    <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                    <li><i class="lnr lnr-eye"></i>872 Views</li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="news-post standart-post">
                                <div class="post-image">
                                    <a href="single-post-2.html">
                                        <img src="{{asset('client/upload/blog/s3.jpg')}}" alt="">
                                    </a>
                                    <a href="#" class="category category-world">Lifestyle</a>
                                </div>
                                <h2><a href="single-post.html">Hapier Child</a></h2>
                                <ul class="post-tags">
                                    <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                    <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                    <li><i class="lnr lnr-eye"></i>872 Views</li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="news-post standart-post">
                                <div class="post-image">
                                    <a href="single-post-2.html">
                                        <img src="{{asset('client/upload/blog/s5.jpg')}}" alt="">
                                    </a>
                                    <a href="#" class="category category-food">Food</a>
                                </div>
                                <h2><a href="single-post.html">Fruits and Vegetables</a></h2>
                                <ul class="post-tags">
                                    <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                    <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                    <li><i class="lnr lnr-eye"></i>872 Views</li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="news-post standart-post">
                                <div class="post-image">
                                    <a href="single-post-2.html">
                                        <img src="{{asset('client/upload/blog/s6.jpg')}}" alt="">
                                    </a>
                                    <a href="#" class="category category-world">World</a>
                                </div>
                                <h2><a href="single-post.html">United States celebrate</a></h2>
                                <ul class="post-tags">
                                    <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                    <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                    <li><i class="lnr lnr-eye"></i>872 Views</li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="news-post standart-post">
                                <div class="post-image">
                                    <a href="single-post-2.html">
                                        <img src="{{asset('client/upload/blog/s8.jpg')}}" alt="">
                                    </a>
                                    <a href="#" class="category category-tech">Tech</a>
                                </div>
                                <h2><a href="single-post.html">Technology Remote Jobs</a></h2>
                                <ul class="post-tags">
                                    <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                    <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                    <li><i class="lnr lnr-eye"></i>872 Views</li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="news-post standart-post">
                                <div class="post-image">
                                    <a href="single-post-2.html">
                                        <img src="{{asset('client/upload/blog/s23.jp')}}g" alt="">
                                    </a>
                                    <a href="#" class="category category-travel">Travel</a>
                                </div>
                                <h2><a href="single-post.html">Travelling is part of our life</a></h2>
                                <ul class="post-tags">
                                    <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                    <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                    <li><i class="lnr lnr-eye"></i>872 Views</li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="news-post standart-post">
                                <div class="post-image">
                                    <a href="single-post-2.html">
                                        <img src="{{asset('client/upload/blog/s19.jp')}}g" alt="">
                                    </a>
                                    <a href="#" class="category category-lifestyle">Politics</a>
                                </div>
                                <h2><a href="single-post.html">Protests against violence</a></h2>
                                <ul class="post-tags">
                                    <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                    <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                    <li><i class="lnr lnr-eye"></i>872 Views</li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="news-post standart-post">
                                <div class="post-image">
                                    <a href="single-post-2.html">
                                        <img src="{{asset('client/upload/blog/s24.jp')}}g" alt="">
                                    </a>
                                    <a href="#" class="category category-travel">Travel</a>
                                </div>
                                <h2><a href="single-post.html">Travelling is part of our life</a></h2>
                                <ul class="post-tags">
                                    <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                    <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                    <li><i class="lnr lnr-eye"></i>872 Views</li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="news-post standart-post">
                                <div class="post-image">
                                    <a href="single-post-2.html">
                                        <img src="{{asset('client/upload/blog/s27.jp')}}g" alt="">
                                    </a>
                                    <a href="#" class="category category-lifestyle">Politics</a>
                                </div>
                                <h2><a href="single-post.html">Protests against violence</a></h2>
                                <ul class="post-tags">
                                    <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                    <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                    <li><i class="lnr lnr-eye"></i>872 Views</li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>

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
        </div>

        <!-- Advertisement -->
        {{-- <div class="advertisement">
            <a href="#"><img src="{{asset('client/upload/addsense/62')}}0x80grey.jpg" alt=""></a>
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
                                <img src="{{asset('client/upload/blog/s10.jp')}}g" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="{{asset('client/upload/blog/s12.jp')}}g" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="{{asset('client/upload/blog/s15.jp')}}g" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="{{asset('client/upload/blog/s16.jp')}}g" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="{{asset('client/upload/blog/s18.jp')}}g" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="{{asset('client/upload/blog/s23.jp')}}g" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="{{asset('client/upload/blog/s24.jp')}}g" alt="">
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