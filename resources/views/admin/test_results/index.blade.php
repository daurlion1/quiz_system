@extends('layouts.app')
@section('content')
    <header class="page-header">
        <h2>Results Table</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{route('home')}}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Results</span></li>
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

            <h2 class="panel-title">Results</h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped" id="datatable-tabletools">
                <thead>
                <tr>
                    <th>Quiz title</th>
                    <th>Student name</th>
                    <th>Result</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($test_results as $result)
                        <tr class="gradeX">
                            <td><a href="{{route('student.results', ['id' => $result->id])}}">{{$result->quiz->title}}</a></td>
                            <td>{{$result->student->user->name}}</td>
                            <td>{{$result->result}}/{{$result->total}}</td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </section>
@endsection