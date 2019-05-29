@extends('layouts.app')
@section('content')
    @include('admin.includes.error')
    <header class="page-header">
        <h2>@lang('actions.edit') Answer</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{route('home')}}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Edit</span></li>
                <li><span>Answer</span></li>
            </ol>
            <a class="sidebar-right-toggle"></a>
        </div>
    </header>

    <!-- start: page -->
    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal form-bordered" action="{{route('answer.update', ['id' => $answer->id])}}" method="POST">
                {{ csrf_field() }}
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Edit Answer: {{$answer->content}}</h2>
                    </header>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputContent">Content <span
                                        class="required">*</span></label>
                            <div class="col-md-6">
                                <input value="{{$answer->content}}" type="text" class="form-control" id="inputContent" name="content" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputQuestion">Question <span
                                        class="required">*</span></label>
                            <div class="col-md-6">
                                <select class="form-control mb-md" id="inputQuestion" name="question_id" required>
                                    @foreach($questions as $question)
                                        @if($question->id == $answer->question_id)
                                            <option selected value="{{$question->id}}">{{$question->title}}</option>
                                        @else
                                            <option value="{{$question->id}}">{{$question->title}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputRight">Right<span
                                        class="required">*</span></label>
                            <div class="col-md-6">
                                <select class="form-control mb-md" id="inputRight" name="right" required>
                                    @if($answer->right == 1)
                                        <option selected value="1">Right</option>
                                        <option value="0">Wrong</option>
                                    @else
                                        <option value="0">Wrong</option>
                                        <option value="1">Right</option>
                                    @endif
                                </select>
                            </div>
                        </div>
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