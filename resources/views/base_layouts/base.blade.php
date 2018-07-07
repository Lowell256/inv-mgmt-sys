<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('fa/css/all.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="{{ asset('css/material-kit.min.css') }}" rel="stylesheet"/>
</head>
<body>
<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <hr>
            <li class="waves-effect">
            <a href="{{ route('own_profile') }}"><i class="far fa-user-circle fa-2x" style="margin:10px;"></i>{{ session('user_name') }}</a>
            </li>
            <hr>
            @if(session('user_type') === 0)
            <li class="@yield('settings_active') waves-effect">
                <a href=""><i class="fa fa-cogs fa-sm" style="margin:10px;"></i>Settings</a>
            </li>
            @endif
            <li class="@yield('dashboard_active') waves-effect">
                <a href="{{ route('land') }}"><i class="fa fa-columns fa-sm" style="margin:10px;"></i>Dashboard</a>
            </li>
            <li class="@yield('suppliers_active') waves-effect">
                <a href=""><i class="fas fa-boxes fa-sm" style="margin:10px;"></i>Suppliers</a>
            </li>
            <li class="@yield('regulars_active') waves-effect">
                <a href=""><i class="fa fa-address-book fa-sm" style="margin:10px;"></i>Regulars</a>
            </li>
            <li class="@yield('inventory_active') waves-effect">
                <a href=""><i class="fa fa-sitemap fa-sm" style="margin:10px;"></i>Inventory</a>
            </li>
            <li class="@yield('orders_active') waves-effect">
                <a href=""><i class="fa fa-cart-arrow-down fa-sm" style="margin:10px;"></i>Orders</a>
            </li>
        </ul>
    </div>
    <nav class="navbar navbar-default bg-primary">
            <div class="container-fluid">
                    <a class="navbar-brand" href="#menu-toggle" id="menu-toggle"><i class="fas fa-bars"></i></a>
            </div>
    </nav>
<div id="page-content-wrapper">
    @yield('content')
</div>
</div>
<script type="text/javascript" src="{{ asset('js/jquery331.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/material-kit.min.js') }}"></script>
<script src="{{ asset('js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/core/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/plugins/moment.min.js') }}"></script>
@yield('script')
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>
</body>
</html>