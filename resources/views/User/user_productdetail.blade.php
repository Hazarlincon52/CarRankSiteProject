@extends('User/head')
    
@section('content')
    <style>
    table {
    border: none;
    border-collapse: collapse;
    }
    td{
        width:100%;
    }
    .hai{
        border-radius:10px;
    }
    </style>
@if($auth && Auth::User()->role == 'user')
<form method="POST" action="/productdetailinsert/{{ Auth::User()->id }}/{{ $cars->id }}/">
@endif
@csrf
    <center><h1>Car Detail</h1><center><br>
    <div class="container"  style="background-color: #EBECF0; padding-top:20px; padding-bottom:10px; width:1100px; border-radius:20px;">
    <center><img src="{{url('/photo/'. $cars->photo)}}" class="gambar" style="width:400px;"><center><br>
    <center><h1>{{ $cars->car_name }}</h1><center><br>
    <center><h3><table width="30%">
            <tr>
                <td>Vehicle Type: </td>
                <td>{{ $cars->tipe }} </td>
            </tr>
            <tr>
                <td>Brand: </td>
                <td>{{ $cars->brand->bran }} </td>
            </tr>
            <tr>
                <td>Engine:</td> 
                <td>{{ $cars->engine }}</td>
            </tr>
            <tr>
                <td>Transmision: </td>
                <td>{{ $cars->transmisi }}</td>
            </tr>
            <tr>
                <td>Seat: </td>
                <td> {{$cars->seat }}</td>
            </tr>
            <tr>
                <td>Price: </td>
                <td>{{ $cars->price }}</td>
            </tr>
            
            </table><h3><center>
            @if($auth && Auth::User()->role == 'user')
            <br><input class="hai"type="submit" value="Add To Cart">
            @endif
            </div>
</form>
@endsection