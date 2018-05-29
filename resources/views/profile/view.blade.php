@extends('layouts.app')

@section('content')
    <div id="myProfile" class="mainContainer"><br>
        <h4><b>{{$user->name}}'s Profile</b></h4><br>
        <div class="row">
            <div class="col-md-3">
                <img src="{{$user->profile_picture}}" width="150px" height="150px;" class="profilePix"><br>
            </div>
            <div class="col-md-9 profileInfo">
                <h2 style="padding-bottom:10px;letter-spacing:1.5px;">{{'@'.$user->username}}
                </h2>
                <h4>Fullname: <b>{{$user->name}}</b></h4>
                <h4>Student at <b>School</b></h4>
                <h4>Studying <b>a Course</b></h4>
                <h4>Lives in <b>a Country</b></h4>
                <h4>Birthday: <b>Every Year</b></h4>
                <h4>Gender: <b>Male or Female</b></h4>
                <h4>Mobile Phone: <b>0819ja....</b></h4>
                <h4>Email: <b>{{$user->email}}</b></h4>
                <h4>Joined Date: <b>{{$user->created_at}}</b></h4>

            </div>
        </div>
        <br>

        <hr>
        <h4><b>{{$user->username}}'s Tweets</b></h4>

        @if(count($tweets) > 0)
            @foreach($tweets as $tweet)
                <div class='row eachTw'>
                    <div class='col-md-1 col-xs-2'>
                        <img src='{{$user->profile_picture}}' style='border:1px solid black;' width='40px' height='40px'>
                    </div>
                    <div class='col-md-11 col-xs-10'>
                                    <span class='postHeader'>{{'@'.$user->username}}<br>
                                    <span style='font-size:14px; color:#bfbfbf; float:right'>{{$tweet->created_at}}</span>
                                </span> <i class='fa fa-clock-o ' style='padding-top:3px; color:#bfbfbf; float:right;'>&nbsp;</i>
                        <br><br>{{$tweet->tweet_content}}<br><br>
                        <center>
                            <div class='line'></div>
                        </center>
                        <br>
                        <p style='font-size:15px; '></a>{{$tweet->likes}} people liked this.</p>
                    </div>
                </div>
            @endforeach
        @else
            <h4>{{$user->username}} haven't Tweeted anything yet...</h4>
        @endif


        {{--require_once 'database/dbConfig.php';
        $myTweetsQuery = "SELECT * FROM tweets WHERE tweeter_name='$username' ORDER BY tweet_time DESC LIMIT 0, 50";
        $result = $Conn->query($myTweetsQuery);
        if ($result->num_rows > 0){
        while ($rows = $result->fetch_assoc()){
        echo "
        <div class='row eachTw'>
            <div class='col-md-1 col-xs-2'>
                <img src='".$rows[' tweeter_img']."' style='border:1px solid black;' width='40px' height='40px'>
            </div>
            <div class='col-md-11 col-xs-10'>

                                    <span class='postHeader'>@".$rows['tweeter_name']."<br>
                                    <span style='font-size:14px; color:#bfbfbf; float:right'>".$rows['tweet_time']."</span>
                                </span> <i class='fa fa-clock-o ' style='padding-top:3px; color:#bfbfbf; float:right;'>&nbsp;</i>
                <br><br>".$rows['tweet_content']."<br><br>
                <center>
                    <div class='line'></div>
                </center>
                <br>
                <p style='font-size:15px; '></a> ".$rows['tweet_likes']." people liked this.</p>
            </div>
        </div>
        ";
        }
        } else{
        echo "<h4>$username haven't Tweeted anything yet...";
            }
        --}}

    </div>


    <br><br><br><br>
    </div>
    </div>

    </div>
@endsection