@extends('layouts.master')
 
@section('content')
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <!-- <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div> -->
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('banners-create') }}">ADD</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Image</th>
            <th>Type</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($banners as $banner)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $banner->title }}</td>
            <td>{{ $banner->image }}</td>
            <td>{{ $banner->type }}</td>
            <td>
                <form action="" method="POST">
   @csrf
                    <a class="btn btn-info" href="{{ route('banners-show',$banner->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('banners-edit',$banner->id ) }}">Edit</a>
                   <a class="btn btn-danger" href="{{ route('banners-delete',$banner->id ) }}">Delete</a>
                    
                   
      
                    
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $banners->links() !!}
      
@endsection