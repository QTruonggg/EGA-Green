<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

@include('frontend.components.head')

<body>
    @include('frontend.components.header')
    @yield('content')
    @include('frontend.components.footer')

    @include('frontend.components.script_body')

    @yield('scripts')
</body>

</html>
