@extends('layouts.app')
@section('content')

    <div class="card card-default">
        <div class="card-header">
            Materials
            <a href="{{route('material.create')}}" class="btn btn-xs btn-success" style="float:right">
                <span class="fa fa-plus fa-2x"></span>
            </a>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <th>Title</th>
                <th>Edit</th>
                <th>Delete</th>
                </thead>
                <tbody>
                @if($materials->count() > 0)
                    @foreach($materials as $material)
                        <tr>
                            <td>
                                <p>{{$material->title}}</p>
                            </td>
                            <td>
                                <a href="{{route('material.edit',['id' => $material->id])}}" class="btn btn-xs btn-info" >
                                    <span class="fa fa-pen fa"></span>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('material.delete', ['id' => $material->id])}}" class="btn btn-xs btn-danger">
                                    <span class="fa fa-trash fa"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th>No materials yet!</th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection