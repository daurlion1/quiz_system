@extends('layouts.auth')
@section('content')
    <div class="panel-title-sign mt-xl text-right">
        <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-graduation-cap"></i>{{$quiz->title}}</h2>
    </div>
    <div class="panel-body">
        <div class="card card-default">
            <div class="card-body">
                <form method="POST" action="{{route('student.quiz.store')}}" class="form-horizontal form-bordered">
                    <div class="form-group">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{$quiz->id}}" name="quiz_id">
                        <div class="col-sm-8">
                            @foreach($questions as $question)
                                <p><b>{{$i.'. '.$question->title}}</b></p>
                                <input type="hidden" name="questions[{{$i}}]" value="{{$question->id}}">
                                @foreach($question->answers as $answer)
                                    <div class="radio-custom">
                                        <input type="radio" id="{{$answer->content.$answer->id}}" name="answers[{{$question->id}}]"
                                               value="{{$answer->id}}">
                                        <label for="{{$answer->content.$answer->id}}">{{$answer->content}}</label>
                                    </div>
                                @endforeach
                                <?php $i++ ?>
                            @endforeach

                                <div class="row">
                                    <div class="col-sm-12 text-right">
                                        <button type="submit" class="btn btn-primary hidden-xs">Закончить</button>
                                        <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Закончить</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
