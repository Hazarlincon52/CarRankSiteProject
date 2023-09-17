@extends('Admin/adminhead')
    
@section('content')
<h1> <center>Create Car </center></h1>
@if($auth && Auth::User()->role == 'admin')
    <div class="productcon">
    <form method="POST" action="admin_add_car" enctype="multipart/form-data" class="form">
    @csrf
        <label for="name">Name </label><br>
            <input type="text" name="name" autocomplete="off" class="namepro"> <p style="color: red;">@error('name') {{ $message }}@enderror </p><br>
        <label for="brand">Brand</label><br>
            <select name="brand" class="namepro">
            @foreach($brans as $b)
                <option value="{{ $b->id }}">{{ $b->bran }}</option>
            @endforeach
            </select><br><br>

        <label for="vtype">Vehicle Type </label><br>
            <input type="text" name="vtype" class="namepro" autocomplete="off"><p style="color: red;">@error('vtype') {{ $message }}@enderror </p><br>
        
        <label for="engine">Engine </label><br>
            <input type="text" name="engine" class="namepro" autocomplete="off"><p style="color: red;">@error('engine') {{ $message }}@enderror </p><br>
        
        <label for="transmision">Transmision </label><br>
            <select name="transmision" class="namepro">
                <option value="Automatic">Automatic</option>
                <option value="Manual">Manual</option>
            </select><br><br>
        
        <label for="seat">Seat </label><br>
            <select name="seat" class="namepro">
                <option value="2">2</option>
                <option value="4">4</option>
                <option value="7">7</option>
            </select><br><br>
        
        <label for="price">Price </label><br>
            <input type="text" name="price" class="namepro"><p style="color: red;" >@error('price') {{ $message }}@enderror </p><br>
        
        <b><label for="image">Choose Image File </label></b><br><br>
            <input type="file" name="file" ><p style="color: red;">@error('file') {{ $message }}@enderror </p><br>
        <input type="submit" value="Add Car" class="inputpro">
    </form>
    </div>
        @endif

@endsection
