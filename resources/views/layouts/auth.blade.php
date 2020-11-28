<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('auth.includes.head')
</head>
<body class="hold-transition theme-primary bg-gradient-primary">
<div class="wrapper">
    @yield('content')
</div>
@include('auth.includes.scripts')
</body>
</html>
