@extends('layouts.app')
@section('content')
    @include('admin.includes.error')

    <div class="card card-default">
        <div class="card-header">
            Create new Department
        </div>
        <div class="card-body">
            <form action="{{route('department.update',['id' => $department->id])}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name='name' value="{{$department->name}}">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success btn-block" type="submit">Store Department</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection