<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pending Issues</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/stylesheets.css">
    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/css/jquery.dataTables.css">
    <script src="//cdn.datatables.net/1.10.1/js/jquery.dataTables.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
    <script src="//cdn.datatables.net/responsive/1.0.0/js/dataTables.responsive.js"></script>
    <link rel="stylesheet" href="/css/dataTables.responsive.css">
    <script src="/js/datatable.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/userdashboard">OAS</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="/user_pending" class="active">Pending Issues</a></li>
            <li><a href="/user_resolved">Resolved Issues</a></li>
            <li><a href="/userupdate">Update profile</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            {{--<li><a href="/dashboard"><span></span> {{$data['u']->email}}</a></li>--}}
            <li><a href="/login"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
    </div>
</nav>
<form action="/userissueupdate" method="post">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">


    <div class="container">
        <div class="row">
            <div class="form-group"><br>

            {{--@foreach($issue as $data)--}}
            <!--            --><?php //echo "<pre>"; print_r($data); die;  ?>

                <input type="hidden" name="id" value="{{ $data['id'] }}" >
                <label for="filepath" style="margin-top: 5px">Image:</label>
                <img height="75px" width="75px" src="{{ asset( $data['filepath'])}}"><br><br>
                <p><label for="desc" style="margin-top: 5px">Description:</label></p>
                <textarea class="form-control" rows="12" style="resize: none" name="desc" id="desc" >{{$data['desc']}}</textarea><br>

            <input type="submit" class="btn btn-block btn-primary" style="margin-top: 5px" value="Save" name="Submit">

            {{--@endforeach--}}


        </div>
    </div>
</form>
</body>
</html>