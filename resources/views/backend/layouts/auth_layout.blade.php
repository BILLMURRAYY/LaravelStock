<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.includes.head_style')
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        @yield('content')
    </div>
<!-- /.login-box -->

@include('backend.includes.foot_script')
</body>
</html>
