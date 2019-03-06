@extends('layouts.app')
@section('content')

    <div class="card card-default">
        <div class="card-header">
            Quizzes
            <a href="{{route('quizzes.create')}}" class="btn btn-xs btn-success" style="float:right">
                <span class="fa fa-plus fa-2x"></span>
            </a>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <th>Title</th>
                <th>Subject</th>
                <th>Edit</th>
                <th>Delete</th>
                </thead>
                <tbody>
                @if($quizzes->count() > 0)
                    @foreach($quizzes as $quiz)
                        <tr>
                            <td>
                                <a href="{{route('quiz.show', ['id' => $quiz->id])}}">{{$quiz->title}}</a>
                            </td>

                            <td>
                                <p>{{$quiz->subject->name}}</p>
                            </td>
                            <td>
                                <a href="{{route('quiz.edit',['id' => $quiz->id])}}" class="btn btn-xs btn-info" >
                                    <span class="fa fa-pen fa"></span>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('quiz.delete', ['id' => $quiz->id])}}" class="btn btn-xs btn-danger">
                                    <span class="fa fa-trash fa"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th>No quizzes yet!</th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection