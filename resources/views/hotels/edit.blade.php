@extends('layouts.master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit HotelDetails</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('hotels') }}"> Back</a>
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
  
    <form action="{{ route('hotels-update') }}" method="POST">
        @csrf
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hotel:</strong>
                    <input type="text" value="{{ $hotel->name }}" name="name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <textarea class="form-control" style="height:150px" value="" name="address">{{ $hotel->address }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" class="form-control" name="image" value="" >
                    <img src="{{ asset('storage/app/public/images/'.$hotel->image) }}" class="img-fluid img-thumbnail" width="150">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <input type="hidden" value="{{ $hotel->id }}" name="hotel_id">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection