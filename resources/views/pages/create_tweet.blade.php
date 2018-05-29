@extends('layouts.app')

@section('content')
    <div id="recentTw" class="mainContainer" style="height:auto;">
        <h4>Create New Tweet</h4><br>

        {!! Form::open(['action' => 'TweetsController@store', 'method' => 'POST']) !!}

        <div class="form-group">
            {{Form::textarea('tweet', '', ['class' => 'form-control', 'placeholder' => 'Make A Tweet', 'required'])}}
        </div>

        {{Form::button('Tweet <i class="fa fa-twitter"></i>', ['class' => 'btn btn-success btn-lg', 'type' => 'submit'])}}

        {!! Form::close() !!}

        <br><br><br><br>
    </div>
    </div>

    </div>
    </div>
@endsection