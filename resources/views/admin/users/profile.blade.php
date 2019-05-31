@extends('layouts.auth')

@section('content')
    <div class="panel-title-sign mt-xl text-right">
        <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i>My Profile</h2>
    </div>
    <div class="panel-body">

        <form class="form-horizontal form-bordered"  action="{{route('user.profile.update')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}


            <div class="form-group mb-lg">
                <label for="inputName">New name <span
                            class="required">*</span></label>
                    <input type="text" value="{{Auth::user()->name}}"  class="form-control input-lg" name="name"  required/>
            </div>

            <div class="form-group mb-lg">
                <label for="inputName">Surname <span
                            class="required">*</span></label>
                    {{--@php dd(Auth::user()->profile) @endphp--}}
                    <input type="text"  class="form-control input-lg"  value="{{Auth::user()->profile->surname }}"  name ="surname" required/>
            </div>


            <div class="form-group mb-lg">
                <label for="inputName">New avatar <span
                            class="required">*</span></label>
                    <input type="file"   class="form-control input-lg" name="avatar"/>
            </div>
            <div class="form-group mb-lg">
                <label for="inputName">Your avatar</label>
                    <img src="{{asset(Auth::user()->profile->avatar)}}" alt="" width="400" height="250px">
            </div>
            <div class="form-group mb-lg">
                <label for="inputName">See themes by test results</label>
                <input type="checkbox" class="form-control input-lg" name="show_themes"
                @if(Auth::user()->profile->show_themes==1) checked
                       @endif
                />
            </div>
            <div class="col-sm-4 text-right">
                <button type="submit" class="btn btn-primary">Edit Profile</button>
            </div>
        </form>
    </div>
@endsection