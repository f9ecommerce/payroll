@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Salary_payments
            <a class="btn btn-success pull-right" href="{{ route('salary_payments.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($salary_payments->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>MONTH</th>
                        <th>BRANCH_NAME</th>
                        <th>DIVISION_NAME</th>
                        <th>EMP_NAME</th>
                        <th>SALARY</th>
                        <th>INCREMENT</th>
                        <th>ABSCENT</th>
                        <th>ADJUSTED_ABSCENT</th>
                        <th>OT_AMOUNT</th>
                        <th>ADJ_OTDAYS</th>
                        <th>BASIC</th>
                        <th>BONOUS</th>
                        <th>SALARY_ADVANCE</th>
                        <th>HRA</th>
                        <th>ALLOWANCE</th>
                        <th>OTHER_ALLOWANCE</th>
                        <th>DESCRIPTION</th>
                        <th>SAL_TO_BE_PAID</th>
                        <th>PAYMENT</th>
                        <th>OD_OPEN_AMOUNT</th>
                        <th>OD_CLOSE_AMOUNT</th>
                        <th>PAY_SALARY</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($salary_payments as $salary_payment)
                            <tr>
                                <td>{{$salary_payment->id}}</td>
                                <td>{{$salary_payment->month}}</td>
                    <td>{{$salary_payment->branch_name}}</td>
                    <td>{{$salary_payment->division_name}}</td>
                    <td>{{$salary_payment->emp_name}}</td>
                    <td>{{$salary_payment->salary}}</td>
                    <td>{{$salary_payment->increment}}</td>
                    <td>{{$salary_payment->abscent}}</td>
                    <td>{{$salary_payment->adjusted_abscent}}</td>
                    <td>{{$salary_payment->ot_amount}}</td>
                    <td>{{$salary_payment->adj_otdays}}</td>
                    <td>{{$salary_payment->basic}}</td>
                    <td>{{$salary_payment->bonous}}</td>
                    <td>{{$salary_payment->salary_advance}}</td>
                    <td>{{$salary_payment->hra}}</td>
                    <td>{{$salary_payment->allowance}}</td>
                    <td>{{$salary_payment->other_allowance}}</td>
                    <td>{{$salary_payment->description}}</td>
                    <td>{{$salary_payment->sal_to_be_paid}}</td>
                    <td>{{$salary_payment->payment}}</td>
                    <td>{{$salary_payment->od_open_amount}}</td>
                    <td>{{$salary_payment->od_close_amount}}</td>
                    <td>{{$salary_payment->pay_salary}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('salary_payments.show', $salary_payment->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('salary_payments.edit', $salary_payment->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('salary_payments.destroy', $salary_payment->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $salary_payments->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection