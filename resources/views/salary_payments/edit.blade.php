@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Salary_payments / Edit #{{$salary_payment->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('salary_payments.update', $salary_payment->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('month')) has-error @endif">
                       <label for="month-field">Month</label>
                    <input type="text" id="month-field" name="month" class="form-control date-picker" value="{{ is_null(old("month")) ? $salary_payment->month : old("month") }}"/>
                       @if($errors->has("month"))
                        <span class="help-block">{{ $errors->first("month") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('branch_name')) has-error @endif">
                       <label for="branch_name-field">Branch_name</label>
                    <input type="text" id="branch_name-field" name="branch_name" class="form-control" value="{{ is_null(old("branch_name")) ? $salary_payment->branch_name : old("branch_name") }}"/>
                       @if($errors->has("branch_name"))
                        <span class="help-block">{{ $errors->first("branch_name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('division_name')) has-error @endif">
                       <label for="division_name-field">Division_name</label>
                    <input type="text" id="division_name-field" name="division_name" class="form-control" value="{{ is_null(old("division_name")) ? $salary_payment->division_name : old("division_name") }}"/>
                       @if($errors->has("division_name"))
                        <span class="help-block">{{ $errors->first("division_name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('emp_name')) has-error @endif">
                       <label for="emp_name-field">Emp_name</label>
                    <input type="text" id="emp_name-field" name="emp_name" class="form-control" value="{{ is_null(old("emp_name")) ? $salary_payment->emp_name : old("emp_name") }}"/>
                       @if($errors->has("emp_name"))
                        <span class="help-block">{{ $errors->first("emp_name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('salary')) has-error @endif">
                       <label for="salary-field">Salary</label>
                    <input type="text" id="salary-field" name="salary" class="form-control" value="{{ is_null(old("salary")) ? $salary_payment->salary : old("salary") }}"/>
                       @if($errors->has("salary"))
                        <span class="help-block">{{ $errors->first("salary") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('increment')) has-error @endif">
                       <label for="increment-field">Increment</label>
                    <input type="text" id="increment-field" name="increment" class="form-control" value="{{ is_null(old("increment")) ? $salary_payment->increment : old("increment") }}"/>
                       @if($errors->has("increment"))
                        <span class="help-block">{{ $errors->first("increment") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('abscent')) has-error @endif">
                       <label for="abscent-field">Abscent</label>
                    <input type="text" id="abscent-field" name="abscent" class="form-control" value="{{ is_null(old("abscent")) ? $salary_payment->abscent : old("abscent") }}"/>
                       @if($errors->has("abscent"))
                        <span class="help-block">{{ $errors->first("abscent") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('adjusted_abscent')) has-error @endif">
                       <label for="adjusted_abscent-field">Adjusted_abscent</label>
                    <input type="text" id="adjusted_abscent-field" name="adjusted_abscent" class="form-control" value="{{ is_null(old("adjusted_abscent")) ? $salary_payment->adjusted_abscent : old("adjusted_abscent") }}"/>
                       @if($errors->has("adjusted_abscent"))
                        <span class="help-block">{{ $errors->first("adjusted_abscent") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ot_amount')) has-error @endif">
                       <label for="ot_amount-field">Ot_amount</label>
                    <input type="text" id="ot_amount-field" name="ot_amount" class="form-control" value="{{ is_null(old("ot_amount")) ? $salary_payment->ot_amount : old("ot_amount") }}"/>
                       @if($errors->has("ot_amount"))
                        <span class="help-block">{{ $errors->first("ot_amount") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('adj_otdays')) has-error @endif">
                       <label for="adj_otdays-field">Adj_otdays</label>
                    <input type="text" id="adj_otdays-field" name="adj_otdays" class="form-control" value="{{ is_null(old("adj_otdays")) ? $salary_payment->adj_otdays : old("adj_otdays") }}"/>
                       @if($errors->has("adj_otdays"))
                        <span class="help-block">{{ $errors->first("adj_otdays") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('basic')) has-error @endif">
                       <label for="basic-field">Basic</label>
                    <input type="text" id="basic-field" name="basic" class="form-control" value="{{ is_null(old("basic")) ? $salary_payment->basic : old("basic") }}"/>
                       @if($errors->has("basic"))
                        <span class="help-block">{{ $errors->first("basic") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('bonous')) has-error @endif">
                       <label for="bonous-field">Bonous</label>
                    <input type="text" id="bonous-field" name="bonous" class="form-control" value="{{ is_null(old("bonous")) ? $salary_payment->bonous : old("bonous") }}"/>
                       @if($errors->has("bonous"))
                        <span class="help-block">{{ $errors->first("bonous") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('salary_advance')) has-error @endif">
                       <label for="salary_advance-field">Salary_advance</label>
                    <input type="text" id="salary_advance-field" name="salary_advance" class="form-control" value="{{ is_null(old("salary_advance")) ? $salary_payment->salary_advance : old("salary_advance") }}"/>
                       @if($errors->has("salary_advance"))
                        <span class="help-block">{{ $errors->first("salary_advance") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('hra')) has-error @endif">
                       <label for="hra-field">Hra</label>
                    <input type="text" id="hra-field" name="hra" class="form-control" value="{{ is_null(old("hra")) ? $salary_payment->hra : old("hra") }}"/>
                       @if($errors->has("hra"))
                        <span class="help-block">{{ $errors->first("hra") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('allowance')) has-error @endif">
                       <label for="allowance-field">Allowance</label>
                    <input type="text" id="allowance-field" name="allowance" class="form-control" value="{{ is_null(old("allowance")) ? $salary_payment->allowance : old("allowance") }}"/>
                       @if($errors->has("allowance"))
                        <span class="help-block">{{ $errors->first("allowance") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('other_allowance')) has-error @endif">
                       <label for="other_allowance-field">Other_allowance</label>
                    <input type="text" id="other_allowance-field" name="other_allowance" class="form-control" value="{{ is_null(old("other_allowance")) ? $salary_payment->other_allowance : old("other_allowance") }}"/>
                       @if($errors->has("other_allowance"))
                        <span class="help-block">{{ $errors->first("other_allowance") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('description')) has-error @endif">
                       <label for="description-field">Description</label>
                    <textarea class="form-control" id="description-field" rows="3" name="description">{{ is_null(old("description")) ? $salary_payment->description : old("description") }}</textarea>
                       @if($errors->has("description"))
                        <span class="help-block">{{ $errors->first("description") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('sal_to_be_paid')) has-error @endif">
                       <label for="sal_to_be_paid-field">Sal_to_be_paid</label>
                    <input type="text" id="sal_to_be_paid-field" name="sal_to_be_paid" class="form-control" value="{{ is_null(old("sal_to_be_paid")) ? $salary_payment->sal_to_be_paid : old("sal_to_be_paid") }}"/>
                       @if($errors->has("sal_to_be_paid"))
                        <span class="help-block">{{ $errors->first("sal_to_be_paid") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('payment')) has-error @endif">
                       <label for="payment-field">Payment</label>
                    <input type="text" id="payment-field" name="payment" class="form-control" value="{{ is_null(old("payment")) ? $salary_payment->payment : old("payment") }}"/>
                       @if($errors->has("payment"))
                        <span class="help-block">{{ $errors->first("payment") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('od_open_amount')) has-error @endif">
                       <label for="od_open_amount-field">Od_open_amount</label>
                    <input type="text" id="od_open_amount-field" name="od_open_amount" class="form-control" value="{{ is_null(old("od_open_amount")) ? $salary_payment->od_open_amount : old("od_open_amount") }}"/>
                       @if($errors->has("od_open_amount"))
                        <span class="help-block">{{ $errors->first("od_open_amount") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('od_close_amount')) has-error @endif">
                       <label for="od_close_amount-field">Od_close_amount</label>
                    <input type="text" id="od_close_amount-field" name="od_close_amount" class="form-control" value="{{ is_null(old("od_close_amount")) ? $salary_payment->od_close_amount : old("od_close_amount") }}"/>
                       @if($errors->has("od_close_amount"))
                        <span class="help-block">{{ $errors->first("od_close_amount") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('pay_salary')) has-error @endif">
                       <label for="pay_salary-field">Pay_salary</label>
                    <input type="text" id="pay_salary-field" name="pay_salary" class="form-control" value="{{ is_null(old("pay_salary")) ? $salary_payment->pay_salary : old("pay_salary") }}"/>
                       @if($errors->has("pay_salary"))
                        <span class="help-block">{{ $errors->first("pay_salary") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('salary_payments.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
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
