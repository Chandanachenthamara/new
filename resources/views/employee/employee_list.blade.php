@extends('layouts.master')
 
@section('content')
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <!-- <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div> -->
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('employee-create') }}">ADD</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered" style="text-align:center;">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>address</th>
            <th>phone</th>
           
            <th width="280px">Action</th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $employee->name }}</td>
             <td>{{ $employee->email }}</td>
             <td>{{ $employee->address }}</td>
             <td>{{ $employee->phone }}</td>
           
            <td>
                <form action="" method="POST">
   @csrf
                    <a class="btn btn-info" href="{{ route('employee-show',$employee->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('employee-edit',$employee->id ) }}">Edit</a>
                   <a class="btn btn-danger" href="{{ route('employee-delete',$employee->id ) }}">Delete</a>

                 
                               {{--  <button type="submit" class="btn btn-danger">Delete</button> --}}
      
                    
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $employees->links() !!}
      
@endsection