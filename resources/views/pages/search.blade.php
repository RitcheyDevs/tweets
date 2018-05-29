@extends('layouts.app')

@section('content')
    <div id="recentTw" class="mainContainer2" style="height:auto;">
        <h4>Search User</h4>
        <br>
        <center>
            <div class="bSearch">
                <div class="searchWrapper">
                    {{--<form method="get">--}}
                    {{--<input type="search" class="txtSearch" placeholder="Search" name="txtSearch">--}}
                    {{--<button type="submit" name="btnSearch" class="btnSearch" value=""><span--}}
                    {{--class="glyphicon glyphicon-search"></span></button>--}}
                    {{--</form>--}}

                    {!! Form::open(['action' => 'PagesController@search', 'method' => 'GET']) !!}

                    {{Form::text('search', '', ['class' => 'txtSearch', 'placeholder' => 'Search'])}}
                    {{Form::button('<span class="glyphicon glyphicon-search"></span>', ['class' => 'btnSearch', 'type' => 'submit'])}}

                    {!! Form::close() !!}

                </div>
                <hr>
                @if(count($users) > 0)
                    @foreach($users as $user)
                        <h4>Search Results</h4>
                        <br>
                        <div class='searchResults'>
                            <a href='http://futatweets.com/user/view/{{base64_encode($user->id)}}'>
                                <img src='{{$user->profile_picture}}'>
                                <p>{{$user->username}}</p>
                            </a>
                        </div>
                        <br><br>
                    @endforeach
                @else
                    <p>No User was found</p>
                @endif
                {{--User does not Exist...--}}
            </div>
        </center>
        <br><br><br><br>
    </div>
    </div>

    </div>
    </div>
@endsection