@extends('layout')
@section('header')
<div class="page-header">
        <h1>User_creations / Show #{{$user_creation->id}}</h1>
        <form action="{{ route('user_creations.destroy', $user_creation->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('user_creations.edit', $user_creation->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div>
                <div class="form-group">
                     <label for="emp_name">EMP_NAME</label>
                     <p class="form-control-static">{{$user_creation->emp_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="user_name">USER_NAME</label>
                     <p class="form-control-static">{{$user_creation->user_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="password">PASSWORD</label>
                     <p class="form-control-static">{{$user_creation->password}}</p>
                </div>
                    <div class="form-group">
                     <label for="confirm_password">CONFIRM_PASSWORD</label>
                     <p class="form-control-static">{{$user_creation->confirm_password}}</p>
                </div>
                    <div class="form-group">
                     <label for="role">ROLE</label>
                     <p class="form-control-static">{{$user_creation->role}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('user_creations.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection