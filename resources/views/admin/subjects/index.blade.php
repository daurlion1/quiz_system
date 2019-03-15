@extends('layouts.app')
@section('content')
    <header class="page-header">
        <h2>Subjects Table</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{route('home')}}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Subjects</span></li>
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

            <h2 class="panel-title">Subjects</h2>
        </header>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-md">
                        <a href="{{route('subject.create')}}" id="addToTable" class="btn btn-primary">Add <i
                                    class="fa fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered table-striped" id="datatable-tabletools">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($subjects as $subject)
                    <tr class="gradeX">
                        <td>{{$subject->name}}</td>
                        <td class="actions">
                            <form method="POST"
                                  action="{{route('subject.delete', ['id' => $subject->id])}}">
                                {{ method_field('DELETE')}}
                                {{csrf_field()}}
                                    <a href="{{route('subject.edit',['id' => $subject->id])}}" class="btn btn-sm">
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