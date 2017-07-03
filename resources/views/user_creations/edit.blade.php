@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> User_creations / Edit #{{$user_creation->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('user_creations.update', $user_creation->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('emp_name')) has-error @endif">
                       <label for="emp_name-field">Emp_name</label>
                    <input type="text" id="emp_name-field" name="emp_name" class="form-control" value="{{ is_null(old("emp_name")) ? $user_creation->emp_name : old("emp_name") }}"/>
                       @if($errors->has("emp_name"))
                        <span class="help-block">{{ $errors->first("emp_name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('user_name')) has-error @endif">
                       <label for="user_name-field">User_name</label>
                    <input type="text" id="user_name-field" name="user_name" class="form-control" value="{{ is_null(old("user_name")) ? $user_creation->user_name : old("user_name") }}"/>
                       @if($errors->has("user_name"))
                        <span class="help-block">{{ $errors->first("user_name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('password')) has-error @endif">
                       <label for="password-field">Password</label>
                    <input type="text" id="password-field" name="password" class="form-control" value="{{ is_null(old("password")) ? $user_creation->password : old("password") }}"/>
                       @if($errors->has("password"))
                        <span class="help-block">{{ $errors->first("password") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('confirm_password')) has-error @endif">
                       <label for="confirm_password-field">Confirm_password</label>
                    <input type="text" id="confirm_password-field" name="confirm_password" class="form-control" value="{{ is_null(old("confirm_password")) ? $user_creation->confirm_password : old("confirm_password") }}"/>
                       @if($errors->has("confirm_password"))
                        <span class="help-block">{{ $errors->first("confirm_password") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('role')) has-error @endif">
                       <label for="role-field">Role</label>
                    <input type="text" id="role-field" name="role" class="form-control" value="{{ is_null(old("role")) ? $user_creation->role : old("role") }}"/>
                       @if($errors->has("role"))
                        <span class="help-block">{{ $errors->first("role") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('user_creations.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection
