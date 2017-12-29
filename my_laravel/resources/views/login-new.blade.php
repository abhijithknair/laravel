@extends('layouts.app')
@section('content')

<div class="container-fluid">



    <div class="panel panel-default" >
        <div style="display:inline; ">
            <img src="{{ asset('image/logo3.png') }}" width="75px" height="75px">
        </div>
        <div style="display:inline;padding-left:10px"><h3 style="display:inline;">Office Administration System</h3></div></div>



    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default text-center" style = "padding:10px;min-height: 300px">
                <h1> Office Administration System </h1>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        @foreach( $trip->photos as $photo )
                            <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        @foreach( $trip->photos as $photo )
                            <div class="item {{ $loop->first ? ' active' : '' }}" >
                                <img src="{{ $photo }}" alt="{{ $trip->listing->name }}">
                            </div>
                        @endforeach
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <p style="text-align: justify-all">This web application is for the use of office staff and the visitors, if you have
                complain regarding any of the broken or defective things you can make your complain
                over here.We will be resolving the problem with that thing as soon as possible.If you
                can than also upload the picture of that defective thing. You will also be able to see
                    the status of your issue and how far the issue is from being resolved.</p>
            </div>
        </div>



        <div class="col-md-4">
            <div class="panel panel-default" style="min-height: 300px">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="/login-new">
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
                                <button type="submit" class="btn btn-primary" >
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <footer style="text-align:center;background-color: black"> 2017 &copy Copyright. All rights reserved.</footer>
@endsection