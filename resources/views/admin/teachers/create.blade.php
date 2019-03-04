@extends('layouts.app')
@section('content')
    @include('admin.includes.error')
    <div class="card card-default">
        <div class="card-header">
            Create Teacher
        </div>
        <div class="card-body">
            <form action="{{route('teacher.store')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name='name'>
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <select name="department_id" class="form-control" placeholder="Department" required>
                        @foreach($departments as $department)
                            <option value="{{$department->id}}">{{$department->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-check">
                    <label for="subjects">Subjects</label>
                    @foreach($subjects as $subject)
                    <div class="checkbox">
                        <label class="form-check-label">
                            <input type="checkbox" name="subjects[]" class="form-check-input" value="{{$subject->id}}">
                            {{$subject->name}}
                        </label>
                    </div>
                    @endforeach
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success btn-block" type="submit">Add Teacher</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection