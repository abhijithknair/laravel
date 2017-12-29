@extends('layouts.app')
@include('partials._login_head')
@section('content')
<div class="container-fluid containerfluid">
@include('partials._login_nav')
    <div class="row row1">
        <div class="col-md-8">
            <div class="panel panel-default text-center" id="panelhighlight1">


                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" >
                            <div class="item active" >
                                <img src="{{ asset('image/1.jpeg') }}" alt="Los Angeles" class="img1">
                            </div>

                            <div class="item">
                                <img src="{{ asset('image/2.jpg') }}" alt="Chicago" class="img1">
                            </div>

                            <div class="item" >
                                <img src="{{ asset('image/3.jpg') }}" alt="New york" class="img1">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
            
                <div class="wording-highlight">This application is for the use of employees working in an organisation. If they found any problems with their workstation or working environment or any kind of dirt somewhere, instantly they can report the issue to the administrator. The employees can report any type of issue with an image of the issue and description.</div>
            </div>
        </div>



        <div class="col-md-4 col-sm-12 col-xs-12 sidebar">
            <div class="panel panel-default" id="panelhighlight2">
                <div class="panel-heading">Login</div>

                <div class="panel-body boxshadow">
                    <form class="form-horizontal formhorizontal" method="post" action="\dashboard">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" placeholder="Username" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-block" >
                                    Login
                                </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href='/reset'>Forgot password?</a>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-3">
                                Not a member?&nbsp<a href='/signup'>Register here.</a>
                            </div>
                        </div>

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-8 col-md-offset-3">--}}
                                {{--<p id="text"></p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<script>--}}
                            {{--function load() {--}}

                                {{--var email = document.getElementById('email').value;--}}
                                {{--var password = document.getElementById('password').value;--}}

                                {{--if(!email){--}}
                                    {{--alert('Enter the email');--}}
                                {{--}--}}

                                {{--if(!password){--}}
                                    {{--alert('Enter the password');--}}
                                {{--}--}}

                                {{--var xhttp;--}}
                                {{--var url = 'login/'+email+'/'+password;--}}

                                {{--var xhttp = new XMLHttpRequest();--}}
                                {{--xhttp.onreadystatechange = function() {--}}
                                    {{--if (this.readyState == 4 && this.status == 200) {--}}
                                        {{--var result = document.getElementById("text").innerHTML = this.responseText;--}}

                                    {{--}--}}
                                {{--};--}}
                                {{--xhttp.open("get", url, true);--}}
                                {{--xhttp.send();--}}
                            {{--}--}}
                        {{--</script>--}}

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection