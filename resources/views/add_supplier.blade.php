@extends('base_layouts.base')

@section('content')
@include('base_layouts.messages')
<div class="card margin-jumbotron">
    <div class="card-header card-header-primary">
        <h3><i class="far fa-plus-square fa-2x"></i> Add Supplier</h3>
    </div>
    <div class="card-body">
        @include('base_layouts.messages')
        {!! Form::open(['action' => 'SupplyController@add_supplier', 'method' => 'POST']) !!}
        <div class="md-form">
            <label>Supplier Name</label>
            <input name="supplier_name" type="text" class="form-control" required minlength="8" required>
        </div>
        <br>
        <div class="md-form row">
            <div class="col-sm-12 col-md-4">
                   <label class="labels">Address</label>
                <input name="address" type="text" class="form-control"required>
            </div>
            <div class="col-sm-12 col-md-4">
                <label class="labels" >Contact Number</label>
                <input name="contact_number" type="text" class="form-control" required>
            </div>
            <div class="col-sm-12 col-md-4">
                <label class="labels" >Email</label>
                <input name="email" type="text" class="form-control" required>
            </div>
        </div>
        <br>
        <h4>Contact One</h4>
         <div class="md-form row">
            <div class="col-sm-12 col-md-4">
                <label class="labels">Full Name</label>
                <input name="c1_name" type="text" class="form-control"required>
            </div>
            <div class="col-sm-12 col-md-4">
                <label class="labels" >Contact Number</label>
                <input name="c1_number" type="text" class="form-control" required>
            </div>
            <div class="col-sm-12 col-md-4">
                <label class="labels" >Email</label>
                <input name="c1_email" type="email" class="form-control" required>
            </div>
        </div>
        <br>
        <h4>Contact Two</h4>
         <div class="md-form row">
            <div class="col-sm-12 col-md-4">
                <label class="labels">Full Name</label>
                <input name="c2_name" type="text" class="form-control"required>
            </div>
            <div class="col-sm-12 col-md-4">
                <label class="labels" >Contact Number</label>
                <input name="c2_number" type="text" class="form-control" required>
            </div>
            <div class="col-sm-12 col-md-4">
                <label class="labels" >Email</label>
                <input name="c2_email" type="email" class="form-control" required>
            </div>
        </div>
        <br>
        <h4>Contact Three</h4>
         <div class="md-form row">
            <div class="col-sm-12 col-md-4">
                <label class="labels">Full Name</label>
                <input name="c3_name" type="text" class="form-control"required>
            </div>
            <div class="col-sm-12 col-md-4">
                <label class="labels" >Contact Number</label>
                <input name="c3_number" type="text" class="form-control" required>
            </div>
            <div class="col-sm-12 col-md-4">
                <label class="labels" >Email</label>
                <input name="c3_email" type="email" class="form-control" required>
            </div>
        </div>
        <br>      
        <button class="btn btn-primary" type="submit">Save</button>
        {!! Form::close() !!}
    </div>
</div>
@endsection