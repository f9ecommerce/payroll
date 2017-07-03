@extends('layout')
@section('header')
<div class="page-header">
        <h1>Set_salary_reports / Show #{{$set_salary_report->id}}</h1>
        <form action="{{ route('set_salary_reports.destroy', $set_salary_report->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('set_salary_reports.edit', $set_salary_report->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="branch">BRANCH</label>
                     <p class="form-control-static">{{$set_salary_report->branch}}</p>
                </div>
                    <div class="form-group">
                     <label for="division_name">DIVISION_NAME</label>
                     <p class="form-control-static">{{$set_salary_report->division_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="emp_name">EMP_NAME</label>
                     <p class="form-control-static">{{$set_salary_report->emp_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="salary_month">SALARY_MONTH</label>
                     <p class="form-control-static">{{$set_salary_report->salary_month}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('set_salary_reports.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection