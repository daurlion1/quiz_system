@extends('layouts.app')
@section('content')
    @include('admin.includes.error')
    <header class="page-header">
        <h2>My profile</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{route('home')}}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Profile</span></li>
                <li><span>Edit profile</span></li>
            </ol>
            <a class="sidebar-right-toggle"></a>
        </div>
    </header>

    <!-- start: page-->
    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal form-bordered"  action="{{route('user.profile.update')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Edit profile</h2>
                    </header>
                    <div class="panel-body">




                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputName">New name <span
                                        class="required">*</span></label>
                            <div class="col-md-6">
                                <input type="text" value="{{Auth::user() ->name}}" class="form-control" name="name"  required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputName">Enter surname <span
                                        class="required">*</span></label>
                            <div class="col-md-6">
                                {{--@php dd(Auth::user()->profile) @endphp--}}
                                <input type="text"  class="form-control"  value="{{Auth::user() -> profile -> surname }}"  name ="surname"  required/>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputName">New avatar <span
                                        class="required">*</span></label>
                            <div class="col-md-6">
                                <input type="file"  class="form-control" name="avatar"   />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputName">Avatar <span
                                        class="required">*</span></label>
                            <div class="col-md-6">
                                <img src="{{asset(Auth::user()->profile->avatar)}}" alt="" width="100px" height="100px" >
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