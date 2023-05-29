@extends('layouts.master')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Banners</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('banners') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $banner->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img src="{{ asset('storage/app/public/images/'.$banner->image) }}" class="img-fluid img-thumbnail" width="150">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Type:</strong>
                @if(($banner->type) == 1) {{  "Home"  }}
                @elseif(($banner->type)== 2){{ "About"}}
                @elseif(($banner->type)== 3){{ "Services"}}
                @elseif(($banner->type)== 4){{ "Hotels"}}
                @elseif(($banner->type)== 5){{ "Contact Us"}}
                @endif
            </div>
        </div>
    </div>
@endsection