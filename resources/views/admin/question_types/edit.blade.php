@extends('layouts.app')
@section('content')
    @include('admin.includes.error')
    <div class="card card-default">
        <div class="card-header">
            Update this Question type
        </div>
        <div class="card-body">
            <form action="{{route('question_type.update',['id' => $question_type->id] )}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name='name' value="{{$question_type->name}}">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success btn-block" type="submit">Update Question type</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
