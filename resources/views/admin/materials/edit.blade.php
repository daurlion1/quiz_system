@extends('layouts.app')
@section('content')
    @include('admin.includes.error')
    <div class="card card-default">
        <div class="card-header">
            Update new Material
        </div>
        <div class="card-body">
            <form action="{{route('material.update',['id' => $material->id])}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" class="form-control" name='title' value="{{$material->title}}">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success btn-block" type="submit">Store Material</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection