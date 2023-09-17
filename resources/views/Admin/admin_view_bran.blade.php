@extends('Admin/adminhead')
    
@section('content')
        <h1><center>Brand List</center> </h1>
        @if($auth && Auth::User()->role == 'admin')
        <div class="categorycont">
        
            <table style="width:20%" class="tablecat">
                <tr>
                    <th>Id</th>
                    <th>Brand Name</th>
                </tr>
                @foreach($brans as $b)
                <tr>
                    <td>{{ $b->id }}</td>
                    <td>{{ $b->bran }}</td>
                </tr>
                @endforeach
            </table>
            <br>
        
           </div>
        @endif
    
@endsection    