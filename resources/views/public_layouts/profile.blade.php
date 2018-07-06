
@extends('base_layouts.base')
@section('content')
@include('base_layouts.messages')
<div class="card margin-jumbotron">
    <div class="card-header card-header-primary">
        <h3><i class="fas fa-user-cog fa-2x"></i> Your Profile</h3>
    </div>
    <div class="card-body">
        {!! Form::open(['action' => 'PublicController@login', 'method' => 'POST']) !!}
        <div class="md-form">
            <label>Username</label>
            <input name="username" type="text" class="form-control" required value="{{ $user->user_name }}" minlength="8" required>
        </div>
        <br>
        <div class="md-form row">
            <div class="col-sm-12 col-md-4">
                   <label class="labels">First Name</label>
                <input name="first_name" type="text" class="form-control" value="{{ $user->first_name }}" required>
            </div>
            <div class="col-sm-12 col-md-4">
                <label class="labels" >Middle Name</label>
                <input name="middle_name" type="text" class="form-control" value="{{ $user->middle_name }}" required>
            </div>
            <div class="col-sm-12 col-md-4">
                <label class="labels" >Last Name</label>
                <input name="middle_name" type="text" class="form-control" value="{{ $user->last_name }}" required>
            </div>
        </div>
        <br>
        <div class="md-form row">
            <div class="col-sm-12 col-md-4">
                <label class="labels">Gender</label>
                <select name="first_name" type="text" class="form-control selectpicker" required>
                    <option value="1" @if($user->gender === 1) selected @endif>
                        Male
                    </option>
                    <option value="0" @if($user->gender === 0) selected @endif >
                        Female
                    </option>
                </select>
            </div>
        </div>
        <br>
        <div class="md-form">
            <input name="email" type="email" class="form-control" value="{{ $user->email }}" required>
            <label >Email</label>
        </div>
        <br>
        <button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#change_password">
            <i class="fas fa-key"></i> Change Password
        </button>
        <button class="btn btn-primary waves-effect" type="submit">Save</button>
        {!! Form::close() !!}
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="change_password_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <label class="labels" >Old password</label>
                    <input name="old_password" type="text" class="form-control" required>
            </div>
            <div class="modal-body">
                <label class="labels" >New password</label>
                <input name="new_password" type="text" class="form-control" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>
@endsection