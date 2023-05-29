@extends('layouts.master')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Banner</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('banners') }}"> Back</a>
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
   
<form action="{{ route('banners-store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <textarea class="form-control" style="height:150px" name="title" value="{{ old('title') }}"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" class="form-control" name="image" value="{{ old('image') }}"/>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
        <label for="types">Choose Type:</label>

            <select name="type" id="types">
                <option value="">--Select--</option>
           <option value="1">Home</option>
            <option value="2">About</option>
            <option value="3">Services</option>
           <option value="4">Hotels</option>
           <option value="5">Contacts</option>
           </select>
         </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection