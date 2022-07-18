@extends('Students.master')

@section('content')

<div class="omo">
   
<div class="box-form">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset">
            <h4>Login Here Please!!</h4>
            <form  class="form" action="{{ route('login-user') }}" method="POST">
                @if (Session::Has('Success'))

                    <div class="text-success">{{ Session::get('Success') }}</div>
                @endif
                @if (Session::Has('Fail'))

                <div class="text-success">{{ Session::get('Fail') }}</div>
            @endif
                @csrf
                <table class="table table-hover table-striped">
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
                                <tr>
                                    <td class="text-success"><input type="radio"> Remember my email</td>
                                </tr>
                    </table> 
                <button type="submit" value="submit" class="btn btn-primary">login</button><br><br>
        </form>
            <div class="btn btn-success">
                <h4 class="text-danger">Don't have an account?</h4>
                     <a href="register">Signup Here</a><br>
               </div>

        </div>

    </div>
</div>
</div>
</div>

        
@endsection
