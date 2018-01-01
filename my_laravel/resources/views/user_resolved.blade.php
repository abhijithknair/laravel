<!DOCTYPE html>
<html lang="en">
@include('partials._resolved_head')
<body>
@include('partials._resolved_nav')
<div class="container">
<div class="col-md-12">
<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Id</th>
        <th>User_Id</th>
        <th>Description</th>
        <th>Status</th>
        <th>Image</th>
    </tr>
    </thead>
    @foreach($resolved as $data)
        @if($data['status']=="Resolved")
            <tr>
                <td>
                    {{$data['id']}}
                </td>
                <td>
                    {{$data['user_id']}}
                </td>
                <td>
                    {{$data['desc']}}
                </td>
                <td>
                    {{$data['status']}}
                </td>
                <td>
                    <img height="40px" width="40px" src="{{ asset($data['filepath'])}}">
                </td>
            </tr>

        @endif
    @endforeach
</table>
</div>
</div>
</body>
</html>