@extends('master')

@section('title')
    Model | Model Route Binding + relation DB
@stop

@section('main')
    <div class="uk-flex uk-flex-center full-height uk-child-width-1-1" uk-grid >
        <div>
            <h1 class="uk-title">
                {{$card->title}}
            </h1>
        </div>
       <div>
           <h2 class="uk-title">Notes</h2>
           <ul>
               @foreach ($card->notes as $note)
                   <li>{{$note->body}}</li>
               @endforeach
           </ul>
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