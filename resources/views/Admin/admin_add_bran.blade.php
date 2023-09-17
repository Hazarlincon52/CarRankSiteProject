@extends('Admin/adminhead')
    
@section('content')
    @if($auth && Auth::User()->role == 'admin')
    <br>
    <center><h1>Create Brand</h1></center>
    <div class="cat">
        <form method="POST" action="admin_add_bran" class="formcat">
        @csrf
        <label for="name"><b>Brand Name</b></label><br><br>
            <input type="text" name="name" autocomplete="off" class="namecat"> <p style="color: red;">@error('name') {{ $message }}@enderror </p><br>
                <input type="submit" value="Add Brand" class="inputcat">
        </form>
    </div>
    @endif
@endsection
   