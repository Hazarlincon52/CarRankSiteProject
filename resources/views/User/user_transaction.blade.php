@extends('User/head')

@section('content')
    <div class="row justify-content-center mt-4" >
        <div class="list-group col-lg-10" >
        <li class="list-group-item disabled text-white"style="background-color:red;" >Transaction History</li>

        @foreach($transactions as $tr)
            <a href="/transactiondetail/{{ $tr->date }}/{{ $tr->time }}" class="list-group-item list-group-item-action">Date and Time: {{$tr->date}} {{$tr->time}} </a>
        @endforeach
        </div>
    </div>
@endsection
