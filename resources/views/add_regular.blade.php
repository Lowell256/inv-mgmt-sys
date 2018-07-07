@extends('base_layouts.base')
@section('content')
@include('base_layouts.messages')
<div class="card margin-jumbotron">
    <div class="card-header card-header-primary">
        <h3><i class="fas fa-plus-square fa-2x"></i> Add Regular</h3>
    </div>
    <div class="card-body">
        {!! Form::open(['action' => 'OrdersController@add_regular', 'method' => 'POST']) !!}
        <div class="md-form">
            <label>Customer Full Name</label>
            <input name="full_name" type="text" class="form-control" required minlength="8" required>
        </div>
        <br>
        <div class="md-form row">
            <div class="col-sm-12 col-md-4">
                   <label class="labels">Address</label>
                <input name="address" type="text" class="form-control" required>
            </div>
            <div class="col-sm-12 col-md-4">
                <label class="labels" >Contact number</label>
                <input name="contact_number" type="text" class="form-control" required>
            </div>
            <div class="col-sm-12 col-md-4">
                <label class="labels" >Email</label>
                <input name="email" type="text" class="form-control" required>
            </div>
        </div>
        <br>
        <button class="btn btn-primary waves-effect" type="submit">Save</button>
        {!! Form::close() !!}
    </div>
</div>
@endsection