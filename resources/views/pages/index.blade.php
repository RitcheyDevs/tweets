@extends('layouts.appindex')

@section('content')

    {{--Navbar--}}
    <div class="container">
        <a href="/"><i class="fa fa-twitter" style="width: 100px; height: 80px; font-size: 80px;"></i></a>
        <div class="searchWrapper">
            <form method="get">
                <input type="search" class="txtSearch" placeholder="Search" name="txtSearch">
                <button type="submit" class="btnSearch" name="btnSearch"><span
                            class="glyphicon glyphicon-search"></span></button>
            </form>
        </div>


    </div>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navBar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>


            <div class="collapse navbar-collapse" id="navBar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#myCarousel">LaraGists</a></li>
                    <li><a href="#signIn">Sign In</a></li>
                    <li><a href="#signIn">Sign Up</a></li>
                    <li><a href="#about">About</a></li>

                </ul>
                <div class="searchWrapperSmall">

                    <form method="get">
                        <input type="search" class="txtSearchSmall" placeholder="Search" name="txtSearch">
                        <button type="submit" class="btnSearchSmall" name="btnSmallSear"><span
                                    class="glyphicon glyphicon-search"></span></button>
                    </form>
                </div>


            </div>
        </div>
    </nav>
    {{--End Navbar--}}

    {{--Carousel--}}
    <div class="container-fluid carousel-wrapper no-margin">
        <div class="container-fluid no-margin">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <center>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active item-empty-box" style="background-color: orange">
                            <img src="">
                            <div class="carousel-caption">
                                <h5>Bootstrap 4 Laravel Preset for Laravel 5.5</h5>
                                <p>You can start using Bootstrap 4 beta with Laravel 5.5 with our new Bootstrap 4 frontend preset. The preset includes scaffolding for SCSS files and imports Bootstrap 4 JavaScript plugins, jQuery, and Popper.js.</p>
                            </div>
                        </div>


                        <div class="item item-empty-box" style="background-color: blue">
                            <img src="">
                            <div class="carousel-caption">
                                <h5>Laravel Bash Aliases</h5>
                                <p>To gain some insights into what others are doing we asked the community to share their bash aliases and quite a few responded with some excellent aliases.</p>
                            </div>
                        </div>

                        <div class="item item-empty-box" style="background-color: green;">
                            <img src="">
                            <div class="carousel-caption">
                                <h5>13 Laravel Admin Panel Generators</h5>
                                <p>Laravel Daily Founder Povilas Korop wrote an excellent guest post that breaks down popular admin panels and backend project builders.</p>
                            </div>
                        </div>
                    </div>
                </center>


                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    {{--End Carousel--}}

    {{--Main Content--}}
    <div class="container-fluid" style="background-color: #f5f0f2;">
        <br>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                @include('inc.messages')
            </div>
        </div>

        <div class="row" id="signIn">
            <div class="col-md-6 col-xs-12 signInTab">
                <h2 class="text-center" style="margin-bottom:10px;">Sign In <span class="glyphicon glyphicon-user"
                                                                                  style="color:#5b3e4d;"></span></h2>
                <br>
                <form class="form-horizontal col-lg-8 col-lg-offset-2" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <center>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">E-Mail Address</label>

                            <div class="">
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}"
                                       required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">Password</label>

                            <div class="">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                    </center>

                    <div class="form-group">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary">Login <i
                                        class="glyphicon glyphicon-log-in"></i>
                            </button>
                            <br>
                            <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </form>

            </div>

            <div class="col-md-6 col-xs-12">
                <div class="signUpTxt" id="#signUp">
                    {{--<form method="post">
                        <center>
                            <h2 style="margin-bottom:10px;">Sign Up <span class="glyphicon glyphicon-user"
                                                                          style="color:#5b3e4d;"></span></h2><br>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                                </button>
                            </div>

                            <div class="form-group">
                                <label for="txtFirstname">Firstname</label>
                                <input type="text" name="txtFirstname" class="form-control" value="" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtOthernames">Othernames</label>
                                <input type="text" name="txtOthernames" class="form-control" value="" required>
                            </div>
                            <br>
                            <!--DONT FORGET TO CHECK AVALIABILITY OF USERNAME-->
                            <div class="form-group">
                                <label for="txtusername">Username</label>
                                <input type="text" maxlength="10" name="txtUsername" class="form-control" value=""
                                       required>
                                <span class="errorSpan"></span>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtPassword">Password</label>
                                <input type="password" name="txtPassword" class="form-control" required>
                                <span class="errorSpan"></span>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtConPassword">Confirm Password</label>
                                <input type="password" name="txtConPassword" class="form-control" required>
                                <span class="errorSpan"></span>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtAddress">Address</label>
                                <input type="text" name="txtAddress" class="form-control" value="" required>
                                <span style="color:#a6a6a6; font-size:12px; float:left;">(e.g: North Gate, South Gate, Abiola, Akinkedo)</span>

                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtCourse">Course</label>
                                <input type="text" name="txtCourse" class="form-control" value="" required>

                            </div>
                            <br>

                            <div class="form-group">
                                <label for="txtBirthday">Birthday</label>
                                <input type="date" name="txtBirthday" class="form-control" value="" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtGender">Gender</label><br>
                                <div class="radio">
                                    <label class="radio-inline"><input type="radio" name="txtGender" required
                                                                       value="male" required>Male</label><br>
                                </div>
                                <div class="radio">
                                    <label class="radio-inline"><input type="radio" name="txtGender" required
                                                                       value="female">Female</label><br>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtPhone">Mobile Phone</label>
                                <input type="text" name="txtPhone" class="form-control" value="" required>
                                <span class="errorSpan"></span>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtEmail">Email</label>
                                <input type="text" name="txtEmail" class="form-control" required value="">
                                <span class="errorSpan"></span>
                                <br>
                                <button class="btn btn-success btn-lg" style="width:100%;" name="btnSignUp"><span
                                            class="glyphicon glyphicon-save"></span>&nbsp; SIGN UP
                                </button>
                            </div>
                        </center>
                    </form>--}}


                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <h2 style="margin-bottom:10px;">Sign Up <span class="glyphicon glyphicon-user"
                                                                      style="color:#5b3e4d;"></span></h2><br>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">Name</label>

                            <div class="">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                                       required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">E-Mail Address</label>

                            <div class="">
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="control-label">Username</label>

                            <div class="">
                                <input id="username" type="text" class="form-control" name="username" required>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">Password</label>

                            <div class="">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="control-label">Confirm Password</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid aboutDiv" id="about">
            <div class="row">
                <div class="col-md-4 col-xs-2">
                    <span class="glyphicon glyphicon-info-sign aboutIcon"></span>
                </div>
                <div class="col-md-8 col-xs-10" style="padding-left:30px;">
                    <h1 style="margin-top: 50px;">About</h1><br>
                    <p class="aboutInfo"><span class="glyphicon glyphicon-envelope"></span> <b>Mail Us:</b><br> <a
                                href="mailto:RitcheyDev@gmail.com">RitcheyDevs@gmail.com</a></p>

                    <p class="aboutInfo"><span class="glyphicon glyphicon-phone"></span> <b>Contact Us:</b><br>
                        08179491869</p>

                    <p class="aboutInfo"><i class="fa fa-facebook-square"></i> <b>Follow Us:</b><br> <a
                                href="http://Facebook.com/FutaTweets">Facebook.com/FutaTweets</a></p>
                    <br>
                    <p>Futarians No.1 Twitter</p>
                    <p>&copy; RitcheyDev 2017</p>
                </div>

            </div>
        </div>
    </footer>

    <script type="text/javascript">
        $(document).ready(function () {
            $('body').scrollspy({
                target: ".navbar",
                offset: 50
            });

            // Add smooth scrolling to all links inside a navbar
            $("#navBar a").on('click', function (event) {

                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash (#)
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area (the speed of the animation)
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function () {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            });

        });

    </script>
@endsection