@extends('layouts.app')
@section('content')
    @include('admin.includes.error')
    <header class="page-header">
        <h2>New Teacher</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{route('home')}}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>New</span></li>
                <li><span>Teacher</span></li>
            </ol>
            <a class="sidebar-right-toggle"></a>
        </div>
    </header>

    <!-- start: page -->
    <div class="row">
        <div class="col-lg-12">
        <form class="form-horizontal form-bordered" action="{{route('teacher.store')}}" method="POST">
            {{ csrf_field() }}
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Add Teacher</h2>
                </header>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputName">Name <span
                                    class="required">*</span></label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputName" name="name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDepartment">Department <span
                                    class="required">*</span></label>
                        <div class="col-md-6">
                            <select class="form-control mb-md" id="inputDepartment" name="department_id" required>
                                @foreach($departments as $department)
                                    <option value="{{$department->id}}">{{$department->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <label class="col-md-3 control-label" for="inputSubjects">Subject type<span
                                class="required">*</span></label>
                    <div class="col-md-6">
                        @foreach($subjects as $subject)
                            <div class="checkbox-custom checkbox-default">
                                <input type="checkbox" id="checkboxSubjects" name="subjects[]" value="{{$subject->id}}">
                                <label for="checkboxSubjects">{{$subject->name}}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                    </div>
                </footer>
            </section>
        </form>
    </div>
    </div>
@endsection