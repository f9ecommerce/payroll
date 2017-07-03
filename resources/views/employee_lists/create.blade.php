@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Employee_lists / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('employee_lists.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('division_name')) has-error @endif">
                       <label for="division_name-field">Division_name</label>
                    <input type="text" id="division_name-field" name="division_name" class="form-control" value="{{ old("division_name") }}"/>
                       @if($errors->has("division_name"))
                        <span class="help-block">{{ $errors->first("division_name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('emp_status')) has-error @endif">
                       <label for="emp_status-field">Emp_status</label>
                    <input type="text" id="emp_status-field" name="emp_status" class="form-control" value="{{ old("emp_status") }}"/>
                       @if($errors->has("emp_status"))
                        <span class="help-block">{{ $errors->first("emp_status") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('employee_lists.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
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
