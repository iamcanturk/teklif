<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body class="hold-transition light-skin sidebar-mini theme-primary">
<div class="wrapper">

    @include('includes.header')
    @include('includes.sidebar')
    <div class="content-wrapper">
        @yield('content')
    </div>
    @include('includes.footer')
    @include('includes.control-sidebar')
</div>
@include('includes.scripts')
</body>
</html>
