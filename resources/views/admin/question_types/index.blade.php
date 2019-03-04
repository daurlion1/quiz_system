@extends('layouts.app')
@section('content')
    <div class="card card-default">
        <div class="card-header">
            Question Types
            <a href="{{route('question_type.create')}}" class="btn btn-xs btn-success" style="float:right">
                <span class="fa fa-plus fa-2x"></span>
            </a>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
                </thead>
                <tbody>
                @if ($question_types->count() > 0)
                    @foreach($question_types as $question_type)
                        <tr>
                            <td>
                                <p>{{$question_type->name}}</p>
                            </td>
                            <td>
                                <a href="{{route('question_type.edit',['id' => $question_type->id ])}}"
                                   class="btn btn-xs btn-info">
                                    <span class="fa fa-pen fa"></span>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('question_type.delete', ['id' => $question_type->id])}}"
                                   class="btn btn-xs btn-danger">
                                    <span class="fa fa-trash fa"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th>
                            No question_types yet!
                        </th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection