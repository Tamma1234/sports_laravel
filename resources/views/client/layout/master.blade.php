<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlshopmart.justthemevalley.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Jul 2021 06:46:15 GMT -->

<head>
    <!-- Basic page needs -->
    <meta charset="utf-8">
    <!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ShopMart premium HTML5 &amp; CSS3 template</title>
    <meta name="description"
        content="best template, template free, responsive Template, fashion store, responsive Template, responsive html Template, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
    <meta name="keywords"
        content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive Template, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template" />

    <!-- Mobile specific metas  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- CSS Style -->
    @include('client.template.css')
</head>

<body class="cms-index-index cms-home-page">
    @include('client.template.header-moblie')

    <div id="page">

        @include('client.template.header')

        @yield('content')

        @include('client.template.footer')
        
    </div>

    @include('client.template.script')
    @yield('script')
</body>

<!-- Mirrored from htmlshopmart.justthemevalley.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Jul 2021 06:52:22 GMT -->

</html>
