<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Note;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
        //        return $request->all(); // use notation variable
        //        return \Request::all(); // use notation class
        //        return request()->all();  // use notation method

        // $note = new Note;
        // $note->body = $request->body;
        // $card->notes()->save($note);

//        return \Redirect::to('url');          // :: name scope resolution operator
//        return redirect()->to('url');     // -> associate class
//        return redirect('url');     // :|

        //save data (way1)
//        $note = new Note(['body' => $request->body]); // called constructor (when used this way define fillable in class )
//        $card->notes()->save($note);

        //save data (way2) define fillable
//        $card->notes()->save(
//            new Note(['body' => $request->body])
//        );

        //save data (way3) // use create (different with save :: create new and save ) (define fillable)
//        $card->notes()->create([
//            'body' => $request->body
//        ]);

        //save data (way4) //get all request but fillable decide witch input must save
//        $card->notes()->create($request->all());

        //save data (way5) // used method and logic into Model
        $note = new Note;
        $note->body = $request->body;
        $card->addNote($note);


         return back();     // just back url

    }
}
