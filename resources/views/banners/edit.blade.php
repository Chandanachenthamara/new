@extends('layouts.master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Banner</h2>
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
  
    <form action="{{ route('banners-update') }}" method="POST">
        @csrf
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <textarea class="form-control" style="height:150px" value="" name="title">{{ $banner->title }}</textarea>
                </div>
            </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Type:</strong>
                    <select name="type">
                        <option value="1" @if($banner->type==1){{ "selected" }}@endif>Home</option>
                        <option value="2" @if($banner->type==2){{ "selected" }}@endif>About</option>
                        <option value="3" @if($banner->type==3){{ "selected" }}@endif>Service</option>
                        <option value="4" @if($banner->type==4){{ "selected" }}@endif>Hotels</option>
                        <option value="5" @if($banner->type==5){{ "selected" }}@endif>Contact Us</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" class="form-control" name="image" value="" >
                    <img src="{{ asset('storage/app/public/images/'.$banner->image) }}" class="img-fluid img-thumbnail" width="150">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <input type="hidden" value="{{ $banner->id }}" name="banner_id">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection