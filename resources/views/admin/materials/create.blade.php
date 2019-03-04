@extends('layouts.app')
@section('content')
    @include('admin.includes.error')
    <div class="card card-default">
        <div class="card-header">
            Create Material
        </div>
        <div class="card-body">
            <form action="{{route('material.store')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name='title'>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success btn-block" type="submit">Create Material</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection