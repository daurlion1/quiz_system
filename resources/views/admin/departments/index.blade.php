@extends('layouts.app')
@section('content')
    <header class="page-header">
        <h2>Department Table</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{route('home')}}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Department</span></li>
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

            <h2 class="panel-title">Department</h2>
        </header>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-md">
                        <a href="{{route('department.create')}}" id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></a>
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
                @foreach($departments as $department)
                    <tr class="gradeX">
                        <td>
                            <p>{{$department->name}}</p>
                        </td>
                        <td class="actions">
                            <a href="{{route('department.edit',['id' => $department->id])}}"
                               class="on-default edit-row">
                                <span class="fa fa-pencil"></span>
                                <a href="{{route('department.delete', ['id' => $department->id])}}"
                                   class="on-default remove-row">
                                    <span class="fa fa-trash-o"></span>
                                </a>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection