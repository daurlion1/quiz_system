@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to admin page!

                        {{--<div class="card-deck">--}}
                            {{--@foreach($results as $result)--}}
                            {{--<div class="card">--}}
                                {{--<div class="card-heading text-center  bg-info">--}}

                                    {{--<h3 class="text-center"> {{$result->quiz->title}}</h3>--}}

                                {{--</div>--}}
                                {{--<div class="card-body text-center">--}}
                                    {{--<h1 class="text-center">{{$result->result}}</h1>--}}
                                    {{--<h1 class="text-center">{{$result->student->user->name}}</h1>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                                {{--@endforeach--}}
                        {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
