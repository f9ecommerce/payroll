@extends('layout')
@section('header')
<div class="page-header">
        <h1>Employee_lists / Show #{{$employee_list->id}}</h1>
        <form action="{{ route('employee_lists.destroy', $employee_list->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('employee_lists.edit', $employee_list->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="division_name">DIVISION_NAME</label>
                     <p class="form-control-static">{{$employee_list->division_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="emp_status">EMP_STATUS</label>
                     <p class="form-control-static">{{$employee_list->emp_status}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('employee_lists.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection