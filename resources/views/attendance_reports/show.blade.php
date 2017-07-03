@extends('layout')
@section('header')
<div class="page-header">
        <h1>Attendance_reports / Show #{{$attendance_report->id}}</h1>
        <form action="{{ route('attendance_reports.destroy', $attendance_report->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('attendance_reports.edit', $attendance_report->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <p class="form-control-static">{{$attendance_report->branch_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="division_name">DIVISION_NAME</label>
                     <p class="form-control-static">{{$attendance_report->division_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="emp_name">EMP_NAME</label>
                     <p class="form-control-static">{{$attendance_report->emp_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="attendance_month">ATTENDANCE_MONTH</label>
                     <p class="form-control-static">{{$attendance_report->attendance_month}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('attendance_reports.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection