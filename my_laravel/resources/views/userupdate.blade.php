@extends('layouts.app')

@section('content')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/userdashboard">OAS</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="/user_pending">Pending Issues</a></li>
                <li><a href="/user_resolved">Resolved Issues</a></li>
                <li><a href="/userupdate" class="active">Update profile</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/login"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update profile</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="/updateuserdetails">
                        {{--{!! Form::model($user, ['route' => ['/updateuserdetails', $user['id']], 'method' => 'PUT']) !!}--}}

                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                            <label for="fname" class="col-md-4 control-label">Firstname</label>
                            <div class="col-md-6">
                                @foreach($users['user'] as $data)
                                    @if($data['id'] == $data['id'])
                                        <input id="firstname" type="text" class="form-control" name="fname" value="{{ $data['fname'] }}" required autofocus>
                                    @endif
                                @endforeach
                                @if ($errors->has('fname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                            <label for="lname" class="col-md-4 control-label">Lastname</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lname" value="{{ old('lname') }}" required autofocus>
                                @if ($errors->has('lname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" disabled>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phnumber') ? ' has-error' : '' }}">
                            <label for="phnumber" class="col-md-4 control-label">Mobile number</label>

                            <div class="col-md-6">
                                <input id="phnumber" type="number" class="form-control" name="phnumber" value="{{ old('phnumber') }}" required autofocus>
                                @if ($errors->has('phnumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phnumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" value="{{ old('dob') }}" required autofocus>
                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                    <!--<div class="form-group">
                            <label for="date1">Date From: </label>
                            <input id="date1" name="date1" type="date"  value="<?php echo date('Y-m-d'); ?>" class="form-control">

                        </div>-->


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
