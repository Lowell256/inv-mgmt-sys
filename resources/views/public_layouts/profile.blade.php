
@extends('base_layouts.base')
@section('content')
    <div class="jumbotron">
        <h2>Profile</h2>
        <div class="md-form">
            <i class="fas fa-user-circle prefix grey-text"></i>
            <input name="username" type="text" class="form-control" required>
            <label>Username</label>
        </div>
        <div class="md-form row">
            <div class="col-sm-12 col-md-4">
                <input name="first_name" type="text" class="form-control" required>
                <label>First Name</label>
            </div>
            <div class="col-sm-12 col-md-4">
                <input name="middle_name" type="text" class="form-control" required>
                <label>Middle Name</label>
            </div>
            <div class="col-sm-12 col-md-4">
                <input name="middle_name" type="text" class="form-control" required>
                <label>Middle Name</label>
            </div>
        </div>
    </div>
@endsection