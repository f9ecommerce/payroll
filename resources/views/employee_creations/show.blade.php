@extends('layout')
@section('header')
<div class="page-header">
        <h1>Employee_creations / Show #{{$employee_creation->id}}</h1>
        <form action="{{ route('employee_creations.destroy', $employee_creation->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('employee_creations.edit', $employee_creation->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <p class="form-control-static">{{$employee_creation->emp_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="sur_name">SUR_NAME</label>
                     <p class="form-control-static">{{$employee_creation->sur_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="father_name">FATHER_NAME</label>
                     <p class="form-control-static">{{$employee_creation->father_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="mobile">MOBILE</label>
                     <p class="form-control-static">{{$employee_creation->mobile}}</p>
                </div>
                    <div class="form-group">
                     <label for="dob">DOB</label>
                     <p class="form-control-static">{{$employee_creation->dob}}</p>
                </div>
                    <div class="form-group">
                     <label for="qualification">QUALIFICATION</label>
                     <p class="form-control-static">{{$employee_creation->qualification}}</p>
                </div>
                    <div class="form-group">
                     <label for="doj">DOJ</label>
                     <p class="form-control-static">{{$employee_creation->doj}}</p>
                </div>
                    <div class="form-group">
                     <label for="salary">SALARY</label>
                     <p class="form-control-static">{{$employee_creation->salary}}</p>
                </div>
                    <div class="form-group">
                     <label for="status">STATUS</label>
                     <p class="form-control-static">{{$employee_creation->status}}</p>
                </div>
                    <div class="form-group">
                     <label for="branch">BRANCH</label>
                     <p class="form-control-static">{{$employee_creation->branch}}</p>
                </div>
                    <div class="form-group">
                     <label for="division">DIVISION</label>
                     <p class="form-control-static">{{$employee_creation->division}}</p>
                </div>
                    <div class="form-group">
                     <label for="designation">DESIGNATION</label>
                     <p class="form-control-static">{{$employee_creation->designation}}</p>
                </div>
                    <div class="form-group">
                     <label for="description">DESCRIPTION</label>
                     <p class="form-control-static">{{$employee_creation->description}}</p>
                </div>
                    <div class="form-group">
                     <label for="address">ADDRESS</label>
                     <p class="form-control-static">{{$employee_creation->address}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('employee_creations.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection