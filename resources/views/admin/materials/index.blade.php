@extends('layouts.app')
@section('content')
    <header class="page-header">
        <h2>Materials Table</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{route('home')}}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Materials</span></li>
                <li><span>Table</span></li>
            </ol>

            <a class="sidebar-right-toggle"></a>
        </div>
    </header>

    <!-- start: page -->
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Materials</h2>
        </header>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-md">
                        <a href="{{route('material.create')}}" id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered table-striped" id="datatable-tabletools">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Material</th>
                    <th>Theme</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($materials as $material)
                    <tr class="gradeX">
                        <td>{{$material->title}}</td>
                        <td>
                            @if($material->title == 'Video')
                            <video width="320" height="240" controls>
                                <source src="{{$material->extension}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                                @elseif($material->title == 'Audio')
                                <audio width="320" height="240" controls>
                                    <source src="{{$material->extension}}" type="audio/mp3">
                                    Your browser does not support the video tag.
                                </audio>
                                @endif

                        </td>
                        <td>{{$material->theme->name}}</td>
                        <td class="actions">
                            <form id="deleteForm" method="POST"
                                  action="{{route('material.delete', ['id' => $material->id])}}">
                                {{ method_field('DELETE')}}
                                {{csrf_field()}}
                                <a href="{{route('material.edit',['id' => $material->id])}}">
                                    <span class="fa fa-pencil fa-lg"></span>
                                </a>
                                <button type="submit" class="btn btn-sm" onclick="return confirm('Do you want to delete item?')">
                                    <span class="fa fa-trash-o fa-lg"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection