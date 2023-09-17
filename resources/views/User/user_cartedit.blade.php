@extends('User/head')
    
@section('content')
<h1><center>Edit Quantity</center></h1>
<form method="POST" action="/productdetaileditQuantity/{{ $carts->id }}/"> 
@csrf
    <table width="50%">
    <tr>
        <td><img src="{{url('/photo/'. $carts->product->image)}}" class="gambar"></td>
        <td><table id="Container2">
            <tr>
                <td>{{ $carts->product->product }}</td>
            </tr>
            <tr>
                <td>Price: {{ $carts->product->price}}</td>
            </tr>
            <tr>
                <td>Quantity: <input type="number" name="quantity" min="1" max="100"></td>
            </tr>
            <tr>
                <td><input type="submit" value="edit"></td>
            <tr>
            </table>
        </td>
    </tr>
    </table>
</form>

@endsection