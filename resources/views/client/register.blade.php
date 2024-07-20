@extends('layouts.master')
@section('content')
<section id="content-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-8">

                <!-- register box -->
                <div class="register-box">
                    <div class="title-section">
                        <h1><span>Đăng kí tài khoản</span></h1>
                    </div>
                    <form id="register-form">
                        <p>Hãy đăng kí tài khoản của bạn với các trường 
                            thông tin bắt buộc dứoi đây
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="first-name">Họ </label>
                                <input id="first-name" name="first-name" type="text">
                            </div>
                            <div class="col-md-6">
                                <label for="last-name">Tên</label>
                                <input id="last-name" name="last-name" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input id="email" name="email" type="text">
                            </div>
                            <div class="col-md-6">
                                <label for="username2">Tên người dùng</label>
                                <input id="username2" name="username" type="text">
                            </div>
                        </div>
                        <label for="password2">Mật khẩu</label>
                        <input id="password2" name="password" type="password">
                        <label for="repeat-password">Nhập lại mật khẩu</label>
                        <input id="repeat-password" name="repeat-password" type="password">
                        <div class="user-thumbnail">
                            <input type="file" name="user-thumb" id="user-thumb"/>
                            <span>Tải ảnh lên</span>
                            <div class="thumb-holder">
                                <span>100x100</span>
                            </div>
                        </div>
                        <button type="submit" id="submit-register2">
                            <i class="fa fa-paper-plane"></i> Sign Up
                        </button>
                    </form>
                </div>
                <!-- End register box -->

            </div>

            <div class="col-lg-4 sidebar-sticky">
                
                <!-- Sidebar -->
                @include('layouts.partials.slidebar');

            </div>
        </div>

        <!-- Advertisement -->
        {{-- <div class="advertisement">
            <a href="#"><img src="upload/addsense/620x80grey.jpg" alt=""></a>
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