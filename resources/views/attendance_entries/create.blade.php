@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Attendance_entries / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('attendance_entries.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('attendance_month')) has-error @endif">
                       <label for="attendance_month-field">Attendance_month</label>
                    <input type="text" id="attendance_month-field" name="attendance_month" class="form-control date-picker" value="{{ old("attendance_month") }}"/>
                       @if($errors->has("attendance_month"))
                        <span class="help-block">{{ $errors->first("attendance_month") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('branch_name')) has-error @endif">
                       <label for="branch_name-field">Branch_name</label>
                    <input type="text" id="branch_name-field" name="branch_name" class="form-control" value="{{ old("branch_name") }}"/>
                       @if($errors->has("branch_name"))
                        <span class="help-block">{{ $errors->first("branch_name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('division_name')) has-error @endif">
                       <label for="division_name-field">Division_name</label>
                    <input type="text" id="division_name-field" name="division_name" class="form-control" value="{{ old("division_name") }}"/>
                       @if($errors->has("division_name"))
                        <span class="help-block">{{ $errors->first("division_name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('emp_name')) has-error @endif">
                       <label for="emp_name-field">Emp_name</label>
                    <input type="text" id="emp_name-field" name="emp_name" class="form-control" value="{{ old("emp_name") }}"/>
                       @if($errors->has("emp_name"))
                        <span class="help-block">{{ $errors->first("emp_name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('working_days')) has-error @endif">
                       <label for="working_days-field">Working_days</label>
                    <input type="text" id="working_days-field" name="working_days" class="form-control" value="{{ old("working_days") }}"/>
                       @if($errors->has("working_days"))
                        <span class="help-block">{{ $errors->first("working_days") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('absecent_days')) has-error @endif">
                       <label for="absecent_days-field">Absecent_days</label>
                    <input type="text" id="absecent_days-field" name="absecent_days" class="form-control" value="{{ old("absecent_days") }}"/>
                       @if($errors->has("absecent_days"))
                        <span class="help-block">{{ $errors->first("absecent_days") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ot_days')) has-error @endif">
                       <label for="ot_days-field">Ot_days</label>
                    <input type="text" id="ot_days-field" name="ot_days" class="form-control" value="{{ old("ot_days") }}"/>
                       @if($errors->has("ot_days"))
                        <span class="help-block">{{ $errors->first("ot_days") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('advance')) has-error @endif">
                       <label for="advance-field">Advance</label>
                    <input type="text" id="advance-field" name="advance" class="form-control" value="{{ old("advance") }}"/>
                       @if($errors->has("advance"))
                        <span class="help-block">{{ $errors->first("advance") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('attendance_entries.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
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
