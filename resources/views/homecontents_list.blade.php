@extends('layouts.master')
 
@section('content')
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <!-- <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div> -->
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('homecontents-create') }}">ADD</a>
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
            <th>Content</th>
            <th>Type</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($homecontents as $homecontent)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $homecontent->title }}</td>
            <td>{{ $homecontent->content }}</td>
            <td>{{ $homecontent->type }}</td>
            <td>
                <form action="" method="POST">
   @csrf
                    <a class="btn btn-info" href="{{ route('homecontents-show',$homecontent->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('homecontents-edit',$homecontent->id ) }}">Edit</a>
                   <a class="btn btn-danger" href="{{ route('homecontents-delete',$homecontent->id ) }}">Delete</a>
                    
                   
      
                    
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $homecontents->links() !!}
      
@endsection