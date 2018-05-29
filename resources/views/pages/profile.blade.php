@extends('layouts.app')

@section('content')
    <div id="myProfile" class="mainContainer">
        <h4><b>My Profile</b></h4><br>
        <div class="row">
            <div class="col-md-3">
                <img src="{{$user->profile_picture}}" width="150px" height="150px;" class="profilePix"><br><br>
                <p><a href="#!">[Upload Picture]</a></p>
            </div>
            <div class="col-md-9 profileInfo">
                <h2 style="padding-bottom:10px;letter-spacing:1.5px;">{{'@'.$user->username}}</h2>
                <h5><i class="fa fa-briefcase"></i> Student</h5>
                <h5><span class="glyphicon glyphicon-map-marker"></span>Nigeria</h5>
            </div>
        </div>
        <hr>
        <h4><b>More</b></h4>
        <h5><b>Fullname:</b> {{$user->name}}</h5>
        <h5><b>Gender:</b>
            Gender
        </h5>
        <h5><b>Mobile Phone:</b>
            phone
        </h5>
        <h5><b>Email:</b>
            {{$user->email}}
        </h5>
        <h5><b>Joined Date:</b>
            {{$user->created_at}}
        </h5>
        <p><a href="/profile/edit">[Edit Profile]</a></p>
        <hr>
        <h4><b>My Tweets</b></h4>
        @if(count($tweets) > 0)
            @foreach($tweets as $tweet)
                <div class='row eachTw'>
                    <div class='col-md-1 col-xs-2'>
                        <img src='{{$user->profile_picture}}' style='border:1px solid black;' width='40px' height='40px'>
                    </div>
                    <div class='col-md-11 col-xs-10'>
                            <span class='postHeader'>{{'@'.$user->username}}<br>
                            <span style='font-size:14px; color:#bfbfbf; float:right'>{{$tweet->created_at}}</span>
                        </span> <i class='fa fa-clock-o' style='padding-top:3px; color:#bfbfbf; float:right;'>&nbsp;</i>
                        <br><br>{{$tweet->tweet_content}}<br><br>
                        <center>
                            <div class='line'></div>
                        </center>
                        <br>
                        <p style='font-size:15px; '></a>{{$tweet->likes}} people(s) liked this.</p>
                    </div>
                </div>
            @endforeach
        @else
            <p><h4>You haven't Tweeted anything... <a href='/create_tweet'>Tweet now</a></h4></p>
        @endif

        {{--If no tweet--}}
        {{--<h4>You haven't Tweeted anything... <a href='newTweet.php'>Tweet now</a></h4>";--}}
    </div>
    </div>

    </div>
    </div>

@endsection