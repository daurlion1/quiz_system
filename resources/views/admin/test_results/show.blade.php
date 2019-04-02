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

            <h2 class="panel-title">Answers</h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped" id="datatable-tabletools">
                <thead>
                <tr>
                    <th>Question name</th>
                    <th>Answers</th>
                    <th>His Answer</th>
                    <th>Correct</th>
                </tr>
                </thead>
                <tbody>
                @foreach($results as $result)

                    <tr class="gradeX">

                        <td>{{$result->question->title}}</td>
                        <td>
                        <table border="1">
                            <tbody>
                                <tr>
                                    <td>
                            @foreach($result->answer as $answer)
                                {{$answer->content}}
                                @if ($answer->right)
                                   <i class="fa fa-check fa-2x" aria-hidden="true" style="color:green"></i>
                                @else
                                    <i class="fa fa-times fa-2x" aria-hidden="true" style="color:red"></i>
                                @endif
                                <br>
                            @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td>
                            {{$result->answer_id->content}}
                        </td>
                        <td>
                            @if ($result->answer_id->right)
                                <i class="fa fa-check fa-3x" aria-hidden="true" style="color:green"></i>
                            @else
                                <i class="fa fa-times fa-2x" aria-hidden="true" style="color:red"></i>
                            @endif
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
    </section>
@endsection