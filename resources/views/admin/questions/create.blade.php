@extends('layouts.app')
@section('content')
    @include('admin.includes.error')
    <header class="page-header">
        <h2>New Question</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{route('home')}}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>New</span></li>
                <li><span>Question</span></li>
            </ol>
            <a class="sidebar-right-toggle"></a>
        </div>
    </header>

    <!-- start: page -->
    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal form-bordered" action="{{route('question.store')}}" method="POST">
                {{ csrf_field() }}
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Add Question</h2>
                    </header>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputTitle">Title <span
                                        class="required">*</span></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="inputTitle" name="title" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputQuestionValue">Question value <span
                                        class="required">*</span></label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" id="inputQuestionValue" name="question_value" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputQuiz">Quiz <span
                                        class="required">*</span></label>
                            <div class="col-md-6">
                                <select class="form-control mb-md" id="inputQuiz" name="quiz_id" required>
                                    @foreach($quizzes as $quiz)
                                        <option value="{{$quiz->id}}">{{$quiz->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputQuestionType">Theme<span
                                        class="required">*</span></label>
                            <div class="col-md-6">
                                <select class="form-control mb-md" id="inputThemeId" name="theme_id" required>
                                    @foreach($themes as $theme)
                                        <option value="{{$theme->id}}">{{$theme->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        {{--@for($question=1;$question<=4;$question++)--}}
                        {{--<div class="form-group">--}}

                            {{--<label class="col-md-3 control-label" for="inputContent">Content <span--}}
                                        {{--class="required">*</span></label>--}}
                            {{--<div class="col-md-6">--}}

                                {{--<input type="text" class="form-control" id="inputContent" name="content" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}







                        {{--<div class="form-group">--}}
                            {{--<label class="col-md-3 control-label" for="inputRight">Right<span--}}
                                        {{--class="required">*</span></label>--}}
                            {{--<div class="col-md-6">--}}
                                {{--<select class="form-control mb-md" id="inputRicght" name="right" required>--}}
                                    {{--<option value="1">Right</option>--}}
                                    {{--<option value="0">Wrong</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--@endfor--}}
                    </div>


                    <footer class="panel-footer">
                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                        </div>
                    </footer>
                </section>
            </form>
        </div>
    </div>
@endsection