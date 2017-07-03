@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Cash_reports
            <a class="btn btn-success pull-right" href="{{ route('cash_reports.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($cash_reports->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>BRANCH_NAME</th>
                        <th>MONTHLY_TOTALS</th>
                        <th>CASH_MONTH</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($cash_reports as $cash_report)
                            <tr>
                                <td>{{$cash_report->id}}</td>
                                <td>{{$cash_report->branch_name}}</td>
                    <td>{{$cash_report->monthly_totals}}</td>
                    <td>{{$cash_report->cash_month}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('cash_reports.show', $cash_report->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('cash_reports.edit', $cash_report->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('cash_reports.destroy', $cash_report->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $cash_reports->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection