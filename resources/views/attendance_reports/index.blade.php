@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Attendance_reports
            <a class="btn btn-success pull-right" href="{{ route('attendance_reports.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($attendance_reports->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>BRANCH_NAME</th>
                        <th>DIVISION_NAME</th>
                        <th>EMP_NAME</th>
                        <th>ATTENDANCE_MONTH</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($attendance_reports as $attendance_report)
                            <tr>
                                <td>{{$attendance_report->id}}</td>
                                <td>{{$attendance_report->branch_name}}</td>
                    <td>{{$attendance_report->division_name}}</td>
                    <td>{{$attendance_report->emp_name}}</td>
                    <td>{{$attendance_report->attendance_month}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('attendance_reports.show', $attendance_report->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('attendance_reports.edit', $attendance_report->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('attendance_reports.destroy', $attendance_report->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $attendance_reports->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection