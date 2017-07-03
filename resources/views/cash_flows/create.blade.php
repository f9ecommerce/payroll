@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Cash_flows / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('cash_flows.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('month')) has-error @endif">
                       <label for="month-field">Month</label>
                    <input type="text" id="month-field" name="month" class="form-control date-picker" value="{{ old("month") }}"/>
                       @if($errors->has("month"))
                        <span class="help-block">{{ $errors->first("month") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('branch_name')) has-error @endif">
                       <label for="branch_name-field">Branch_name</label>
                    <input type="text" id="branch_name-field" name="branch_name" class="form-control" value="{{ old("branch_name") }}"/>
                       @if($errors->has("branch_name"))
                        <span class="help-block">{{ $errors->first("branch_name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('type')) has-error @endif">
                       <label for="type-field">Type</label>
                    <input type="text" id="type-field" name="type" class="form-control" value="{{ old("type") }}"/>
                       @if($errors->has("type"))
                        <span class="help-block">{{ $errors->first("type") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cashier')) has-error @endif">
                       <label for="cashier-field">Cashier</label>
                    <input type="text" id="cashier-field" name="cashier" class="form-control" value="{{ old("cashier") }}"/>
                       @if($errors->has("cashier"))
                        <span class="help-block">{{ $errors->first("cashier") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('payment')) has-error @endif">
                       <label for="payment-field">Payment</label>
                    <input type="text" id="payment-field" name="payment" class="form-control" value="{{ old("payment") }}"/>
                       @if($errors->has("payment"))
                        <span class="help-block">{{ $errors->first("payment") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('cash_flows.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
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
