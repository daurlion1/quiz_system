@extends('layouts.app')
@section('content')

    <div class="card card-default">
        <div class="card-header">
            Questions
            <a href="{{route('questions.create')}}" class="btn btn-xs btn-success" style="float:right">
                <span class="fa fa-plus fa-2x"></span>
            </a>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <th>Title</th>
                <th>Question Value</th>
                <th>Quiz</th>
                <th>Edit</th>
                <th>Delete</th>
                </thead>
                <tbody>
                @if($questions->count() > 0)
                    @foreach($questions as $question)
                        <tr>
                            <td>
                                <p>{{$question->title}}</p>
                            </td>
                            <td>
                                <p>{{$question->question_value}}</p>
                            </td>
                            <td>
                                <p>{{$question->quiz->title}}</p>
                            </td>
                            <td>
                                <a href="{{route('question.edit',['id' => $question->id])}}" class="btn btn-xs btn-info" >
                                    <span class="fa fa-pen fa"></span>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('question.delete', ['id' => $question->id])}}" class="btn btn-xs btn-danger">
                                    <span class="fa fa-trash fa"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th>No questions yet!</th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection