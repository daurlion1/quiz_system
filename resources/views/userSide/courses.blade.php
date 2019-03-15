@extends('layouts.userSide')
@section('content')
    <div class="home">
        <div class="breadcrumbs_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="breadcrumbs_list d-flex flex-row align-items-center justify-content-start">
                            <li><a href="index.html">home</a></li>
                            <li><a href="courses.html">courses</a></li>
                            <li>english</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="language">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="language_title">Learn Languages Easily</div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="language_slider_container">

                        <!-- Language Slider -->

                        <div class="owl-carousel owl-theme language_slider">

                            <!-- Flag -->
                            <div class="owl-item language_item">
                                <a href="#">
                                    <div class="flag"><img src="{{asset('userSide/images/English.svg')}}" alt=""></div>
                                    <div class="lang_name">English</div>
                                </a>
                            </div>
                        </div>

                        <div class="lang_nav lang_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                        <div class="lang_nav lang_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="courses">
        <div class="container">
            <div class="row courses_row">

                <!-- Course -->
                @foreach($subjects as $subject)
                    <div class="col-lg-4 course_col">
                        <div class="course">
                            <div class="course_image"><img src="{{asset('userSide/images/course_4.jpg')}}" alt=""></div>
                            <div class="course_body">
                                <div class="course_title"><a href="course.html">{{$subject->name}}</a></div>
                                <div class="course_info">
                                    <ul>
                                        <li><a href="instructors.html">Sarah Parker</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                                <div class="course_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
                                </div>
                            </div>
                            <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                                <div class="course_students"><i class="fa fa-user"
                                                                aria-hidden="true"></i><span>10</span></div>
                                <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span>
                                </div>
                                <div class="course_mark course_free trans_200"><a href="#">Free</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('userSide/styles/courses.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('userSide/styles/courses_responsive.css')}}">
@endsection
@section('scripts')
    <script src="{{asset('userSide/js/courses.js')}}"></script>
@endsection
