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
<div class="row">
    <div class="col-xs-12 col-md-4 offset-md-4 login-card">
        <div class="card">
        <div class="card-header card-header-primary">
                <i class="fas fa-user"></i> Login
        </div>
        <div class="card-body form-group">
            @include('base_layouts.messages')
            {!! Form::open(['action' => 'PublicController@login', 'method' => 'POST']) !!}
                <div class="md-form">
                    <i class="fas fa-user-circle prefix grey-text"></i>
                    <input name="username" type="text" class="form-control" required>
                    <label>Username</label>
                </div>
                <div class="md-form">
                    <i class="fas fa-lock prefix grey-text"></i>
                     <input name="password" type="password" class="form-control" required>
                       <label>Password</label>
                </div>
                 <button class="btn btn-outline-primary btn-sm" type="submit">Login</button>
            {!! Form::close() !!}   
        </div>  
        <div class="card-footer text-muted success-color white-text">
        </div>
        </div>
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
</body>
</html>