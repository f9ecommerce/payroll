@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Employee_creations / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('employee_creations.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('emp_name')) has-error @endif">
                       <label for="emp_name-field">Emp_name</label>
                    <input type="text" id="emp_name-field" name="emp_name" class="form-control" value="{{ old("emp_name") }}"/>
                       @if($errors->has("emp_name"))
                        <span class="help-block">{{ $errors->first("emp_name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('sur_name')) has-error @endif">
                       <label for="sur_name-field">Sur_name</label>
                    <input type="text" id="sur_name-field" name="sur_name" class="form-control" value="{{ old("sur_name") }}"/>
                       @if($errors->has("sur_name"))
                        <span class="help-block">{{ $errors->first("sur_name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('father_name')) has-error @endif">
                       <label for="father_name-field">Father_name</label>
                    <input type="text" id="father_name-field" name="father_name" class="form-control" value="{{ old("father_name") }}"/>
                       @if($errors->has("father_name"))
                        <span class="help-block">{{ $errors->first("father_name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('mobile')) has-error @endif">
                       <label for="mobile-field">Mobile</label>
                    <input type="text" id="mobile-field" name="mobile" class="form-control" value="{{ old("mobile") }}"/>
                       @if($errors->has("mobile"))
                        <span class="help-block">{{ $errors->first("mobile") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('dob')) has-error @endif">
                       <label for="dob-field">Dob</label>
                    <input type="text" id="dob-field" name="dob" class="form-control date-picker" value="{{ old("dob") }}"/>
                       @if($errors->has("dob"))
                        <span class="help-block">{{ $errors->first("dob") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('qualification')) has-error @endif">
                       <label for="qualification-field">Qualification</label>
                    <input type="text" id="qualification-field" name="qualification" class="form-control" value="{{ old("qualification") }}"/>
                       @if($errors->has("qualification"))
                        <span class="help-block">{{ $errors->first("qualification") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('doj')) has-error @endif">
                       <label for="doj-field">Doj</label>
                    <input type="text" id="doj-field" name="doj" class="form-control date-picker" value="{{ old("doj") }}"/>
                       @if($errors->has("doj"))
                        <span class="help-block">{{ $errors->first("doj") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('salary')) has-error @endif">
                       <label for="salary-field">Salary</label>
                    <input type="text" id="salary-field" name="salary" class="form-control" value="{{ old("salary") }}"/>
                       @if($errors->has("salary"))
                        <span class="help-block">{{ $errors->first("salary") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('status')) has-error @endif">
                       <label for="status-field">Status</label>
                    <input type="text" id="status-field" name="status" class="form-control" value="{{ old("status") }}"/>
                       @if($errors->has("status"))
                        <span class="help-block">{{ $errors->first("status") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('branch')) has-error @endif">
                       <label for="branch-field">Branch</label>
                    <input type="text" id="branch-field" name="branch" class="form-control" value="{{ old("branch") }}"/>
                       @if($errors->has("branch"))
                        <span class="help-block">{{ $errors->first("branch") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('division')) has-error @endif">
                       <label for="division-field">Division</label>
                    <input type="text" id="division-field" name="division" class="form-control" value="{{ old("division") }}"/>
                       @if($errors->has("division"))
                        <span class="help-block">{{ $errors->first("division") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('designation')) has-error @endif">
                       <label for="designation-field">Designation</label>
                    <input type="text" id="designation-field" name="designation" class="form-control" value="{{ old("designation") }}"/>
                       @if($errors->has("designation"))
                        <span class="help-block">{{ $errors->first("designation") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('description')) has-error @endif">
                       <label for="description-field">Description</label>
                    <textarea class="form-control" id="description-field" rows="3" name="description">{{ old("description") }}</textarea>
                       @if($errors->has("description"))
                        <span class="help-block">{{ $errors->first("description") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('address')) has-error @endif">
                       <label for="address-field">Address</label>
                    <textarea class="form-control" id="address-field" rows="3" name="address">{{ old("address") }}</textarea>
                       @if($errors->has("address"))
                        <span class="help-block">{{ $errors->first("address") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('employee_creations.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
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
