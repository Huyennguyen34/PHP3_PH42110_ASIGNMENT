@extends('layouts.master')
@section('content')
<section id="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                
                <!-- single-post -->
                    <div class="single-post">
                    <h1>{{$post->title}}</h1>
                    <ul class="post-tags">
                        <li><i class="lnr lnr-user"></i>by <a href="#">{{$post->author}}</a></li>
                        <li><a href="#"><i class="lnr lnr-book"></i><span>{{$post->comment}}bình luận</span></a></li>
                        <li><i class="lnr lnr-eye"></i>{{$post->view}} lượt xem</li>
                    </ul>
                    <img src="{{asset('client/upload/blog'.$post->thumbnail)}}" alt="">
                    <div class="text-boxes">
                        <h2>{{$post->descrtiption_short}}</h2>
                        <p>{{$post->text}}</p>
                        <h2>Tags</h2>
                        <ul class="tags-list">
                            <li><a href="#">Thế giới</a></li>
                            <li><a href="#">Bóng đá</a></li>
                            <li><a href="#">Trong nước</a></li>
                            <li><a href="#">Du lịch</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End single-post -->

                <!-- Advertisement -->
                <div class="advertisement">
                    <a href="#"><img src="{{asset('client/upload/addsense/620')}}x80grey.jpg" alt=""></a>
                </div>
                <!-- End Advertisement -->
                
                <!-- Posts-block -->
                <div class="posts-block featured-box">
                    <div class="title-section">
                        <h1>You Might also Like</h1>
                    </div>

                    <div class="owl-wrapper">
                        <div class="owl-carousel" data-num="3">
                        
                            <div class="item">
                                <div class="news-post standart-post">
                                    <div class="post-image">
                                        <a href="single-post-2.html">
                                            <img src="{{asset('client/upload/blog/s24.jpg')}}" alt="">
                                        </a>
                                        <a href="#" class="category category-fashion">fashion</a>
                                    </div>
                                    <h2><a href="single-post.html">Autumn wear ...</a></h2>
                                    <ul class="post-tags">
                                        <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                        <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        
                            <div class="item">
                                <div class="news-post standart-post">
                                    <div class="post-image">
                                        <a href="single-post-2.html">
                                            <img src="{{asset('client/upload/blog/s25.jpg')}}" alt="">
                                        </a>
                                        <a href="#" class="category category-world">world</a>
                                    </div>
                                    <h2><a href="single-post.html">Travelling is part of our life</a></h2>
                                    <ul class="post-tags">
                                        <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                        <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        
                            <div class="item">
                                <div class="news-post standart-post">
                                    <div class="post-image">
                                        <a href="single-post-2.html">
                                            <img src="{{asset('client/upload/blog/s26.jpg')}}" alt="">
                                        </a>
                                        <a href="#" class="category category-food">food</a>
                                    </div>
                                    <h2><a href="single-post.html">Traditional food</a></h2>
                                    <ul class="post-tags">
                                        <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                        <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        
                            <div class="item">
                                <div class="news-post standart-post">
                                    <div class="post-image">
                                        <a href="single-post-2.html">
                                            <img src="{{asset('client/upload/blog/s27.jpg')}}" alt="">
                                        </a>
                                        <a href="#" class="category">Politics</a>
                                    </div>
                                    <h2><a href="single-post.html">New alternatives are more productive</a></h2>
                                    <ul class="post-tags">
                                        <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                        <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        
                            <div class="item">
                                <div class="news-post standart-post">
                                    <div class="post-image">
                                        <a href="single-post-2.html">
                                            <img src="{{asset('client/upload/blog/s28.jpg')}}" alt="">
                                        </a>
                                        <a href="#" class="category category-travel">Travel</a>
                                    </div>
                                    <h2><a href="single-post.html">Visiting antic countries is John Doe hobby.</a></h2>
                                    <ul class="post-tags">
                                        <li><i class="lnr lnr-user"></i>by <a href="#">John Doe</a></li>
                                        <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                </div>
                <!-- End Posts-block -->

                <!-- author-profile -->
                <div class="author-profile">
                    <div class="author-box">
                        <img alt="" src="upload/users/avatar6.jpg">
                        <div class="author-content">
                            <h4>Helena Doe <a href="#">14 posts</a></h4>
                            <p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam. </p>
                            <ul class="author-social">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End author-profile -->

                <!-- comment area box -->
                <div class="comment-area-box">
                    <div class="title-section">
                        <h1><span>5 Comments</span></h1>
                    </div>
                    <ul class="comment-tree">
                        <li>
                            <div class="comment-box">
                                <img alt="" src="{{asset('client/upload/users/avatar3.jpg')}}">
                                <div class="comment-content">
                                    <h4>Fiona Herrerez <a href="#"><i class="fa fa-comment-o"></i>Reply</a></h4>
                                    <span><i class="fa fa-clock-o"></i>27 Jann 2018 at 8:57 pm</span>
                                    <p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam. </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="comment-box">
                                <img alt="" src="{{asset('client/upload/users/avatar1.jpg')}}">
                                <div class="comment-content">
                                    <h4>John Doe <a href="#"><i class="fa fa-comment-o"></i>Reply</a></h4>
                                    <span><i class="fa fa-clock-o"></i>27 Jann 2018 at 8:57 pm</span>
                                    <p>Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu. Ut scelerisque hendrerit tellus. Integer sagittis. </p>
                                </div>
                            </div>
                            <ul class="depth">
                                <li>
                                    <div class="comment-box">
                                        <img alt="" src="{{asset('client/upload/users/avatar2.jpg')}}">
                                        <div class="comment-content">
                                            <h4>John Doe <a href="#"><i class="fa fa-comment-o"></i>Reply</a></h4>
                                            <span><i class="fa fa-clock-o"></i>27 Jann 2018 at 8:57 pm</span>
                                            <p>CNullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non. </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <div class="comment-box">
                                <img alt="" src="{{asset('client/upload/users/avatar4.jpg')}}">
                                <div class="comment-content">
                                    <h4>John Doe <a href="#"><i class="fa fa-comment-o"></i>Reply</a></h4>
                                    <span><i class="fa fa-clock-o"></i>27 Jann 2018 at 8:57 pm</span>
                                    <p>Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu. Ut scelerisque hendrerit tellus. Integer sagittis. </p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="comment-box">
                                <img alt="" src="{{asset('client/upload/users/avatar5.jpg')}}">
                                <div class="comment-content">
                                    <h4>Maria Lilly <a href="#"><i class="fa fa-comment-o"></i>Reply</a></h4>
                                    <span><i class="fa fa-clock-o"></i>27 Jann 2018 at 8:57 pm</span>
                                    <p>Nullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel. </p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- End comment area box -->

                <!-- contact form box -->
                <div class="contact-form-box">
                    <div class="title-section">
                        <h1><span>Leave a Comment</span> <span class="email-not-published">Your email address will not be published.</span></h1>
                    </div>
                    <form id="comment-form">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">Name*</label>
                                <input id="name" name="name" type="text">
                            </div>
                            <div class="col-md-6">
                                <label for="mail">E-mail*</label>
                                <input id="mail" name="mail" type="text">
                            </div>
                        </div>
                        <label for="website">Website</label>
                        <input id="website" name="website" type="text">
                        <label for="comment">Comment*</label>
                        <textarea id="comment" name="comment"></textarea>
                        <button type="submit" id="submit-contact">
                            <i class="fa fa-comment"></i> Post Comment
                        </button>
                    </form>
                </div>
                <!-- End contact form box -->

            </div>

            <div class="col-lg-4 sidebar-sticky">
                
                <!-- Sidebar -->
                @include('layouts.partials.slidebar');

            </div>
        </div>

        <!-- Advertisement -->
        <div class="advertisement">
            <a href="#"><img src="{{asset('client/upload/addsense/620x80gr')}}ey.jpg" alt=""></a>
        </div>
        <!-- End Advertisement -->

        <!-- more from news box -->
        <div class="more-from-news">
            <h1>Weekly Top News</h1>
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="{{asset('client/upload/blog/s1.jpg" alt=')}}">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="{{asset('client/upload/blog/s3.jpg" alt=')}}">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="{{asset('client/upload/blog/s6.jpg" alt=')}}">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="{{asset('client/upload/blog/s8.jpg" alt=')}}">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="upload/blog/s9.jpg" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="upload/blog/s10.jpg" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="upload/blog/s12.jpg" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="upload/blog/s15.jpg" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="upload/blog/s16.jpg" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="upload/blog/s18.jpg" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="upload/blog/s23.jpg" alt="">
                            </a>
                        </div>
                        <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="news-post thumb-post">
                        <div class="post-image">
                            <a href="single-post-2.html">
                                <img src="upload/blog/s24.jpg" alt="">
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