@extends('layouts.app')
@section('content')

    <div class="card card-default">
        <div class="card-header">
            Teachers
            <a href="{{route('teachers.create')}}" class="btn btn-xs btn-success" style="float:right">
                <span class="fa fa-plus fa-2x"></span>
            </a>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <th>Name</th>
                <th>Department</th>
                <th>Edit</th>
                <th>Delete</th>
                </thead>
                <tbody>
                @if($teachers->count() > 0)
                    @foreach($teachers as $teacher)
                        <tr>
                            <td>
                                <p>{{$teacher->name}}</p>
                            </td>
                            <td>
                                <p>{{$teacher->department->name}}</p>
                            </td>
                            <td>
                                <a href="{{route('teacher.edit',['id' => $teacher->id])}}" class="btn btn-xs btn-info" >
                                    <span class="fa fa-pen fa"></span>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('teacher.delete', ['id' => $teacher->id])}}" class="btn btn-xs btn-danger">
                                    <span class="fa fa-trash fa"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th>No teachers yet!</th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection