@extends('layouts.app')
@section('content')
    <header class="page-header">
        <h2>@lang('tables.themes')</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{route('home')}}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>@lang('tables.themes')</span></li>
                <li><span>@lang('tables.table')</span></li>
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

            <h2 class="panel-title">@lang('tables.themes')</h2>
        </header>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-md">
                        <a href="{{route('themes.create')}}" id="addToTable" class="btn btn-primary">@lang('actions.add') <i class="fa fa-plus"></i></a>
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
                @foreach($themes as $theme)
                    <tr class="gradeX">
                        <td>{{$theme->name}}</td>
                        <td>{{$theme->subject->name}}</td>
                        <td class="actions">
                            <form id="deleteForm" method="POST"
                                  action="{{route('theme.delete', ['id' => $theme->id])}}">
                                {{ method_field('DELETE')}}
                                {{csrf_field()}}
                                <a href="{{route('theme.edit',['id' => $theme->id])}}">
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