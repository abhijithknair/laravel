{{--@extends('layouts.app')--}}
<!DOCTYPE html>
<html lang="en">
{{--<head>--}}
{{--<title>Dashboard</title>--}}
{{--<meta charset="utf-8">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
{{--</head>--}}
@include('partials._login_head')
@include('partials._user_nav')
<body class="bg">
<div id="app" class="width-full">
    {{--@yield('page-content')--}}
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <form action="{{ URL::to('dashboard2') }}" method="post" enctype="multipart/form-data">
    <p style="color: #2b542c">Select image to upload:</p>
    <input type="file" class="form-control" name="file" id="file">

    <input type="hidden" value="{{ csrf_token() }}" name="_token">
{{--    <input type="hidden" value="{{$userid['id']}}" name="id">--}}

    <div class="row">
    <div class="form-group"><br>
    <label for="desc" style="margin-top: 5px">Description:</label>
    <textarea class="form-control" rows="12" style="resize: none" name="desc" id="desc"></textarea>
    </div>
    <input type="submit" class="btn btn-block btn-primary" style="margin-top: 5px" value="Post" name="Submit">

    </div>
    </form>


    </div>
    </div>
    </div>
    </div>

</div>
<footer class="footerhighlight2">2017 &copy Copyright. All rights reserved.</footer>
</body>
</html>