@extends('Admin/adminhead')
    
@section('content')
<h1> <center>Create Showroom And Workshop </center></h1>
@if($auth && Auth::User()->role == 'admin')
    <div class="showcon">
    <form method="POST" action="admin_add_show" enctype="multipart/form-data" class="form">
    @csrf
        <label for="name">Name </label><br>
            <input type="text" name="name" autocomplete="off" class="namesh"> <p style="color: red;">@error('name') {{ $message }}@enderror </p><br>

        <label for="address">Address </label><br>
            <input type="text" name="address" class="namesh" autocomplete="off"><p style="color: red;">@error('address') {{ $message }}@enderror </p><br>
        
        <label for="hour">Open And Close Ex:(9AM-6PM) </label><br>
            <input type="text" name="hour" class="namesh" autocomplete="off"><p style="color: red;">@error('hour') {{ $message }}@enderror </p><br>
        
        <label for="st">Shop Type </label><br>
            <select name="st" class="namesh">
                <option value="Workshop">Workshop</option>
                <option value="Showroom">Showroom</option>
            </select><br><br>
        
        <label for="phone">Phone </label><br>
            <input type="text" name="phone" class="namesh"><p style="color: red;" >@error('phone') {{ $message }}@enderror </p><br>
        
        <b><label for="image">Choose Image File </label></b><br><br>
            <input type="file" name="file" ><p style="color: red;">@error('file') {{ $message }}@enderror </p><br>
        <input type="submit" value="Add Shop" class="inputsh">
    </form>
    </div>
        @endif

@endsection   