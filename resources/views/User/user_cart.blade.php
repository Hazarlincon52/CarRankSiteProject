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
    th{
        height:100px;
        width:100%;
    }
    .pos{
        margin-left: 30px;
        background-color: #EBECF0;
        width:50%;
        border-radius:10px;
        text-align:center;
        padding-top:20px;
    }
    </style>
    <h1><center>My Cart</center></h1><br>


    @foreach($carts as $c)
        <div class="pos">
            <img src="{{url('/photo/'. $c->car->photo)}}"  style="width:400px;"><br>
                <h1>{{ $c->car->car_name }}</h1><br>
                <h3><center><table width="60%">
            <tr>
                <td>Vehicle Type: </td>
                <td>{{ $c->car->tipe }} </td>
            </tr>
            <tr>
                <td>Engine:</td> 
                <td>{{ $c->car->engine }}</td>
            </tr>
            <tr>
                <td>Transmision: </td>
                <td>{{ $c->car->transmisi }}</td>
            </tr>
            <tr>
                <td>Seat: </td>
                <td> {{$c->car->seat }}</td>
            </tr>
            <tr>
                <td>Price: </td>
                <td>{{ $c->car->price }}</td>
            </tr>
            <tr>
                <th><h1><a href="/productdetaildelete/{{ $c->id }}">Delete</a><h1></th>
                <th><h1><a href="/productdetail/{{$c->car->id}}">Detail</a><h1></th>
            </tr>
            </table><center><h3>
            </div>
@endforeach
    @if($car == 0)
    
    <h1 style="font-size:80px;"><center>Your Cart is Empty<center></h1>
    @elseif($car != 0)
        <br>
        <h1>&nbsp;&nbsp;&nbsp;Total Price: {{ $totalprice }}</h1>
        <h1><button class="mar"><a href="/transactioninsert" >Check Out</a></button></h1>
        <br>
    @endif
@endsection