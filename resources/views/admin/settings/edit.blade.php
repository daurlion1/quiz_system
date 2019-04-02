@extends('layouts.app')
@section('content')
    @include('admin.includes.error')
    <header class="page-header">
        <h2>Edit Setting</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{route('home')}}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Edit</span></li>
                <li><span>Setting</span></li>
            </ol>
            <a class="sidebar-right-toggle"></a>
        </div>
    </header>

    <!-- start: page -->
    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal form-bordered" method="POST"
                  action="{{route('setting.update', ['id' => $setting->id])}}">
                {{ csrf_field() }}
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Edit Setting</h2>
                    </header>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputTitle">Title <span
                                        class="required">*</span></label>
                            <div class="col-md-6">
                                <input value="{{$setting->title}}" type="text" class="form-control"
                                       id="inputTitle" name="title" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputPhone">Phone <span
                                        class="required">*</span></label>
                            <div class="col-md-6">
                                <input value="{{$setting->phone}}" type="text" class="form-control"
                                       id="inputPhone" name="phone" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputSiteName">Site_name <span
                                        class="required">*</span></label>
                            <div class="col-md-6">
                                <input value="{{$setting->site_name}}" type="text" class="form-control"
                                       id="inputSiteName" name="site_name" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputCopyright">Copyright <span
                                        class="required">*</span></label>
                            <div class="col-md-6">
                                <input value="{{$setting->copyright}}" type="text" class="form-control"
                                       id="inputCopyright" name="copyright" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputAddress">Address <span
                                        class="required">*</span></label>
                            <div class="col-md-6">
                                <input value="{{$setting->address}}" type="text" class="form-control"
                                       id="inputAddress" name="address" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputEmail">Email <span
                                        class="required">*</span></label>
                            <div class="col-md-6">
                                <input value="{{$setting->email}}" type="text" class="form-control"
                                       id="inputEmail" name="email" required/>
                            </div>
                        </div>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                        </div>
                    </footer>
                </section>
            </form>
        </div>
    </div>
@endsection