@extends('layouts.app')
@section('content')
    @include('admin.includes.error')
    <div class="card card-default">
        <div class="card-header">
            Edit Quiz
        </div>
        <div class="card-body">
            <form action="{{route('quiz.update',['id' => $quiz->id])}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name='title' value="{{$quiz->title}}">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <select name="subject_id" class="form-control" placeholder="Subject" required>
                        @foreach($subjects as $subject)
                            @if($subject->id == $quiz->subject_id)
                                <option selected value="{{$subject->id}}">{{$subject->name}}</option>
                            @else
                                <option value="{{$subject->id}}">{{$subject->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success btn-block" type="submit"> Quiz Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection