@extends('User/head')
    
@section('content')
<div class="container" style="background-color: #EBECF0;">
    <div class="card-header">
<h1><center>Register<center></h1><br>
<div class= "row justify-content-center">
    <form method="POST" action="/register" class="form">
        @csrf
        <div class="col-md-6"><input type="text" name="username" autocomplete="off" placeholder="Username"> <br> </div>
            <p style="color: red;">@error('username') {{ $message }}@enderror </p>
        
        <div class="col-md-6"> <input type="text" name="email" autocomplete="off" placeholder="Email"> <br></div>
            <p style="color: red;">@error('email') {{ $message }}@enderror </p>
        
        <div class="col-md-6"><input type="password" name="password" placeholder="Password" > <br></div>
            <p style="color: red;">@error('password') {{ $message }}@enderror </p>
        <center><input type="submit" value="Register"><center>
        </div>
    </form>
    </div>
</div>
@endsection