<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/dashboard1">OAS</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="/pending">Pending Issues</a></li>
            <li><a href="/resolved">Resolved Issues</a></li>
            <li><a href="/userupdate">Update profile</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/login"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
    </div>
</nav>



<footer style="text-align:center;background-color: black;margin-top:10%;"> 2017 &copy Copyright. All rights reserved.</footer>


</body>
</html>




<!--<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
    <div class="alert alert-success">
{{ session('status') }}
            </div>
@endif
        You are logged in!
    </div>
</div>
</div>
</div>
</div>-->
</body>