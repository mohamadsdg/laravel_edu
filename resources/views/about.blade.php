@extends('master')

@section('title')
    pass data to blade
@stop

@section('main')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                About Page Here
            </div>
        </div>
        <br>
        {{--used structure pure php--}}
        <ul>
            <?php foreach ($people as $d): ?>
            <li style="color: #000;"><?= $d; ?></li>
            <?php endforeach;?>
        </ul>

        {{--used structure blade--}}
        <ul>
            @if ( empty($people) )
                no people available.
            @else
                people are available.
            @endif

            @unless ($people) {{--means if not if(!) --}}
            @endunless

            @foreach ($people as $d)
                <li style="color: #000;">{{$d}}</li>
            @endforeach
        </ul>
    </div>
@stop
