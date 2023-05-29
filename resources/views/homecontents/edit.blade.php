@extends('layouts.master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit HomeContent</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('homecontents') }}"> Back</a>
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
  
    <form action="{{ route('homecontents-update') }}" method="POST">
        @csrf
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <textarea class="form-control" style="height:150px" value="" name="title">{{ $homecontent->title }}</textarea>
                </div>
            </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Type:</strong>
                    <select name="type">
                        <option value="1" @if($homecontent->type==1){{ "selected" }}@endif>About Us</option>
                        <option value="2" @if($homecontent->type==2){{ "selected" }}@endif>How it works</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Content:</strong>
                    <textarea class="form-control" style="height:150px" value="" name="content">{{ $homecontent->content }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <input type="hidden" value="{{ $homecontent->id }}" name="homecontent_id">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection