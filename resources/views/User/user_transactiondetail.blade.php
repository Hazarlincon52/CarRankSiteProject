
@extends('User/head')
@section('content')

    <div class="h3 mt-4"><center><h1>Transaction Detail<center></h1></div>
    <div class="row">
        @foreach($transactions as $tr)
            <div class="col-lg-6 mx-2">
                <div class="row mt-4">

                    <div class="col-lg-7 text-center bg-white rounded-left">
                    <img src="{{url('/photo/'.$tr->car->photo)}}" alt="" class="gambar" style="width:500px;">
                    </div>

                    <div class="col-lg-5 py-3 px-4 bg-light rounded-right border-top border-right border-bottom border-success">
                        <div class="h4 mt-2">{{$tr->car->car_name}}</div><hr>
                        <div class="p">Car Type     : {{$tr->car->tipe}}</div>
                        <div class="p">Engine       : {{$tr->car->engine}}</div>
                        <div class="p">Transmision  : {{$tr->car->transmisi}}</div>
                        <div class="p">Seat         : {{$tr->car->seat}}</div>
                        <div class="p">Car Price    : {{$tr->car->price}}</div>
                    </div>
                    
                </div>
            </div>
        @endforeach
    </div>
@endsection