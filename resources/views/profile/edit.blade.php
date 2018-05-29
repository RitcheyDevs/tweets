@extends('layouts.app')

@section('content')
    <br>
    <a href='/profile' style="font-size:18px; margin-left:30px;"><span
                class="glyphicon glyphicon-chevron-left"></span>Back</a>

    <div id="recentTw" class="mainContainer2" style="height:auto;">
        <center>
            <h3>Update Profile</h3>
            <br>
            {{--['route' => ['votes.submit', $video->id],--}}
            {!! Form::open(['method' => 'post', 'route' => ['user.edit', $user->id] ]) !!}
            <div class="form col-lg-8 col-lg-offset-2">
                <div class="form-group">
                    <label>Fullname</label>
                    <input class="form-control" type="text" name="fullname" required placeholder="Fullname"
                           value="{{$user->name}}"><br>
                </div>

                <div class="form-group">
                    <label for="txtEmail">Email</label>
                    <input class="form-control" required name="email" type="text" placeholder="Email"
                           value="{{$user->email}}"><br>
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" required name="username" type="text" placeholder="Username" value="{{$user->username}}"><br>
                </div>
                <br><br>
                <button type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-edit"></span>&nbsp;
                    Save
                </button>
                <br>
                <br>
                <br>
            </div>
            {!! Form::close() !!}
        </center>
    </div>
    </div>

    </div>
    </div>
@endsection