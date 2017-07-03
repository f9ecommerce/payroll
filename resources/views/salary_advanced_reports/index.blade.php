@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Salary_advanced_reports
            <a class="btn btn-success pull-right" href="{{ route('salary_advanced_reports.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($salary_advanced_reports->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>FROM_DATE</th>
                        <th>TO_DATE</th>
                        <th>BRANCH_NAME</th>
                        <th>DIVISION_NAME</th>
                        <th>EMP_NAME</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($salary_advanced_reports as $salary_advanced_report)
                            <tr>
                                <td>{{$salary_advanced_report->id}}</td>
                                <td>{{$salary_advanced_report->from_date}}</td>
                    <td>{{$salary_advanced_report->to_date}}</td>
                    <td>{{$salary_advanced_report->branch_name}}</td>
                    <td>{{$salary_advanced_report->division_name}}</td>
                    <td>{{$salary_advanced_report->emp_name}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('salary_advanced_reports.show', $salary_advanced_report->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('salary_advanced_reports.edit', $salary_advanced_report->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('salary_advanced_reports.destroy', $salary_advanced_report->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $salary_advanced_reports->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection