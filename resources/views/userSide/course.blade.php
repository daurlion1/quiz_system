@extends('layouts.userSide')
@section('content')
    <div class="home">
        <div class="breadcrumbs_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="breadcrumbs_list d-flex flex-row align-items-center justify-content-start">
                            <li><a href="{{route('index')}}">@lang('tables.home')</a></li>
                            <li><a href="{{route('courses')}}">@lang('userSide.courses')</a></li>
                            <li>{{$subject->name}}</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Intro -->

    <div class="intro">
        <div class="intro_background parallax-window" data-parallax="scroll"
             data-image-src="{{asset('userSide/images/course_5.jpg')}}" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="intro_container d-flex flex-column align-items-start justify-content-end">
                        <div class="intro_content">
                            <div class="intro_price">Free</div>
                            <div class="intro_title">{{$subject->name}}</div>
                            <div class="intro_meta">
                                <div class="intro_image"><img src="{{asset($subject->teacher->first()->user->profile->avatar)}}" alt="">
                                </div>
                                <div class="intro_instructors">{{$teacher}}</a> and <span>{{$count}} other instructors</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Course -->

    <div class="course">
        <div class="course_top"></div>
        <div class="container">
            <div class="row row-lg-eq-height">

                <!-- Panels -->
                <div class="col-lg-9">
                    <div class="tab_panels">

                        <!-- Tabs -->
                        <div class="course_tabs_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="tabs d-flex flex-row align-items-center justify-content-start">
                                            <div class="tab active">@lang('userSide.description')</div>
                                            <div class="tab">curriculum</div>
                                            <div class="tab">members</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="tab_panel description active">
                            <div class="panel_title">About this course</div>
                            <div class="panel_text">
                                <p>{{$subject->description}}</p>
                            </div>


                        </div>

                        <!-- Curriculum -->
                        <div class="tab_panel curriculum">
                            <div class="panel_title">Syllabus</div>
                            <div class="panel_text">
                                <p>{{$subject->description}}</p>
                            </div>
                            <div class="curriculum_items">
                                @foreach($materials as $material)
                                    <div class="cur_item">
                                        <div class="cur_title_container d-flex flex-row align-items-start justify-content-start">
                                            <div class="cur_title">Week {{$i++}}</div>
                                            <div class="cur_num ml-auto">{{$i-1}}/{{count($materials)}}</div>
                                        </div>
                                        <div class="cur_item_content">
                                            <div class="cur_item_title"></div>
                                            <div class="cur_item_text">
                                            </div>
                                            <div class="cur_contents">
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-folder" aria-hidden="true"></i><span></span>
                                                        <ul>
                                                            @foreach($material as $material_theme)

                                                                <li class="d-flex flex-row align-items-center justify-content-start">
                                                                    <i class="fa fa-video-camera"
                                                                       aria-hidden="true"></i><span> @if($material_theme->title == 'Video')
                                                                            Video:
                                                                        @elseif($material_theme->title == 'Audio') Audio:
                                                                        @else Document:

                                                                        @endif
                                                                                <a href="{{env('APP_URL').$material_theme->extension}}" target="_blank">
                                                                                {{$material_theme->name}}</a></span>
                                                                    <div class="cur_time ml-auto"><i
                                                                                class="fa fa-clock-o"
                                                                                aria-hidden="true"></i><span></span>
                                                                    </div>
                                                                </li>
                                                            @endforeach


                                                        </ul>


                                                    </li>
                                                    {{--<li class="d-flex flex-row align-items-center justify-content-start">--}}
                                                    {{--<i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Graded: Cumulative Language Quiz</span>--}}
                                                    {{--<div class="cur_time ml-auto"><span>3 Questions</span></div>--}}
                                                    {{--</li>--}}
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Members -->
                        <div class="tab_panel members">
                            <div class="panel_title">Members</div>
                            <div class="panel_text">
                                <p>Teachers who is teach this course.</p>
                            </div>
                            <div class="members_list d-flex flex-row flex-wrap align-items-start justify-content-start">

                                <!-- Member -->
                                @foreach($subject->teachers as $steacher)
                                    <div class="member">
                                        <div class="member_image"><img src="{{asset($steacher->user->profile->avatar)}}"
                                                                       alt=""></div>
                                        <div class="member_title"><a href="#">{{$steacher->name}}</a></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="sidebar_background"></div>
                        <div class="sidebar_top"><a href="{{route('quiz.show', ['id' => $quiz_id])}}">Go to test</a></div>
                        <div class="sidebar_content">

                            <!-- Features -->
                            <div class="sidebar_section features">
                                <div class="sidebar_title">Course Features</div>
                                <div class="features_content">
                                    <ul class="features_list">

                                        <!-- Feature -->
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="feature_title"><i class="fa fa-clock-o"
                                                                          aria-hidden="true"></i><span>Duration</span>
                                            </div>
                                            <div class="feature_text ml-auto">{{$i-1}} weeks</div>
                                        </li>

                                        <!-- Feature -->
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="feature_title"><i class="fa fa-bell"
                                                                          aria-hidden="true"></i><span>Lectures</span>
                                            </div>
                                            <div class="feature_text ml-auto">{{count($materials)}}</div>
                                        </li>

                                        <!-- Feature -->
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="feature_title"><i class="fa fa-id-badge" aria-hidden="true"></i><span>Quizzes</span>
                                            </div>
                                            <div class="feature_text ml-auto">{{$subject->quizzes->count()}}</div>
                                        </li>

                                        {{--<!-- Feature -->--}}
                                        {{--<li class="d-flex flex-row align-items-start justify-content-start">--}}
                                            {{--<div class="feature_title"><i class="fa fa-thumbs-up"--}}
                                                                          {{--aria-hidden="true"></i><span>Pass Percentage</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="feature_text ml-auto">60</div>--}}
                                        {{--</li>--}}

                                        {{--<!-- Feature -->--}}
                                        {{--<li class="d-flex flex-row align-items-start justify-content-start">--}}
                                            {{--<div class="feature_title"><i class="fa fa-thumbs-down"--}}
                                                                          {{--aria-hidden="true"></i><span>Max Retakes</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="feature_text ml-auto">5</div>--}}
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Cert -->


                            <!-- You may like -->
                            <div class="sidebar_section like">
                                <div class="sidebar_title">You may like</div>
                                <div class="like_items">

                                    <!-- Like Item -->
                                    @foreach($subjects as $subject)
                                        <div class="like_item d-flex flex-row align-items-end justify-content-start">
                                            <div class="like_title_container">
                                                <div class="like_title">{{$subject->name}}</div>
                                            </div>
                                            <div class="like_price ml-auto">Free</div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('userSide/styles/course.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('userSide/styles/course_responsive.css')}}">
@endsection
@section('scripts')
    <script src="{{asset('userSide/js/course.js')}}"></script>
    <script src="{{asset('userSide/plugins/parallax-js-master/parallax.min.js')}}"></script>
    <script src="{{asset('plugins/progressbar/progressbar.min.js')}}"></script>

@endsection
