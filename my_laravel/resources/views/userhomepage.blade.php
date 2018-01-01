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
@include('partials._pending_head')
@include('partials._user_nav')
<body class="bg">
<div id="app" class="width-full">
    {{--@yield('page-content')--}}
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <span><strong>Your Issues:</strong></span>
            </div>
            <div class="col-md-2">
                <span><a href="/userpostissue" class="btn btn-sm btn-primary btn-h1-spacing">Post an Issue</a></span>
            </div><br>
            <div class="col-md-12">
                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>View</th>
                    </thead>

                    <tbody>

                    @foreach($issues as $issue)

                        <tr>
                            <tr>{{$issue->id}}</tr>
                            <td><img src="{{$issue->filepath}}" width="30px" height="30px"> </td>
                            <td>{{substr($issue->desc,0,50)}}{{strlen($issue->desc) > 50 ? "..." : ""}}</td>
                            <td>{{$issue->status}}</td>
                            <td>{{date('M j,Y',strtotime($issue->created_at))}}</td>
                            <td><a href="{{ URL::to('/userViewIssue1?id='.$issue['id']) }}">View</a></td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
                {{--<div class="text-center">--}}
                    {{--{!! $issues->links(); !!}--}}
                {{--</div>--}}

            </div>
        </div>
    </div>
</div>

</div>
<footer class="footerhighlight2">2017 &copy Copyright. All rights reserved.</footer>
</body>
</html>