@extends('layouts.app')
@section('content')

    <div class="card card-default">

        <div class="card-body">
            <form method="POST" action="{{route('student.quiz.store')}}">
                {{ csrf_field() }}
                <p>{{$quiz->title}}</p>
                <input type="hidden" value="{{$quiz->id}}" name="quiz_id">

                @foreach($questions as $question)
                    <p>{{$i.'. '.$question->title}}</p>
                    <input type="hidden" name="questions[{{$i}}]" value="{{$question->id}}">
                    @foreach($question->answers as $answer)
                        <label for="{{$answer->content}}">
                            <input type="radio" id="{{$answer->content}}" name="answers[{{$question->id}}]"
                                   value="{{$answer->id}}">
                            {{$answer->content}}
                        </label>
                        <br>
                    @endforeach
                    <?php $i++ ?>
                @endforeach
                <button type="submit">Pass test</button>
            </form>
        </div>
    </div>
@endsection