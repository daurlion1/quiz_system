@extends('layouts.app')
@section('content')

    <div class="card card-default">

        <div class="card-body">
            <p>{{$quiz->title}}</p>
            @foreach($questions as $question)
                <p>{{$i++.'. '.$question->title}}</p>
                @foreach($question->answers as $answer)
                    <label for="{{$answer->content}}">
                        <input type="radio" id="{{$answer->content}}" name="{{$question->title}}" value="{{$answer->right}}">
                        {{$answer->content}}
                    </label>
                    <br>
                @endforeach
            @endforeach
        </div>
    </div>
@endsection