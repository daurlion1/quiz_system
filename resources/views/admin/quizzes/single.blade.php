@extends('layouts.app')
@section('content')

    <div class="card card-default">

        <div class="card-body">
            <p>{{$quiz->title}}</p>
            @foreach($questions as $question)
                <p>{{$i++,$question->title}}</p>
                @foreach($question->answers as $answer)
                    <input type="radio" value="{{$answer->value}}">
                    <label for="{{$answer->content}}">{{$answer->content}}</label>
                    <br>
                @endforeach
            @endforeach
        </div>
    </div>

@endsection