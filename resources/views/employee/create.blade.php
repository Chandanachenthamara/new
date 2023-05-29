@extends('layouts.master')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Employee</h2>
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
<form action="{{ route('employee-store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="form-group">
                <strong>name:</strong>
                <textarea class="form-control" style="height:150px" name="name" value="{{ old('name') }}"></textarea>
            </div>
             <div class="form-group">
                <strong>email:</strong>
                <textarea class="form-control" style="height:150px" name="email" value="{{ old('email') }}"></textarea>
            </div>
             <div class="form-group">
                <strong>address:</strong>
               
                <textarea class="form-control" style="height:150px" name="address" value="{{ old('address') }}"></textarea>
            </div>
             <div class="form-group">
                <strong>phone:</strong>
               
                <textarea class="form-control" style="height:150px" name="phone" value="{{ old('phone') }}"></textarea>
            </div>
             
        </div>
       
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection