@extends('master');

@section('main')
    <a href="/card/{{$note->card_id}}" class="btn btn-sm btn-defualt">Back</a>
    <h3>Edit the Note</h3>

    <form method="post" action="/notes/{{$note->id}}">
        {{--<input type="hidden" name="_method" value="PATCH"> --}}{{--laravel collective notaion--}}
        {{method_field('PATCH')}} {{--use delimeter--}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <textarea name="body" title="body" class="form-control">{{$note->body}}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">update Note</button>
        </div>
    </form>
    <hr>
    {{--@if( !$note->tags->isEmpty())
        <h4>Tags :</h4>
        <ul>
            @foreach($note->tags as $tags )
                <li>{{$tags->name}}</li>
            @endforeach
        </ul>
    @endif--}}

    @unless($note->tags->isEmpty()) {{--same if not--}}
    <h4>Tags :</h4>
    <ul>
        @foreach($note->tags as $tags )
            <li>{{$tags->name}}</li>
        @endforeach
    </ul>

    {{--for edit--}}
    <div class="form-group">
        <label for="select_tag">choose Tag</label>
        <select class="form-control" id="select_tag" multiple name="tag[]">
            @foreach($note->tags as $tag)
                <option selected value="{{$tag->id}}">{{$tag->name}}</option>
            @endforeach
        </select>
    </div>
    @endunless



@stop