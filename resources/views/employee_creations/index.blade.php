@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Employee_creations
            <a class="btn btn-success pull-right" href="{{ route('employee_creations.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($employee_creations->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>EMP_NAME</th>
                        <th>SUR_NAME</th>
                        <th>FATHER_NAME</th>
                        <th>MOBILE</th>
                        <th>DOB</th>
                        <th>QUALIFICATION</th>
                        <th>DOJ</th>
                        <th>SALARY</th>
                        <th>STATUS</th>
                        <th>BRANCH</th>
                        <th>DIVISION</th>
                        <th>DESIGNATION</th>
                        <th>DESCRIPTION</th>
                        <th>ADDRESS</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($employee_creations as $employee_creation)
                            <tr>
                                <td>{{$employee_creation->id}}</td>
                                <td>{{$employee_creation->emp_name}}</td>
                    <td>{{$employee_creation->sur_name}}</td>
                    <td>{{$employee_creation->father_name}}</td>
                    <td>{{$employee_creation->mobile}}</td>
                    <td>{{$employee_creation->dob}}</td>
                    <td>{{$employee_creation->qualification}}</td>
                    <td>{{$employee_creation->doj}}</td>
                    <td>{{$employee_creation->salary}}</td>
                    <td>{{$employee_creation->status}}</td>
                    <td>{{$employee_creation->branch}}</td>
                    <td>{{$employee_creation->division}}</td>
                    <td>{{$employee_creation->designation}}</td>
                    <td>{{$employee_creation->description}}</td>
                    <td>{{$employee_creation->address}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('employee_creations.show', $employee_creation->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('employee_creations.edit', $employee_creation->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('employee_creations.destroy', $employee_creation->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $employee_creations->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection