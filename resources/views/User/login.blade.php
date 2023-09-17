@extends('User/head')
   
@section('content')
    <div class="container"style="background-color: #EBECF0;">
        <div class="card-header">
            <center><h1>LOGIN</h1><center><br>
    
        <div class= "row justify-content-center">
        <form method="POST"style="text-align:Center;" action="/login" class="form">
            @csrf
            <div class="col-md-6"><input type="text" name="email" autocomplete="off" placeholder="Email"> <br> </div>
                <p style="color: red;">@error('email') {{ $message }}@enderror </p>
            <div class="col-md-6"><input type="password" name="password" placeholder="Password"> <br> </div>
                <p style="color: red;">@error('password') {{ $message }}@enderror </p>
        
            <input type="submit" value="Login" >
        </form>
        </div>
        </div>
    </div>
@endsection

