@extends('layouts.master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Employees</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('employees') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('employee-update', $employees->id)  }}" method="POST">
        @csrf
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>name:</strong>
                    <textarea class="form-control" style="height:150px" value="" name="name">{{ $employees->name }}</textarea>
                    <!-- <input class="form-control" type="text" name="name" value="{{ $employees->name }}"> -->
                </div>
                <div class="form-group">
                    <strong>email:</strong>
                    <textarea class="form-control" style="height:150px" value="" name="email">{{ $employees->email }}</textarea>
                    <!-- <input class="form-control" type="text" name="name" value="{{ $employees->email }}"> -->
                </div>
                <div class="form-group">
                    <strong>address:</strong>
                    <textarea class="form-control" style="height:150px" value="" name="address">{{ $employees->address }}</textarea>
                    <!-- <input class="form-control" type="text" name="name" value="{{ $employees->address }}"> -->
                </div>
                <div class="form-group">
                    <strong>phone:</strong>
                    <textarea class="form-control" style="height:150px" value="" name="phone">{{ $employees->phone }}</textarea>
                    <!-- <input class="form-control" type="text" name="name" value="{{ $employees->phone }}"> -->
                </div>
            </div>
         
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <input type="hidden" value="{{ $employees->id }}" name="banner_id">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection