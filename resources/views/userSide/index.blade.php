@extends('layouts.userSide')
@section('content')
    <div class="home">
        <div class="home_background"
             style="background-image: url({{asset('userSide/images/index_background.jpg')}});"></div>
        <div class="home_content">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="home_title">Learn Languages Easily</h1>
                        <div class="home_button trans_200"><a href="#">get started</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Language -->

    <div class="language">
        <div class="container">
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
        <div class="courses_background"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="section_title text-center">Online Courses</h2>
                </div>
            </div>
            <div class="row courses_row">

                @foreach($subjects as $subject)
                <div class="col-lg-4 course_col">
                    <div class="course">
                        <div class="course_image"><img src="{{asset('userSide/images/course_1.jpg')}}" alt=""></div>
                        <div class="course_body">
                            <div class="course_title"><a href="#"></a></div>
                            <div class="course_info">
                                <ul>
                                    <li><a href="#">{{$subject->teachers->first()->name}}</a></li>
                                    <li><a href="#">{{$subject->name}}</a></li>
                                </ul>
                            </div>
                            <div class="course_text">
                                <p>{{$subject->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </div>

    <!-- Instructors -->

    <div class="instructors">
        <div class="instructors_background"
             style="background-image:url({{asset('userSide/images/instructors_background.png')}})"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="section_title text-center">Tutors</h2>
                </div>
            </div>
            <div class="row instructors_row">

                <!-- Instructor -->
                @foreach($teachers as $teacher)
                <div class="col-lg-4 instructor_col">
                    <div class="instructor text-center">
                        <div class="instructor_image_container">
                            <div class="instructor_image"><img src="{{asset('userSide/images/instructor_1.jpg')}}"
                                                               alt=""></div>
                        </div>
                        <div class="instructor_name"><a href="#">{{$teacher->name}} {{$teacher->user->name}}</a></div>
                        <div class="instructor_title">Teacher</div>
                        <div class="instructor_text">
                            <p>{{$teacher->department->name}}</p>
                        </div>
                        <div class="instructor_social">
                            <ul>
                                {{--<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </div>
@endsection
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('userSide/styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('userSide/styles/responsive.css')}}">
@endsection
@section('scripts')
    <script src="{{asset('userSide/js/custom.js')}}"></script>
@endsection
