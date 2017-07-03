@extends('layout')
@section('header')
<div class="page-header">
        <h1>Monthly_wise_salary_reports / Show #{{$monthly_wise_salary_report->id}}</h1>
        <form action="{{ route('monthly_wise_salary_reports.destroy', $monthly_wise_salary_report->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('monthly_wise_salary_reports.edit', $monthly_wise_salary_report->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="branch_name">BRANCH_NAME</label>
                     <p class="form-control-static">{{$monthly_wise_salary_report->branch_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="division_name">DIVISION_NAME</label>
                     <p class="form-control-static">{{$monthly_wise_salary_report->division_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="emp_name">EMP_NAME</label>
                     <p class="form-control-static">{{$monthly_wise_salary_report->emp_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="salary_month">SALARY_MONTH</label>
                     <p class="form-control-static">{{$monthly_wise_salary_report->salary_month}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('monthly_wise_salary_reports.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection