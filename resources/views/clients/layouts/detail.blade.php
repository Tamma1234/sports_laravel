<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlshopmart.justthemevalley.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Jul 2021 06:46:15 GMT -->

<head>
    <!-- Basic page needs -->
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TAM JR SPORT</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/icons/icon-logo.png">

    <!-- CSS Style -->
    @include('clients.templates.css')
</head>

<body class="product-page">

<div class="wrapper">

    @include('clients.templates.header')
    @include('clients.templates.slider-bar')

    @yield('content')

    @include('clients.templates.footer')

</div>

@include('clients.templates.script')
@yield('script')
</body>

<!-- Mirrored from htmlshopmart.justthemevalley.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Jul 2021 06:52:22 GMT -->

</html>
