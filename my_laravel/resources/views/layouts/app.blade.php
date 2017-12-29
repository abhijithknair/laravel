<!DOCTYPE html>
<html>
@include('partials._head')
<body class="bg">
    <div id="app" class="width-full">
            @yield('content')
    </div>
    @include('partials._footer')
</body>
</html>