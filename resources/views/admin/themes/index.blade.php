@extends('layouts.app')
@section('content')

    <div class="card card-default">
        <div class="card-header">
            Themes
            <a href="{{route('themes.create')}}" class="btn btn-xs btn-success" style="float:right">
                <span class="fa fa-plus fa-2x"></span>
            </a>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <th>Title</th>
                <th>Subject</th>
                <th>Edit</th>
                <th>Delete</th>
                </thead>
                <tbody>
                @if($themes->count() > 0)
                    @foreach($themes as $theme)
                        <tr>
                            <td>
                                <p>{{$theme->name}}</p>
                            </td>
                            <td>
                                <p>{{$theme->subject->name}}</p>
                            </td>

                            <td>
                                <a href="{{route('theme.edit',['id' => $theme->id])}}" class="btn btn-xs btn-info" >
                                    <span class="fa fa-pen fa"></span>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('theme.delete', ['id' => $theme->id])}}" class="btn btn-xs btn-danger">
                                    <span class="fa fa-trash fa"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th>No themes yet!</th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection