@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Paymentby_cashiers
            <a class="btn btn-success pull-right" href="{{ route('paymentby_cashiers.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($paymentby_cashiers->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>MONTH</th>
                        <th>BRANCH_NAME</th>
                        <th>DIVISION_NAME</th>
                        <th>EMP_NAME</th>
                        <th>PAYMENT</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($paymentby_cashiers as $paymentby_cashier)
                            <tr>
                                <td>{{$paymentby_cashier->id}}</td>
                                <td>{{$paymentby_cashier->month}}</td>
                    <td>{{$paymentby_cashier->branch_name}}</td>
                    <td>{{$paymentby_cashier->division_name}}</td>
                    <td>{{$paymentby_cashier->emp_name}}</td>
                    <td>{{$paymentby_cashier->payment}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('paymentby_cashiers.show', $paymentby_cashier->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('paymentby_cashiers.edit', $paymentby_cashier->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('paymentby_cashiers.destroy', $paymentby_cashier->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $paymentby_cashiers->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection