@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Attendance_entries
            <a class="btn btn-success pull-right" href="{{ route('attendance_entries.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($attendance_entries->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ATTENDANCE_MONTH</th>
                        <th>BRANCH_NAME</th>
                        <th>DIVISION_NAME</th>
                        <th>EMP_NAME</th>
                        <th>WORKING_DAYS</th>
                        <th>ABSECENT_DAYS</th>
                        <th>OT_DAYS</th>
                        <th>ADVANCE</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($attendance_entries as $attendance_entry)
                            <tr>
                                <td>{{$attendance_entry->id}}</td>
                                <td>{{$attendance_entry->attendance_month}}</td>
                    <td>{{$attendance_entry->branch_name}}</td>
                    <td>{{$attendance_entry->division_name}}</td>
                    <td>{{$attendance_entry->emp_name}}</td>
                    <td>{{$attendance_entry->working_days}}</td>
                    <td>{{$attendance_entry->absecent_days}}</td>
                    <td>{{$attendance_entry->ot_days}}</td>
                    <td>{{$attendance_entry->advance}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('attendance_entries.show', $attendance_entry->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('attendance_entries.edit', $attendance_entry->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('attendance_entries.destroy', $attendance_entry->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $attendance_entries->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection