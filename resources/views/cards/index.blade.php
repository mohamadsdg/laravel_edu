@extends('master')

@section('title')
    work with database
@stop

@section('main')
    <h1>All Cards</h1>

   <ul>
       @foreach($cards as $card)
            <li>{{$card->title}}</li>
       @endforeach
   </ul>

@stop