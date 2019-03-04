@extends('layouts.app')
@section('content')
    @include('admin.includes.error')
    <div class="card card-default">
        <div class="card-header">
            Create Question
        </div>
        <div class="card-body">
            <form action="{{route('question.store')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name='title'>
                </div>
                <div class="form-group">
                    <label for="question_value">Question Value</label>
                    <input type="text" class="form-control" name='question_value'>
                </div>
                <div class="form-group">
                    <label for="quiz">Quiz</label>
                    <select name="quiz_id" class="form-control" placeholder="Quiz" required>
                        @foreach($quizzes as $quiz)
                            <option value="{{$quiz->id}}">{{$quiz->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="question_type">Question type</label>
                    <select name="question_type_id" class="form-control" placeholder="Question type" required>
                        @foreach($question_types as $question_type)
                            <option value="{{$question_type->id}}">{{$question_type->name}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success btn-block" type="submit">Create Question</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection