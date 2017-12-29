<!DOCTYPE html>
<html lang="en">
@include('partials._pending_head')
<body>

@include('partials._pending_nav')
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
            </tr>

        @endif
        {{--}--}}
        {{--endif--}}
    @endforeach
</table>
</body>
</html>