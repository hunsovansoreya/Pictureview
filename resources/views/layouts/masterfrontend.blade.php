<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="description" content="Boto Photo Studio HTML Template">
    <meta name="keywords" content="photo, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/slicknav.min.css"/>
    <link rel="stylesheet" href="css/fresco.css"/>
    <link rel="stylesheet" href="css/slick.css"/>

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css"/>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>

</div>
<div>
 @include('partial.navbarfrondend.header');

 @yield('content')

 @include('partial.navbarfrondend.footer');
 </div>
@yield('scripts')
<!--====== Javascripts & Jquery ======-->
<script src="js/js/vendor/jquery-3.2.1.min.js"></script>
<script src="js/js/jquery.slicknav.min.js"></script>
<script src="js/js/slick.min.js"></script>
<script src="js/js/fresco.min.js"></script>
<script src="js/js/main.js"></script>

</body>
</html>
