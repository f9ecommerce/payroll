@extends('layout')
@section('header')
<div class="page-header">
        <h1>Employee_wise_reports / Show #{{$employee_wise_report->id}}</h1>
        <form action="{{ route('employee_wise_reports.destroy', $employee_wise_report->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('employee_wise_reports.edit', $employee_wise_report->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <p class="form-control-static">{{$employee_wise_report->branch}}</p>
                </div>
                    <div class="form-group">
                     <label for="division_name">DIVISION_NAME</label>
                     <p class="form-control-static">{{$employee_wise_report->division_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="emp_name">EMP_NAME</label>
                     <p class="form-control-static">{{$employee_wise_report->emp_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="from_date">FROM_DATE</label>
                     <p class="form-control-static">{{$employee_wise_report->from_date}}</p>
                </div>
                    <div class="form-group">
                     <label for="to_date">TO_DATE</label>
                     <p class="form-control-static">{{$employee_wise_report->to_date}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('employee_wise_reports.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection