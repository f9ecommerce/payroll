@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Employee_creations / Edit #{{$employee_creation->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('employee_creations.update', $employee_creation->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('emp_name')) has-error @endif">
                       <label for="emp_name-field">Emp_name</label>
                    <input type="text" id="emp_name-field" name="emp_name" class="form-control" value="{{ is_null(old("emp_name")) ? $employee_creation->emp_name : old("emp_name") }}"/>
                       @if($errors->has("emp_name"))
                        <span class="help-block">{{ $errors->first("emp_name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('sur_name')) has-error @endif">
                       <label for="sur_name-field">Sur_name</label>
                    <input type="text" id="sur_name-field" name="sur_name" class="form-control" value="{{ is_null(old("sur_name")) ? $employee_creation->sur_name : old("sur_name") }}"/>
                       @if($errors->has("sur_name"))
                        <span class="help-block">{{ $errors->first("sur_name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('father_name')) has-error @endif">
                       <label for="father_name-field">Father_name</label>
                    <input type="text" id="father_name-field" name="father_name" class="form-control" value="{{ is_null(old("father_name")) ? $employee_creation->father_name : old("father_name") }}"/>
                       @if($errors->has("father_name"))
                        <span class="help-block">{{ $errors->first("father_name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('mobile')) has-error @endif">
                       <label for="mobile-field">Mobile</label>
                    <input type="text" id="mobile-field" name="mobile" class="form-control" value="{{ is_null(old("mobile")) ? $employee_creation->mobile : old("mobile") }}"/>
                       @if($errors->has("mobile"))
                        <span class="help-block">{{ $errors->first("mobile") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('dob')) has-error @endif">
                       <label for="dob-field">Dob</label>
                    <input type="text" id="dob-field" name="dob" class="form-control date-picker" value="{{ is_null(old("dob")) ? $employee_creation->dob : old("dob") }}"/>
                       @if($errors->has("dob"))
                        <span class="help-block">{{ $errors->first("dob") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('qualification')) has-error @endif">
                       <label for="qualification-field">Qualification</label>
                    <input type="text" id="qualification-field" name="qualification" class="form-control" value="{{ is_null(old("qualification")) ? $employee_creation->qualification : old("qualification") }}"/>
                       @if($errors->has("qualification"))
                        <span class="help-block">{{ $errors->first("qualification") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('doj')) has-error @endif">
                       <label for="doj-field">Doj</label>
                    <input type="text" id="doj-field" name="doj" class="form-control date-picker" value="{{ is_null(old("doj")) ? $employee_creation->doj : old("doj") }}"/>
                       @if($errors->has("doj"))
                        <span class="help-block">{{ $errors->first("doj") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('salary')) has-error @endif">
                       <label for="salary-field">Salary</label>
                    <input type="text" id="salary-field" name="salary" class="form-control" value="{{ is_null(old("salary")) ? $employee_creation->salary : old("salary") }}"/>
                       @if($errors->has("salary"))
                        <span class="help-block">{{ $errors->first("salary") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('status')) has-error @endif">
                       <label for="status-field">Status</label>
                    <input type="text" id="status-field" name="status" class="form-control" value="{{ is_null(old("status")) ? $employee_creation->status : old("status") }}"/>
                       @if($errors->has("status"))
                        <span class="help-block">{{ $errors->first("status") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('branch')) has-error @endif">
                       <label for="branch-field">Branch</label>
                    <input type="text" id="branch-field" name="branch" class="form-control" value="{{ is_null(old("branch")) ? $employee_creation->branch : old("branch") }}"/>
                       @if($errors->has("branch"))
                        <span class="help-block">{{ $errors->first("branch") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('division')) has-error @endif">
                       <label for="division-field">Division</label>
                    <input type="text" id="division-field" name="division" class="form-control" value="{{ is_null(old("division")) ? $employee_creation->division : old("division") }}"/>
                       @if($errors->has("division"))
                        <span class="help-block">{{ $errors->first("division") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('designation')) has-error @endif">
                       <label for="designation-field">Designation</label>
                    <input type="text" id="designation-field" name="designation" class="form-control" value="{{ is_null(old("designation")) ? $employee_creation->designation : old("designation") }}"/>
                       @if($errors->has("designation"))
                        <span class="help-block">{{ $errors->first("designation") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('description')) has-error @endif">
                       <label for="description-field">Description</label>
                    <textarea class="form-control" id="description-field" rows="3" name="description">{{ is_null(old("description")) ? $employee_creation->description : old("description") }}</textarea>
                       @if($errors->has("description"))
                        <span class="help-block">{{ $errors->first("description") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('address')) has-error @endif">
                       <label for="address-field">Address</label>
                    <textarea class="form-control" id="address-field" rows="3" name="address">{{ is_null(old("address")) ? $employee_creation->address : old("address") }}</textarea>
                       @if($errors->has("address"))
                        <span class="help-block">{{ $errors->first("address") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('employee_creations.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
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
