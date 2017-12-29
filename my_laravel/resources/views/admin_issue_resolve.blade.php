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
            <li>ADMIN</li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/login"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
    </div>
</nav>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="/posted" method="post" enctype="multipart/form-data">
                <p style="color: #2b542c">Select image to upload:</p>
                <input type="file" class="form-control"name="fileToUpload" id="fileToUpload">
                <input type="submit" class="btn btn-block btn-primary" style="margin-top: 5px" value="Upload Image" name="submit">
                <div class="row">
                    <div class="form-group"><br>
                        <label for="desc" style="margin-top: 5px">Description:</label>
                        <textarea class="form-control" rows="12" style="resize: none" id="desc"></textarea>
                    </div>
                    <input type="button" class="btn btn-block btn-success" value="Post">

                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Status
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#" value="0">Pending</a></li>
                            <li><a href="#" value="1">Resolved</a></li>
                        </ul>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
</div>
<footer style="text-align:center;background-color: black;margin-top:10%;"> 2017 &copy Copyright. All rights reserved.</footer>


</body>
</html>

