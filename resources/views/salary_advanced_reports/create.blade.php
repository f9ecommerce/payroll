@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Salary_advanced_reports / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('salary_advanced_reports.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('from_date')) has-error @endif">
                       <label for="from_date-field">From_date</label>
                    <input type="text" id="from_date-field" name="from_date" class="form-control date-picker" value="{{ old("from_date") }}"/>
                       @if($errors->has("from_date"))
                        <span class="help-block">{{ $errors->first("from_date") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('to_date')) has-error @endif">
                       <label for="to_date-field">To_date</label>
                    <input type="text" id="to_date-field" name="to_date" class="form-control date-picker" value="{{ old("to_date") }}"/>
                       @if($errors->has("to_date"))
                        <span class="help-block">{{ $errors->first("to_date") }}</span>
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
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('salary_advanced_reports.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
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
