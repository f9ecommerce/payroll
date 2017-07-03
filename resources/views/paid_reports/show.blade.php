@extends('layout')
@section('header')
<div class="page-header">
        <h1>Paid_reports / Show #{{$paid_report->id}}</h1>
        <form action="{{ route('paid_reports.destroy', $paid_report->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('paid_reports.edit', $paid_report->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <p class="form-control-static">{{$paid_report->branch_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="division_name">DIVISION_NAME</label>
                     <p class="form-control-static">{{$paid_report->division_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="emp_name">EMP_NAME</label>
                     <p class="form-control-static">{{$paid_report->emp_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="salary_month">SALARY_MONTH</label>
                     <p class="form-control-static">{{$paid_report->salary_month}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('paid_reports.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection