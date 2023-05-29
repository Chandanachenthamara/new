@extends('layouts.master')
 
@section('content')
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <!-- <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div> -->
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('hotels-create') }}">ADD</a>
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
            <th>Hotel</th>
            <th>Address</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($hotels as $hotel)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $hotel->name }}</td>
            <td>{{ $hotel->address }}</td>
            <td>{{ $hotel->image }}</td>
            <td>
                <form action="" method="POST">
   @csrf
                    <a class="btn btn-info" href="{{ route('hotels-show',$hotel->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('hotels-edit',$hotel->id ) }}">Edit</a>
                   <a class="btn btn-danger" href="{{ route('hotels-delete',$hotel->id ) }}">Delete</a>
                    
                   
      
                    
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $hotels->links() !!}
      
@endsection