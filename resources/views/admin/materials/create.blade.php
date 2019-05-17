@extends('layouts.app')
@section('content')
    @include('admin.includes.error')
    <header class="page-header">
        <h2>New Material</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{route('home')}}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>New</span></li>
                <li><span>Material</span></li>
            </ol>
            <a class="sidebar-right-toggle"></a>
        </div>
    </header>

    <!-- start: page -->
    <div class="row">
        <div class="col-lg-12">
                <form action="{{ route('material.store') }}" method="POST" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>


                        <h2 class="panel-title">Add Material</h2>
                    </header>

                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputMaterial">Material <span
                                        class="required">*</span></label>
                            <div class="col-md-6">
                            <input type="file" name="file" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputTheme">Theme <span
                                        class="required">*</span></label>
                            <div class="col-md-6">
                                <select class="form-control mb-md" id="inputTheme" name="theme" required>
                                    @foreach($themes as $theme)
                                        <option value="{{$theme->id}}">{{$theme->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputName">Title <span
                                        class="required">*</span></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="inputName" name="name" required>
                            </div>
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