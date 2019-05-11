@extends('layouts.app')
@section('content')
    <header class="page-header">
        <h2>Quizzes Table</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{route('home')}}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Quizzes</span></li>
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

            <h2 class="panel-title">Quizzes</h2>
        </header>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-md">
                        <a href="{{route('quiz.create')}}" id="addToTable" class="btn btn-primary">Add <i
                                    class="fa fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered table-striped" id="datatable-tabletools">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Subject</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($quizzes as $quiz)
                    <tr class="gradeX">
                        <td>
                            <a href="{{route('quiz.show', ['id' => $quiz->id])}}">{{$quiz->title}}</a>
                        </td>
                        <td>
                            @if(!$quiz->isPsychological)
                                <p>{{$quiz->subject->name}}</p>
                            @else
                                <p>Психологический</p>
                            @endif
                        </td>
                        <td class="actions">
                            <form id="deleteForm" method="POST"
                                  action="{{route('quiz.delete', ['id' => $quiz->id])}}">
                                {{ method_field('DELETE')}}
                                {{csrf_field()}}
                                <a href="{{route('quiz.edit',['id' => $quiz->id])}}">
                                    <span class="fa fa-pencil fa-lg"></span>
                                </a>
                                <button type="submit" class="btn btn-sm"
                                        onclick="return confirm('Do you want to delete item?')">
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