<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/userdashboard">OAS</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="/user_pending">Pending Issues</a></li>
            <li><a href="/user_resolved">Resolved Issues</a></li>
            <li><a href="/userupdate">Update profile</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        {{--<li>{{$useit['email']}}</li>--}}
            <li><a href="/login"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
    </div>
</nav>