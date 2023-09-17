@extends('Admin/adminhead')
    
@section('content')
    <h1> <center>Car List </center></h1>
    @if($auth && Auth::User()->role == 'admin')
    <div class="productcont">
    <table style="width:95%" class="tablepro">
        <tr>   
            <td><b>Car ID </b></td>
            <td><b>Car Image </b></td>
            <td><b>Car Name </b></td>
            <td><b>Brand </b></td>
            <td><b>Vehicle Type </b></td>
            <td><b>Engine </b></td>
            <td><b>Transmision </b></td>
            <td><b>Seat </b></td>
            <td><b>Price </b></td>
            <td><b>Action</b></td>
        </tr>
        @foreach($cars as $c)
        <tr>
            <td><center>{{ $c->id }}</center></td>
            <td><center><img src="{{url('/photo/'. $c->photo)}}" class="img"></center></td>
            <td>{{ $c->car_name}} </td>
            <td>{{ $c->brand->bran}}</td>
            <td>{{ $c->tipe }}</td>
            <td><center>{{ $c->engine }}</center></td>
            <td>{{ $c->transmisi }}</td>
            <td><center>{{ $c->seat }}</center></td>
            <td>{{ $c->price }}</td>
            <td><center><a href="/deletecar/{{ $c->id }}">Delete</a></center></td>
        </tr>
        @endforeach
    </table>
    </div>
    @endif    
@endsection   