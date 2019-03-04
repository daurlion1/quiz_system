@extends('layouts.app')
@section('content')
    @include('admin.includes.error')
    <div class="card card-default">
        <div class="card-header">
            Edit Question
        </div>
        <div class="card-body">
            <form action="{{route('question.update',['id' => $question->id])}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name='title' value="{{$question->title}}">
                </div>

                <div class="form-group">
                    <label for="title">Question value</label>
                    <input type="number" class="form-control" name='question_value' value="{{$question->question_value}}">
                </div>
                <div class="form-group">
                    <label for="quiz">Quiz</label>
                    <select name="quiz_id" class="form-control" placeholder="Subject" required>
                        @foreach($quizzes as $quiz)
                            @if($quiz->id == $question->quiz_id)
                                <option selected value="{{$quiz->id}}">{{$quiz->title}}</option>
                            @else
                                <option value="{{$quiz->id}}">{{$quiz->title}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="question_type">Question type</label>
                    <select name="question_type_id" class="form-control" placeholder="Question type" required>
                        @foreach($question_types as $question_type)
                            @if($question_type->id == $question->question_type_id)
                                <option selected value="{{$question_type->id}}">{{$question_type->name}}</option>
                            @else
                                <option value="{{$question_type->id}}">{{$question_type->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success btn-block" type="submit"> Question Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection