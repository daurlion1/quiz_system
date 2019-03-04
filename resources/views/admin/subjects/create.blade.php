@extends('layouts.app')
@section('content')
    @include('admin.includes.error')
    <div class="card card-default">
        <div class="card-header">
            Create Subject
        </div>
        <div class="card-body">
            <form action="{{route('subject.store')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name='name'>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success btn-block" type="submit">Create Subject</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection