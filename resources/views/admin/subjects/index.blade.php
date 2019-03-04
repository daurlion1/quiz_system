@extends('layouts.app')
@section('content')

    <div class="card card-default">
        <div class="card-header">
            Subjects
            <a href="{{route('subject.create')}}" class="btn btn-xs btn-success" style="float:right">
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
                @if($subjects->count() > 0)
                    @foreach($subjects as $subject)
                        <tr>
                            <td>
                                <p>{{$subject->name}}</p>
                            </td>
                            <td>
                                <a href="{{route('subject.edit',['id' => $subject->id])}}" class="btn btn-xs btn-info" >
                                    <span class="fa fa-pen fa"></span>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('subject.delete', ['id' => $subject->id])}}" class="btn btn-xs btn-danger">
                                    <span class="fa fa-trash fa"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th>No subjects yet!</th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection