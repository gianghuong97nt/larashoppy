<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@include('frontend.layouts.header')
@section('sidebar')
    Đây là nội dung sidebar của layout main
@show

<div class="container">
    @yield('content')
</div>
@include('frontend.layouts.footer')
</body>
</html>