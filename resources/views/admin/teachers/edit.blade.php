@extends('layouts.app')
@section('content')
    @include('admin.includes.error')
    <div class="card card-default">
        <div class="card-header">
            Edit new Teacher
        </div>
        <div class="card-body">
            <form action="{{route('teacher.update',['id' => $teacher->id])}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name='name' value="{{$teacher->name}}">
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <select name="department_id" class="form-control" placeholder="Department" required>
                        @foreach($departments as $department)
                            @if($department->id == $teacher->department_id)
                                <option selected value="{{$department->id}}">{{$department->name}}</option>
                            @else
                                <option value="{{$department->id}}">{{$department->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-check">
                    <label for="subjects">Subjects</label>
                    @foreach($subjects as $subject)
                        <div class="checkbox">
                            <label class="form-check-label">
                                <input type="checkbox" name="subjects[]" class="form-check-input" value="{{$subject->id}}"
                                       @foreach($teacher->subjects as $innerSubject)
                                       @if($innerSubject->id == $subject->id)
                                       checked
                                        @endif
                                        @endforeach>
                                {{$subject->name}}
                            </label>
                        </div>
                    @endforeach
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success btn-block" type="submit"> Teacher Updated</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection