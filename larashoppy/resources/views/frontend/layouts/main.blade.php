<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@include('frontend.partials.header')
@section('sidebar')
    Đây là nội dung sidebar của layout main
@show

<div class="container">
    @yield('content')
</div>
@include('frontend.partials.footer')
</body>
</html>