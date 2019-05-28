@extends('layouts.app')
@section('content')
    <header class="page-header">
        <h2>Answers Table</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{route('home')}}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Answers</span></li>
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

            <h2 class="panel-title">Answer</h2>
        </header>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-md">
                        <a href="{{route('answer.create')}}" id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered table-striped" id="datatable-tabletools">
                <thead>
                <tr>
                    <th>Content</th>
                    <th>Question</th>
                    <th>Rigth/Wrong</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($answers as $answer)
                    <tr class="gradeX">
                        <td>{{$answer->content}}</td>
                        <td>{{$answer->question->title}}</td>
                        <td>@if($answer->right) Right @else Wrong @endif</td>
                        <td class="actions">
                            <form id="deleteForm" method="POST"
                                  action="{{route('answer.delete', ['id' => $answer->id])}}">
                                {{ method_field('DELETE')}}
                                {{csrf_field()}}
                                <a href="{{route('answer.edit',['id' => $answer->id])}}">
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