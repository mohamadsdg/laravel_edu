@extends('master')

@section('title')
    Model | Model Route Binding + relation DB
@stop

@section('main')
    <div class="row">
        <div class="col-sm">
            <h1 class="uk-title">
                {{$card->title}}
            </h1>
            <ul class="list-group">
                @foreach ($card->notes as $note)
                    <li class="list-group-item">
                        <a href="/note/{{$note->id}}/edit">
                            {{$note->body}}
                        </a>
                    </li>
                @endforeach
            </ul>
            <hr>
            <h3>Add New Note</h3>
            <form method="post" action="{{$card->id}}/notes">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <textarea name="body"title="body" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Note</button>
                </div>
            </form>

        </div>
    </div>
@stop

{{--
tip for tinker :

 $note = new App\Note;
 $note->all();
 $note->body = 'hello mamsii';
 $card = Card();
 $card = Card::first();
 $card->notes()->save($note);

 ------------------
 $card->notes()->create(['body'=>'build note with create instead save']);
 used this notaion get catch MassAssignment
 when used this notaion must define $fillable field in class

--}}