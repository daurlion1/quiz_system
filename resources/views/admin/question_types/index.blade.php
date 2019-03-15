@extends('layouts.app')
@section('content')
    <header class="page-header">
        <h2>Question Types Table</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{route('home')}}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Question types</span></li>
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

            <h2 class="panel-title">Question Types</h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped" id="datatable-tabletools">
                <thead>
                <tr>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($question_types as $question_type)
                    <tr class="gradeX">
                        <td>{{$question_type->name}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection