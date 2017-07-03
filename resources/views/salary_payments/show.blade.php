@extends('layout')
@section('header')
<div class="page-header">
        <h1>Salary_payments / Show #{{$salary_payment->id}}</h1>
        <form action="{{ route('salary_payments.destroy', $salary_payment->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('salary_payments.edit', $salary_payment->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div>
                <div class="form-group">
                     <label for="month">MONTH</label>
                     <p class="form-control-static">{{$salary_payment->month}}</p>
                </div>
                    <div class="form-group">
                     <label for="branch_name">BRANCH_NAME</label>
                     <p class="form-control-static">{{$salary_payment->branch_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="division_name">DIVISION_NAME</label>
                     <p class="form-control-static">{{$salary_payment->division_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="emp_name">EMP_NAME</label>
                     <p class="form-control-static">{{$salary_payment->emp_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="salary">SALARY</label>
                     <p class="form-control-static">{{$salary_payment->salary}}</p>
                </div>
                    <div class="form-group">
                     <label for="increment">INCREMENT</label>
                     <p class="form-control-static">{{$salary_payment->increment}}</p>
                </div>
                    <div class="form-group">
                     <label for="abscent">ABSCENT</label>
                     <p class="form-control-static">{{$salary_payment->abscent}}</p>
                </div>
                    <div class="form-group">
                     <label for="adjusted_abscent">ADJUSTED_ABSCENT</label>
                     <p class="form-control-static">{{$salary_payment->adjusted_abscent}}</p>
                </div>
                    <div class="form-group">
                     <label for="ot_amount">OT_AMOUNT</label>
                     <p class="form-control-static">{{$salary_payment->ot_amount}}</p>
                </div>
                    <div class="form-group">
                     <label for="adj_otdays">ADJ_OTDAYS</label>
                     <p class="form-control-static">{{$salary_payment->adj_otdays}}</p>
                </div>
                    <div class="form-group">
                     <label for="basic">BASIC</label>
                     <p class="form-control-static">{{$salary_payment->basic}}</p>
                </div>
                    <div class="form-group">
                     <label for="bonous">BONOUS</label>
                     <p class="form-control-static">{{$salary_payment->bonous}}</p>
                </div>
                    <div class="form-group">
                     <label for="salary_advance">SALARY_ADVANCE</label>
                     <p class="form-control-static">{{$salary_payment->salary_advance}}</p>
                </div>
                    <div class="form-group">
                     <label for="hra">HRA</label>
                     <p class="form-control-static">{{$salary_payment->hra}}</p>
                </div>
                    <div class="form-group">
                     <label for="allowance">ALLOWANCE</label>
                     <p class="form-control-static">{{$salary_payment->allowance}}</p>
                </div>
                    <div class="form-group">
                     <label for="other_allowance">OTHER_ALLOWANCE</label>
                     <p class="form-control-static">{{$salary_payment->other_allowance}}</p>
                </div>
                    <div class="form-group">
                     <label for="description">DESCRIPTION</label>
                     <p class="form-control-static">{{$salary_payment->description}}</p>
                </div>
                    <div class="form-group">
                     <label for="sal_to_be_paid">SAL_TO_BE_PAID</label>
                     <p class="form-control-static">{{$salary_payment->sal_to_be_paid}}</p>
                </div>
                    <div class="form-group">
                     <label for="payment">PAYMENT</label>
                     <p class="form-control-static">{{$salary_payment->payment}}</p>
                </div>
                    <div class="form-group">
                     <label for="od_open_amount">OD_OPEN_AMOUNT</label>
                     <p class="form-control-static">{{$salary_payment->od_open_amount}}</p>
                </div>
                    <div class="form-group">
                     <label for="od_close_amount">OD_CLOSE_AMOUNT</label>
                     <p class="form-control-static">{{$salary_payment->od_close_amount}}</p>
                </div>
                    <div class="form-group">
                     <label for="pay_salary">PAY_SALARY</label>
                     <p class="form-control-static">{{$salary_payment->pay_salary}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('salary_payments.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection