@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Employee_wise_reports / Edit #{{$employee_wise_report->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('employee_wise_reports.update', $employee_wise_report->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('branch')) has-error @endif">
                       <label for="branch-field">Branch</label>
                    <input type="text" id="branch-field" name="branch" class="form-control" value="{{ is_null(old("branch")) ? $employee_wise_report->branch : old("branch") }}"/>
                       @if($errors->has("branch"))
                        <span class="help-block">{{ $errors->first("branch") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('division_name')) has-error @endif">
                       <label for="division_name-field">Division_name</label>
                    <input type="text" id="division_name-field" name="division_name" class="form-control" value="{{ is_null(old("division_name")) ? $employee_wise_report->division_name : old("division_name") }}"/>
                       @if($errors->has("division_name"))
                        <span class="help-block">{{ $errors->first("division_name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('emp_name')) has-error @endif">
                       <label for="emp_name-field">Emp_name</label>
                    <input type="text" id="emp_name-field" name="emp_name" class="form-control" value="{{ is_null(old("emp_name")) ? $employee_wise_report->emp_name : old("emp_name") }}"/>
                       @if($errors->has("emp_name"))
                        <span class="help-block">{{ $errors->first("emp_name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('from_date')) has-error @endif">
                       <label for="from_date-field">From_date</label>
                    <input type="text" id="from_date-field" name="from_date" class="form-control date-picker" value="{{ is_null(old("from_date")) ? $employee_wise_report->from_date : old("from_date") }}"/>
                       @if($errors->has("from_date"))
                        <span class="help-block">{{ $errors->first("from_date") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('to_date')) has-error @endif">
                       <label for="to_date-field">To_date</label>
                    <input type="text" id="to_date-field" name="to_date" class="form-control date-picker" value="{{ is_null(old("to_date")) ? $employee_wise_report->to_date : old("to_date") }}"/>
                       @if($errors->has("to_date"))
                        <span class="help-block">{{ $errors->first("to_date") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('employee_wise_reports.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
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
