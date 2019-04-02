@extends('layouts.app')
@section('content')
    <header class="page-header">
        <h2>Settings Table</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{route('home')}}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Settings</span></li>
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

            <h2 class="panel-title">Settings</h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped" id="datatable-tabletools">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Phone</th>
                    <th>Site name</th>
                    <th>Copyright</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($settings as $setting)
                    <tr class="gradeX">
                        <td>{{$setting->title}}</td>
                        <td>{{$setting->phone}}</td>
                        <td>{{$setting->site_name}}</td>
                        <td>{{$setting->copyright}}</td>
                        <td>{{$setting->address}}</td>
                        <td>{{$setting->email}}</td>
                        <td class="actions">
                                <a href="{{route('setting.edit',['id' => $setting->id])}}">
                                    <span class="fa fa-pencil fa-lg"></span>
                                </a>


                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection