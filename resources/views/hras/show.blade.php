@extends('layout')
@section('header')
<div class="page-header">
        <h1>Hras / Show #{{$hra->id}}</h1>
        <form action="{{ route('hras.destroy', $hra->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('hras.edit', $hra->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="devision_name">DEVISION_NAME</label>
                     <p class="form-control-static">{{$hra->devision_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="emp_name">EMP_NAME</label>
                     <p class="form-control-static">{{$hra->emp_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="hra">HRA</label>
                     <p class="form-control-static">{{$hra->hra}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('hras.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection