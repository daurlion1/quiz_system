@extends('layouts.userSide')
@section('content')
<div class="instructors">
    <div class="instructors_background" style="background-image:url({{asset('userSide/images/instructors_background.png')}})"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="section_title text-center">The Best Tutors in Town</h2>
            </div>
        </div>
        <div class="row instructors_row">

            @foreach($teachers as $teacher)
            <div class="col-lg-4 instructor_col">
                <div class="instructor text-center">
                    <div class="instructor_image_container">
                        <div class="instructor_image"><img src="{{$teacher->user->profile->avatar}}"
                            height="150px" class="zaebal"></div>
                    </div>
                    <div class="instructor_name">{{$teacher->name}}</div>
                    <div class="instructor_title">Teacher</div>
                    <div class="instructor_text">
                        <p>{{$teacher->department->name}}</p>
                    </div>
                    <div class="instructor_social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
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
    <link rel="stylesheet" type="text/css" href="{{asset('userSide/styles/instructors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('userSide/styles/instructors_responsive.css')}}">
@endsection
@section('scripts')
    <script src="{{asset('userSide/js/instructors.js')}}"></script>
@endsection