@extends('layouts.master')

@section('content')
  <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Contacts</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Contacts</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->



           <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Contacts</h3>

                


              </div>
              <!-- ./card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>PhoneNumber</th>
                      <th>Hotel</th>
                      <th>State</th>
                      <th>City</th>
                      <th>Zip</th>
                      <th>BookingReferenceNumber</th>
                      <th>Comments</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($contacts as $index => $contact)
                    <tr data-widget="expandable-table" aria-expanded="false">
                      <td> {{ $index + 1}}</td>
                      <td>{{ ($contact->name)?($contact->name):'' }}</td>
                      <td>{{ ($contact->email)?($contact->email):'' }}</td>
                      <td>{{ ($contact->phoneno)?$contact->phoneno :''}}</td>
                     <td>{{ ($contact->hotel)?($contact->hotel):'' }}</td>
                     <td>{{ ($contact->state)?$contact->state :''}}</td>
                      <td>{{ ($contact->city)?$contact->city :''}}</td>
                      <td>{{ ($contact->zip)?($contact->zip):'' }}</td>
                     <td>{{ ($contact->bookref_no)?$contact->bookref_no :''}}</td>
                      <td>{{ ($contact->comments)?$contact->comments :''}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

                


              </div>
              <!-- /.card-body -->

              {{--<!-- <div class="card-footer clearfix">
                
                {!! $contacts->links('pagination::bootstrap-4') !!}
              </div> -->--}}

            </div>
            <!-- /.card -->
          </div>
        </div>

        </div><!-- /.container-fluid -->
      </div>
@endsection
