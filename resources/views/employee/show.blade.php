<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> SAIPH CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2 " >
        <div class="row" >
            <div class="col-lg-12 margin-tb">
                <div class="pull-left"  >
                    
                </div>
              {{--   <div class="pull-right mb-2" >
                    <a class="btn btn-success" href="{{ route('employee.create') }}"> Create employee</a>
                </div> --}}
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success" >
                <p>{{ $message }}</p>
            </div>

        @endif
        <table class="table table-bordered" style=" margin-top: 30px; text-align: center;">
            <thead>
                <tr style="color:red;">
                    <th>S.No</th>
                    <th>employee Name</th>
                    <th>employee Email</th>
                    <th>employee Address</th>
                    
                    <th>employee phone</th>

                    
                </tr>
            </thead>

            <tbody>
                <?php
                // dd($employees);
                ?>
                                    <tr>
                        <td>{{ $employees->id }}</td>
                        <td>{{ $employees->name }}</td>
                        <td>{{ $employees->email }}</td>
                        <td>{{ $employees->address }}</td>
                        <td>{{ $employees->phone }}</td>
 <td><a class="btn btn-success" href="{{ route('employees.index') }}">Back</a></td>
                        
                    </tr>  </tbody>
           
        </table>

        <!-- <a class="btn btn-success" href="{{ route('employees.index') }}">Back</a> -->
     
      {{--   {{$employee->links()}} --}}
    </div>
</body>
</html>
