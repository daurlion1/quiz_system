@extends('layouts.app')
@section('content')

    <div class="card card-default">
        <div class="card-header">
            Answers
            <a href="{{route('answers.create')}}" class="btn btn-xs btn-success" style="float:right">
                <span class="fa fa-plus fa-2x"></span>
            </a>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <th>Content</th>
                <th>Question</th>
                <th>Edit</th>
                <th>Delete</th>
                </thead>
                <tbody>
                @if($answers->count() > 0)
                    @foreach($answers as $answer)
                        <tr>
                            <td>
                                <p>{{$answer->content}}</p>
                            </td>
                            <td>
                                <p>{{$answer->question->title}}</p>
                            </td>
                            <td>
                                <a href="{{route('answer.edit',['id' => $answer->id])}}" class="btn btn-xs btn-info" >
                                    <span class="fa fa-pen fa"></span>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('answer.delete', ['id' => $answer->id])}}" class="btn btn-xs btn-danger">
                                    <span class="fa fa-trash fa"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th>No answers yet!</th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection