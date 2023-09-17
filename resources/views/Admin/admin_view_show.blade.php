@extends('Admin/adminhead')
    
@section('content')
<h1> <center>Showroom And Workshop List </center></h1>
    @if($auth && Auth::User()->role == 'admin')
    <div class="showcont">
    <table style="width:95%" class="tableshow">
        <tr>   
            <td><b>ID </b></td>
            <td><b>Image </b></td>
            <td><b>Shop Name </b></td>
            <td><b>Shop Type </b></td>
            <td><b>Address </b></td>
            <td><b>Open And Close </b></td>
            <td><b>Phone </b></td>
            <td><b>Action </b></td>
        </tr>
        @foreach($shows as $s)
        <tr>
            <td><center>{{ $s->id }}</center></td>
            <td><center><img src="{{url('/photo/'. $s->photo)}}" class="img1"></center></td>
            <td>{{ $s->show_name}} </td>
            <td><center>{{ $s->show_type }}</center></td>
            <td class="size">{{ $s->address }}</td>
            <td><center>{{ $s->hour }}</center></td>
            <td>{{ $s->phone }}</td>
            <td><center><a href="/deleteshow/{{ $s->id }}">Delete</a></center></td>
        </tr>
        @endforeach
    </table>
    </div>
    @endif    
@endsection   