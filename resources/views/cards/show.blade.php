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
                    <li class="list-group-item d-flex justify-content-between">
                        <a href="/note/{{$note->id}}/edit">
                            {{$note->body}}
                        </a>
                        <span class="pull-right">
                            {{$note->user->username}}
                        </span>
                    </li>
                @endforeach
            </ul>
            <hr>
            <h3>Add New Note</h3>
            <form method="post" action="{{$card->id}}/notes">
                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                {{csrf_field()}}
                <div class="form-group">
                    <textarea name="body" title="body" class="form-control">{{old('body')}}</textarea>
                </div>
                {{$tag->name}}
                <div class="form-group">
                    <label for="select_tag">choose Tag</label>
                    <select class="form-control" id="select_tag" multiple name="tag">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Note</button>
                </div>
            </form>

            @if (count($errors))
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

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