@extends('Admin/adminhead')
    
@section('content')

@if($auth && Auth::User()->role == 'admin') 
	<br>
	<div class="admin">
		<h1><center>Welcome To Admin</center></h1>
	</div>
@endif
            
            
@endsection