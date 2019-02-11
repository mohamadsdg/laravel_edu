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
        $this->validate($request,[
            'body' => 'required|min:10'
        ]);


        $note = new Note;
        $note->body = $request->body;
//        $note->user_id = Auth::id();
        $note->user_id = 1;
        $card->notes()->save($note);

        //////// Session /////////
        //Session::flash('status', 'Task was successful!'); // scope resolution operator
        //$request->session()->flash('status', 'Task was successful!');
        session()->flash('status', 'Task was successful!');
//        session(['status' =>'Task was successful!']);
//        session()->put('status' ,'Task was successful!');
//        session()->forget('status');

        //////// End Session /////////


//        return \Redirect::to('url');          // :: name scope resolution operator
//        return redirect()->to('url');     // -> associate class or helper
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
//        $note = new Note;
//        $note->body = $request->body;
//        $card->addNote($note);



        return back();     // just back url

    }

    public function edit(Note $note)
    {
        // $id
//        $note = Note::find($id)->with('card')->get(); //eager loading
//        return $note;
        return view('cards.edit', compact('note'));
    }

    public function update(Note $note, Request $request)
    {
        $note->update($request->all());

        return back();
    }
}
