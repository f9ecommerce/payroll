@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> User_creations
            <a class="btn btn-success pull-right" href="{{ route('user_creations.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($user_creations->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>EMP_NAME</th>
                        <th>USER_NAME</th>
                        <th>PASSWORD</th>
                        <th>CONFIRM_PASSWORD</th>
                        <th>ROLE</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($user_creations as $user_creation)
                            <tr>
                                <td>{{$user_creation->id}}</td>
                                <td>{{$user_creation->emp_name}}</td>
                    <td>{{$user_creation->user_name}}</td>
                    <td>{{$user_creation->password}}</td>
                    <td>{{$user_creation->confirm_password}}</td>
                    <td>{{$user_creation->role}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('user_creations.show', $user_creation->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('user_creations.edit', $user_creation->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('user_creations.destroy', $user_creation->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $user_creations->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection