
<?php
use App\Http\Controllers\Controller;
use App\cart;

if(Auth::check()){
    $id = Auth::user()->id;
    $cartsum = cart::where('user_id','=',"$id")->count();
}
else{
    $cartsum = 0;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CarRank</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
    <style>
    .mar{
        margin-left :100px;
        margin-top :20px;
    }
    .bar{
        padding-right: 80px;
    }
    body {
        background-color:#bebebe;
        height:1000px;
    }
    .link{
        color:white;
    }
    
    </style>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: #e54140; ">
    <a class="navbar-brand" href="{{ url('/') }}">
    <h1 style="color:white;"><strong>CarRank</strong></h1></a>
    <form>
    <input type="text" name="search" class="bar" value="{{Request::input('search')}}" autocomplete="off">
    <button type="submit">Search</button>
    </form>
        <a href="/show" class="link">Show Room</a>
        @if($auth)
        <a href="/cart/{{ Auth::User()->id }}" class="link">Cart({{$cartsum}})</a>
        <a href="/transaction" class="link">Transaction</a>
        &nbsp; &nbsp;&nbsp; <h3 class="link">{{ Auth::User()->username }} &nbsp; &nbsp;<a href="/logoutuser" class="link">Logout</a></h3>
        
        @else
        <h3 style="text-align:right;">
        <a href="/login" class="link"> Login</a>&nbsp; &nbsp;
        <a href="/register" class="link" >Register</a>
        </h3>
        @endif
    </nav>
    <br>
    @yield('content')
    

</body>
</html>