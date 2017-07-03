@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Cash_reports / Edit #{{$cash_report->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('cash_reports.update', $cash_report->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('branch_name')) has-error @endif">
                       <label for="branch_name-field">Branch_name</label>
                    <input type="text" id="branch_name-field" name="branch_name" class="form-control" value="{{ is_null(old("branch_name")) ? $cash_report->branch_name : old("branch_name") }}"/>
                       @if($errors->has("branch_name"))
                        <span class="help-block">{{ $errors->first("branch_name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('monthly_totals')) has-error @endif">
                       <label for="monthly_totals-field">Monthly_totals</label>
                    <input type="text" id="monthly_totals-field" name="monthly_totals" class="form-control" value="{{ is_null(old("monthly_totals")) ? $cash_report->monthly_totals : old("monthly_totals") }}"/>
                       @if($errors->has("monthly_totals"))
                        <span class="help-block">{{ $errors->first("monthly_totals") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cash_month')) has-error @endif">
                       <label for="cash_month-field">Cash_month</label>
                    <input type="text" id="cash_month-field" name="cash_month" class="form-control date-picker" value="{{ is_null(old("cash_month")) ? $cash_report->cash_month : old("cash_month") }}"/>
                       @if($errors->has("cash_month"))
                        <span class="help-block">{{ $errors->first("cash_month") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('cash_reports.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
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
