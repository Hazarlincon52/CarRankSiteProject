@extends('User/head')
    
@section('content')

<center><h1>Car Compare</h1><center><br>
    <table>
        <tr>
            <td>
                <div class="container"  style="background-color: #EBECF0; padding-top:20px; padding-bottom:10px; width:680px; height:600px; border-radius:20px;">
                    <center><img src="{{url('/photo/'. $cars->photo)}}" class="gambar" style="width:300px; max-height:220px;"><center><br>
                    <center><h1>{{ $cars->car_name }}</h1><center><br>
                    <center><h3><table width="50%">
                                    <tr>
                                        <td>Vehicle Type: </td>
                                        <td>{{ $cars->tipe }} </td>
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
                                        <td>{{$cars->seat }}</td>
                                    </tr>
                                    <tr>
                                        <td>Price: </td>
                                        <td>{{ $cars->price }}</td>
                                    </tr>
            
                                </table><h3><center>
                </div>
            </td>
            <td>
            @foreach($cars1 as $c)
                <div class="container"  style="background-color: #EBECF0; padding-top:20px; padding-bottom:10px; width:680px; height:600px; border-radius:20px; ">
                    <center><img src="{{url('/photo/'. $c->photo)}}" class="gambar" style="width:300px; max-height:220px;"><center><br>
                    <center><h1>{{ $c->car_name }}</h1><center><br>
                    <center><h3><table width="50%">
                                    <tr>
                                        <td>Vehicle Type: </td>
                                        <td>{{ $c->tipe }} </td>
                                    </tr>
                                    <tr>
                                        <td>Engine:</td> 
                                        <td>{{ $c->engine }}</td>
                                    </tr>
                                    <tr>
                                        <td>Transmision: </td>
                                        <td>{{ $c->transmisi }}</td>
                                    </tr>
                                    <tr>
                                        <td>Seat: </td>
                                        <td> {{$c->seat }}</td>
                                    </tr>
                                    <tr>
                                        <td>Price: </td>
                                        <td>{{ $c->price }}</td>
                                    </tr>
            
                                </table><h3><center>
            
                </div>
            @endforeach
            </td>
        </tr>
    </table>

    <div class="row justify-content-center mt-4">
        {{$cars1->links()}}
    </div>
@endsection