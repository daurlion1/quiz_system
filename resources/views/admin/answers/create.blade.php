@extends('layouts.app')
@section('content')
    @include('admin.includes.error')
    <div class="card card-default">
        <div class="card-header">
            Create Answer
        </div>
        <div class="card-body">
            <form action="{{route('answer.store')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" name='content'>
                </div>
                <div class="form-group">

                    <select name="right" id="right" >

                        <option value="1">Right</option>
                        <option value="0">Wrong</option>
                    </select>

                </div>
                <div class="form-group">
                    <label for="question">Question</label>
                    <select name="question_id" class="form-control" placeholder="Question" required>
                        @foreach($questions as $question)
                            <option value="{{$question->id}}">{{$question->title}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success btn-block" type="submit">Create Answer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection