@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div id="recentTw" class="mainContainer">
            <h4><b>Recent Tweets</b></h4><br>
{{--Tweets Block--}}


            @if(count($tweets) >  0)
                @foreach($tweets as $index => $tweet)
                    <div class='row eachTw'>
                        <div class='col-md-1 col-xs-2'>
                            <img src='{{$users[$index]->profile_picture}}' style='border:1px solid black;' width='40px'
                                 height='40px'>
                        </div>
                        <div class='col-md-11 col-xs-10'>
                                <span class='postHeader'><a href='/user/view/{{base64_encode($users[$index]->id)}}'>{{'@'.$users[$index]->username}}</a><br>
                                    <span style='font-size:14px; color:#bfbfbf; float:right'>{{$tweet->created_at}}</span>
                                </span> <i class='fa fa-clock-o' style='padding-top:3px; color:#bfbfbf; float:right;'>&nbsp;</i>
                            <br><br>{{$tweet->tweet_content}}<br><br>
                            <center>
                                <div class='line'></div>
                            </center>
                            <br>
                            <p style='font-size:15px;'>
                                <a style='cursor:pointer' onclick="likeTweet({{ $tweet->id.",'".(URL::to('liketweet'))."'" }})" style='color:black;'><span class='fa fa-thumbs-up' style='font-size:32px;'></span></a>
                                <span id='num_like{{$tweet->id}}'>{{$tweet->likes}}</span> people(s) liked this.</p>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No Tweets Found!</p>
            @endif
        </div>

        <br><br><br><br>
    </div>
    </div>
    </div>

    </div>
@endsection
