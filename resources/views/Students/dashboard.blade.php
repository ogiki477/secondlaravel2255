@extends('Students.master')

@section('content')
<div class="moses">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset">
            <h1 class="text-success">Our DashBoard</h1>
            <table class="table table-hover table-striped">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
      
                </thead>
                <tbody>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                <td> <div class="btn btn-success"> 
                    <a href="logout">Logout Here!</a><br>
              </div></td>
                </tbody>


            </table>
            
            
           
        </div>
    </div>
</div>
</div>

@endsection
