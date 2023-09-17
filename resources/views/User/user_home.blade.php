@extends('User/head')
@section('content')
<style>
    .button1{
        border-radius:10px;
        padding: 10px 24px;
    }
</style>
<div class="col-md-8">
<h1>Brand:</h1>
    <div class="row mt-4 justify-content-left">
    @foreach($brans as $cb)
        <form>
            &nbsp; &nbsp;&nbsp; &nbsp; <button type="submit" name="b" value="{{ $cb->id }}" class="button1">{{ $cb->bran }}</button> &nbsp;
        </form>
    @endforeach
    </div>
    <br>
    <h1>Sort By:</h1>
    <div class="row mt-4 justify-content-left">
        <form>
            &nbsp; &nbsp;&nbsp; &nbsp; <button type="submit" name="p"  value="1" class="button1">Top Price</button> &nbsp;&nbsp; &nbsp;&nbsp; <button type="submit" name="a"  value="1" class="button1">A-Z</button> &nbsp;
        </form>
    </div>
</div>
    <div class="row mt-4 justify-content-center" >
        @foreach($cars as $c)
            <div class="col-lg-3 px-4 py-4 mx-4 bg-white rounded border border-success"  style="border-radius:20px; ">
            <img src="{{url('/photo/'. $c->photo)}}" height="200px" width="340px">
                <div class="h4 mt-2">{{$c->car_name}}</div>
                    <div class="p">Price: IDR.{{$c->price}}</div>
                        <a href="/compare/{{$c-> id}}"><div class="btn btn-success mt-4" >Compare</div></a>
                        <a href="/productdetail/{{$c-> id}}"><div class="btn btn-success mt-4" >Car Detail</div></a>
                    </div>
        @endforeach
                </div>
    <div class="row justify-content-center mt-4">
      
    </div>
@endsection