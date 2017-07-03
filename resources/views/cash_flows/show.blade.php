@extends('layout')
@section('header')
<div class="page-header">
        <h1>Cash_flows / Show #{{$cash_flow->id}}</h1>
        <form action="{{ route('cash_flows.destroy', $cash_flow->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('cash_flows.edit', $cash_flow->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <p class="form-control-static">{{$cash_flow->month}}</p>
                </div>
                    <div class="form-group">
                     <label for="branch_name">BRANCH_NAME</label>
                     <p class="form-control-static">{{$cash_flow->branch_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="type">TYPE</label>
                     <p class="form-control-static">{{$cash_flow->type}}</p>
                </div>
                    <div class="form-group">
                     <label for="cashier">CASHIER</label>
                     <p class="form-control-static">{{$cash_flow->cashier}}</p>
                </div>
                    <div class="form-group">
                     <label for="payment">PAYMENT</label>
                     <p class="form-control-static">{{$cash_flow->payment}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('cash_flows.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection