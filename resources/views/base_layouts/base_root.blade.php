<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('fa/css/all.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet"/>
</head>
<body>
<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <hr>
            <li class=" waves-effect">
            <a href="{{ route('own_profile') }}"><i class="far fa-user-circle fa-2x" style="margin:10px;"></i>{{ session('user_name') }}</a>
            </li>
            <hr>
            <li>
            </li>
            <li class=" waves-effect">
                <a href=""><i class="fa fa-cogs fa-sm" style="margin:10px;"></i>Settings</a>
            </li>
            <li class=" waves-effect">
                    <a href=""><i class="fa fa-box fa-sm" style="margin:10px;"></i>Suppliers</a>
            </li>
            <li class=" waves-effect">
                    <a href=""><i class="fa fa-address-book fa-sm" style="margin:10px;"></i>Regulars</a>
            </li>
            <li class=" waves-effect">
                    <a href=""><i class="fa fa-sitemap fa-sm" style="margin:10px;"></i>Inventory</a>
            </li>
            <li class=" waves-effect">
                    <a href=""><i class="fa fa-cart-arrow-down fa-sm" style="margin:10px;"></i>Orders</a>
            </li>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark success-color scrolling-navbar ie-nav">
            <div class="navbar-header" >
                <a class="logo navbar-brand" href="#menu-toggle" id="menu-toggle"><span class="dark-blue-text"><i class="fa fa-bars fa-1x"></i></a>
            </div>
        </nav>
<div id="page-content-wrapper">
    @yield('content')
</div>
</div>
<script type="text/javascript" src="{{ asset('js/jquery331.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
@yield('script')
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>
</body>
</html>