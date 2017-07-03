@extends('layout')
@section('header')
<div class="page-header">
        <h1>Attendance_entries / Show #{{$attendance_entry->id}}</h1>
        <form action="{{ route('attendance_entries.destroy', $attendance_entry->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('attendance_entries.edit', $attendance_entry->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="attendance_month">ATTENDANCE_MONTH</label>
                     <p class="form-control-static">{{$attendance_entry->attendance_month}}</p>
                </div>
                    <div class="form-group">
                     <label for="branch_name">BRANCH_NAME</label>
                     <p class="form-control-static">{{$attendance_entry->branch_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="division_name">DIVISION_NAME</label>
                     <p class="form-control-static">{{$attendance_entry->division_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="emp_name">EMP_NAME</label>
                     <p class="form-control-static">{{$attendance_entry->emp_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="working_days">WORKING_DAYS</label>
                     <p class="form-control-static">{{$attendance_entry->working_days}}</p>
                </div>
                    <div class="form-group">
                     <label for="absecent_days">ABSECENT_DAYS</label>
                     <p class="form-control-static">{{$attendance_entry->absecent_days}}</p>
                </div>
                    <div class="form-group">
                     <label for="ot_days">OT_DAYS</label>
                     <p class="form-control-static">{{$attendance_entry->ot_days}}</p>
                </div>
                    <div class="form-group">
                     <label for="advance">ADVANCE</label>
                     <p class="form-control-static">{{$attendance_entry->advance}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('attendance_entries.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection