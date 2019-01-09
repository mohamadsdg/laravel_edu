@extends('master')

@section('title')
    Route to controller
@stop

@section('main')
    <div class="flex-center position-ref full-height">
        {{--used structure blade--}}
        <div>
            <ul>
                @foreach ($people as $d)
                    <li style="color: #000;">{{$d}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@stop
