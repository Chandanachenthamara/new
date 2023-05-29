@extends('layouts.master')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show HomeContents</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('homecontents') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $homecontent->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                {{ $homecontent->content }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Type:</strong>
                @if(($homecontent->type) == 1) {{  "About Us"  }}
                @elseif(($homecontent->type)== 2){{ "How it works"}}
                @endif
            </div>
        </div>
    </div>
@endsection