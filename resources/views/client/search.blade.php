@extends('layouts.master')
@section('content')
<section id="content-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-8">

                <!-- search-results box -->
                <div class="search-results-box">
                    <div class="search-results-banner">
                        <h1>Search results for  <span>'Lorem'</span></h1>
                    </div>
                    <div class="search-box">
                        <form role="search" class="search-form">
                            <input type="text" id="search" name="search" placeholder="Search here">
                            <button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <!-- End search-results box -->
                
                <!-- Posts-block -->
                <div class="posts-block articles-box">
                    
                    <div class="news-post article-post">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="post-image">
                                    <a href="single-post-2.html">
                                        <img src="{{asset('client/upload/blog/s3.jpg')}}" alt="">
                                    </a>
                                    <a class="category category-travel" href="#">Travel</a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <h2><a href="single-post.html">New alternatives are more productive</a></h2>
                                <ul class="post-tags">
                                    <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                    <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                    <li><i class="lnr lnr-eye"></i>872 Views</li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="news-post article-post">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="post-image">
                                    <a href="single-post-2.html">
                                        <img src="{{asset('client/upload/blog/s4.jpg')}}" alt="">
                                    </a>
                                    <a class="category category-food" href="#">Food</a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <h2><a href="single-post.html">New alternatives are more productive</a></h2>
                                <ul class="post-tags">
                                    <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                    <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                    <li><i class="lnr lnr-eye"></i>872 Views</li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="news-post article-post">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="post-image">
                                    <a href="single-post-2.html">
                                        <img src="{{asset('client/upload/blog/s5.jpg')}}" alt="">
                                    </a>
                                    <a class="category category-world" href="#">World</a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <h2><a href="single-post.html">New alternatives are more productive</a></h2>
                                <ul class="post-tags">
                                    <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                    <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                    <li><i class="lnr lnr-eye"></i>872 Views</li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="news-post article-post">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="post-image">
                                    <a href="single-post-2.html">
                                        <img src="{{asset('client/upload/blog/s6.jpg')}}" alt="">
                                    </a>
                                    <a class="category category-travel" href="#">Travel</a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <h2><a href="single-post.html">New alternatives are more productive</a></h2>
                                <ul class="post-tags">
                                    <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                    <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                    <li><i class="lnr lnr-eye"></i>872 Views</li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="news-post article-post">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="post-image">
                                    <a href="single-post-2.html">
                                        <img src="{{asset('client/upload/blog/s7.jpg')}}" alt="">
                                    </a>
                                    <a class="category category-tech" href="#">Tech</a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <h2><a href="single-post.html">New alternatives are more productive</a></h2>
                                <ul class="post-tags">
                                    <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                    <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                    <li><i class="lnr lnr-eye"></i>872 Views</li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="news-post article-post">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="post-image">
                                    <a href="single-post-2.html">
                                        <img src="{{asset('client/upload/blog/s8.jpg')}}" alt="">
                                    </a>
                                    <a class="category category-fashion" href="#">Fashion</a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <h2><a href="single-post.html">New alternatives are more productive</a></h2>
                                <ul class="post-tags">
                                    <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                    <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                    <li><i class="lnr lnr-eye"></i>872 Views</li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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

            <div class="col-lg-4 sidebar-sticky">
                
                <!-- Sidebar -->
                @include('layouts.partials.slidebar');

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
