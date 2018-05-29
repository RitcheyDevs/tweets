<div class="row">
    <div class="col-md-6 col-md-push-3 cusContainer" style="padding:0px;">
        <div style="background-color:#FFFFFF;">
            <a href="/home">
                <img src="/storage/img-assets/twitter_logo.png" width="75px " height="60px " alt="FutatweetsLogo"
                     style="margin:10px 0px 10px 20px">
            </a>
            <div style="float:right; margin-top:30px; margin-right:10px;">
                <img src="{{auth::user()->profile_picture}}" width="20px" height="20px" alt="img"
                     style="border:1px solid black; border-radius:10px;">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">[Logout]
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
        <!--Nav space-->
        <?php $req = $_SERVER['REQUEST_URI'] ?>
        <div class="icon-bar">
            <a href="/home" class="<?php if ($req == '/home') echo "active" ?>"><i class="fa fa-home tabLogo "></i></a>
            <a href="/profile" class="<?php if ($req == '/profile') echo "active" ?>"><i class="fa fa-user tabLogo "></i></a>
            <a href="/create_tweet" class="<?php if ($req == '/create_tweet') echo "active" ?>"><i class="fa fa-twitter tabLogo "></i></a>
            <a href="/search" class="<?php if ($req == '/search') echo "active" ?>"><i class="fa fa-search tabLogo "></i></a>
        </div>
        <br>
            @include('inc.messages')