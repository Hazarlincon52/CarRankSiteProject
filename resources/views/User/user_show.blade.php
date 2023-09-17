@extends('User/head')
    
@section('content')
<style>
    .img{
    height:300px;
    width:450PX;
    max-width:450px;
    }   
    td{
        width:500px;
    }
    .button1{
        margin-left:20px;
        border-radius:10px;
        padding: 10px 24px;
    }
</style> 
        <center><h1>Show Room and Workshop</h1></center>
        <div class="col-md-8">
        <h1>ShortBy:</h1>
        <div class="row mt-4 justify-content-left">
            <form>
                <center><button type="submit" name="s" value="Showroom" class="button1">Show Room</button></center>
            </form>
            <form>    
                <center><button type="submit" name="w" value="Workshop" class="button1">Work Shop</button></center>
            </form>
        </div>
        <br><br>
        </div> 
            @foreach($shows as $s)
            <div class="container"  style="background-color: #EBECF0; padding-top:20px; padding-bottom:10px; width:1100px; border-radius:20px;">
            <center><img src="{{url('/photo/'. $s->photo)}}" class="img"><center>
            <center><h1>{{ $s->show_name}}</h1><center><br>
            <table style="width:80% " class="tablecat">
            <tr>
                <th><h3>Place Type:</h3></th>
                <td>{{ $s->show_type }}</td>
            </tr>
            <tr>
                <th><h3>Address:</h3></th>
                <td>{{ $s->address }}</td>
            </tr>
            <tr>
                <th><h3>Open:</h3></th>
                <td>{{ $s->hour }}</td>
            </tr>
            <tr>
                <th><h3>Phone:</h3></th>
                <td>{{ $s->phone }}</td>
            </tr>
            </table>
            </div>
            <br>
            @endforeach
@endsection