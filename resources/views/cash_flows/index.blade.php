@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Cash_flows
            <a class="btn btn-success pull-right" href="{{ route('cash_flows.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($cash_flows->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>MONTH</th>
                        <th>BRANCH_NAME</th>
                        <th>TYPE</th>
                        <th>CASHIER</th>
                        <th>PAYMENT</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($cash_flows as $cash_flow)
                            <tr>
                                <td>{{$cash_flow->id}}</td>
                                <td>{{$cash_flow->month}}</td>
                    <td>{{$cash_flow->branch_name}}</td>
                    <td>{{$cash_flow->type}}</td>
                    <td>{{$cash_flow->cashier}}</td>
                    <td>{{$cash_flow->payment}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('cash_flows.show', $cash_flow->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('cash_flows.edit', $cash_flow->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('cash_flows.destroy', $cash_flow->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $cash_flows->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection