@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Comparision_statements / Edit #{{$comparision_statement->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('comparision_statements.update', $comparision_statement->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('salary_from')) has-error @endif">
                       <label for="salary_from-field">Salary_from</label>
                    <input type="text" id="salary_from-field" name="salary_from" class="form-control date-picker" value="{{ is_null(old("salary_from")) ? $comparision_statement->salary_from : old("salary_from") }}"/>
                       @if($errors->has("salary_from"))
                        <span class="help-block">{{ $errors->first("salary_from") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('salary_to')) has-error @endif">
                       <label for="salary_to-field">Salary_to</label>
                    <input type="text" id="salary_to-field" name="salary_to" class="form-control date-picker" value="{{ is_null(old("salary_to")) ? $comparision_statement->salary_to : old("salary_to") }}"/>
                       @if($errors->has("salary_to"))
                        <span class="help-block">{{ $errors->first("salary_to") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('comparision_statements.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
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
