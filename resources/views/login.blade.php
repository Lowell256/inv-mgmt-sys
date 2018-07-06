@extends('base_layouts.base')

@section('contents')
<div class="row">
<div class="col-xs-12 col-md-4 offset-md-4 login-card">
    <div class="card login-card">
    <div class="card-header success-color white-text">
            <i class="fas fa-user"></i> Login
    </div>
        <div class="card-body">
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
                <button class="btn btn-outline-success waves-effect btn-sm" type="submit">Login</button>
            {!! Form::close() !!}
            
        </div>  
        <div class="card-footer text-muted success-color white-text">
        </div>
    </div>
</div>
</div>
@endsection