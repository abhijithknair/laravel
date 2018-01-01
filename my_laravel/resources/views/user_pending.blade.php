<!DOCTYPE html>
<html lang="en">
@include('partials._pending_head')
<body>

@include('partials._pending_nav')
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
        <th>Edit</th>
    </tr>
    </thead>
    @foreach($pending['pendings'] as $data)
        {{--if($pending['users']->id==$data['user_id']){--}}
        @if($data['status']  == "Pending")
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
                <td>
                    <a href="{{ URL::to('/userViewIssue2?id='.$data['id']) }}">Edit</a>
                </td>
            </tr>

        @endif
        {{--}--}}
        {{--endif--}}
    @endforeach
</table>
</div>
</div>
</body>
</html>