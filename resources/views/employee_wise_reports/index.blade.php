@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Employee_wise_reports
            <a class="btn btn-success pull-right" href="{{ route('employee_wise_reports.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($employee_wise_reports->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>BRANCH</th>
                        <th>DIVISION_NAME</th>
                        <th>EMP_NAME</th>
                        <th>FROM_DATE</th>
                        <th>TO_DATE</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($employee_wise_reports as $employee_wise_report)
                            <tr>
                                <td>{{$employee_wise_report->id}}</td>
                                <td>{{$employee_wise_report->branch}}</td>
                    <td>{{$employee_wise_report->division_name}}</td>
                    <td>{{$employee_wise_report->emp_name}}</td>
                    <td>{{$employee_wise_report->from_date}}</td>
                    <td>{{$employee_wise_report->to_date}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('employee_wise_reports.show', $employee_wise_report->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('employee_wise_reports.edit', $employee_wise_report->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('employee_wise_reports.destroy', $employee_wise_report->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $employee_wise_reports->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection