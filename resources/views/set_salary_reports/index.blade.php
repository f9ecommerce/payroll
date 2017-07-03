@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Set_salary_reports
            <a class="btn btn-success pull-right" href="{{ route('set_salary_reports.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($set_salary_reports->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>BRANCH</th>
                        <th>DIVISION_NAME</th>
                        <th>EMP_NAME</th>
                        <th>SALARY_MONTH</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($set_salary_reports as $set_salary_report)
                            <tr>
                                <td>{{$set_salary_report->id}}</td>
                                <td>{{$set_salary_report->branch}}</td>
                    <td>{{$set_salary_report->division_name}}</td>
                    <td>{{$set_salary_report->emp_name}}</td>
                    <td>{{$set_salary_report->salary_month}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('set_salary_reports.show', $set_salary_report->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('set_salary_reports.edit', $set_salary_report->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('set_salary_reports.destroy', $set_salary_report->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $set_salary_reports->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection