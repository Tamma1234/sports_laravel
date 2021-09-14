<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    @include('admin.templates.css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('admin.templates.header')
        @include('admin.templates.nav-bar')
        @yield('content')
        @include('admin.templates.footer')
        @include('admin.templates.script')

    </div>
@yield('script')
</body>
</html>