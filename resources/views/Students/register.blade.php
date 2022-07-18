@extends('Students.master')

@section('content')
<div class="moses">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset">
            <h1 class="text-success">Register Here Please!!</h1>
            <form class="form" action="{{ route('register-user') }}" method="POST">
                @if (Session::Has('Success'))
                <div class="text-success">{{ Session::get('Success') }}</div>
                @endif   
                
                @if (Session::Has('Fail'))
                <div class="text-danger">{{ Session::get('Fail') }}</div>
                @endif    
                
                @csrf
            <table class="table table-hover table-striped">
            <tr>
                <div class="form-group">
                    
                      <td><label for="name">Username:</label></td>  
                      <td><input type="text" name="name" placeholder="Enter your username" value="{{ old('name') }}"></td>
                      <tr>  
                        <td><span class="text-danger">@error('name'){{ $message }}@enderror</span></td>
                      </tr>
                </div>
            </tr>
                    
            <tr>
                <td><label>email:</label></td>
                <td><input type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}"></td>
                <tr><td><span class="text-danger">@error('email'){{ $message }}@enderror</span></td></tr>
                
            </tr>
            <tr>
                <td><label>password:</label></td>
                <td><input type="password" name="password" placeholder="Enter your password" value="{{ old('password') }}"></td>
                <tr><td><span class="text-danger">@error('password'){{ $message }}@enderror</span></td></tr>
            </tr>

            <td><button class="btn btn-primary" type="submit" name="submit">Register</button></td>

            
            </table>

            </form>
            <div class="btn btn-success">
                <h4 class="text-danger">Already Have An Account!!</h4>
                <a href="login">Login Here!</a><br>
          </div>
        </div>
    </div>
</div>
</div>

@endsection